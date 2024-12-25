<?php

namespace App\Http\Livewire;

use App\Models\Writer;
use App\Models\WriterPlatform;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Writers extends Component
{
    use WithFileUploads, WithPagination, LivewireAlert;
    protected $writers;
    public  $name, $job, $image, $description, $current_img,$writer_id, $platforms = [],  $search = '', $sortField = 'id', $sortDirection = 'asc';

    public $rules = [
        'name' => 'required|string|max:255',
        'job' => 'required|string|max:255',
        'image' => 'nullable',
        'description' => 'nullable|string',
        'platforms' => 'nullable|array',
        'platforms.*.name_platform' => 'required|string|max:255',
        'platforms.*.url_platform' => 'required|url|max:255',
        'platforms.*.image_platform' => 'nullable|image|max:2048',
    ];


    public function render()
    {
        $this->writers = Writer::where(function ($query) {
            $query->where('name_writer', 'like', '%' . $this->search . '%')
                ->orWhere('job_writer', 'like', '%' . $this->search . '%');
        })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.writers', [
            'writers' => $this->writers,
        ]);
    }

    public function store_writers()
    {
        $this->validate();

        DB::beginTransaction();

        try {
            $writer = new Writer();
            $writer->name_writer = $this->name;
            $writer->job_writer = $this->job;
            $writer->description_writer = $this->description;

            if ($this->image) {
                $fileName = time() . '_' . $this->image->getClientOriginalName();
                $this->image->move(public_path('uploads/writers'), $fileName);
                $writer->image_writer = $fileName;
            }
            $writer->save();

            foreach ($this->platforms as $platform) {
                $platform['writer_id'] = $writer->id;
                $platform['url_platform'] =  $platform['url_platform'];
                $platform['name_platform'] =  $platform['name_platform'];
                $platform['image_platform'] = $platform['image_platform']
                    ? $platform['image_platform']->store('uploads/platforms')
                    : null;

                WriterPlatform::create($platform);
            }
            $this->resetForm();
            DB::commit();
            $this->writers = Writer::all();

            $this->dispatchBrowserEvent('swal:success', [
                'title' => 'تمت الإضافة بنجاح!',
                'text' => 'تمت إضافة الكاتب والمنصات المرتبطة به.',
                'icon' => 'success',
            ]);
            $this->dispatchBrowserEvent('closeModal', ['modalId' => 'modalWritersCreate']);
        } catch (\Exception $e) {
            DB::rollBack();

            $this->dispatchBrowserEvent('swal:error', [
                'title' => 'فشل في الإضافة!',
                'text' => 'حدث خطأ أثناء إضافة الكاتب.',
                'icon' => 'error',
            ]);

            throw $e;
        }
    }

    public function editWriter($id)
    {
        $writer = Writer::with('platforms')->findOrFail($id);
        $this->writer_id = $writer->id;
        $this->name = $writer->name_writer;
        $this->job = $writer->job_writer;
        $this->description = $writer->description_writer;
        $this->current_img = $writer->image_writer;
        $this->platforms = $writer->platforms->toArray();
    }

    public function update()
    {
        $this->validate();
        DB::beginTransaction();
    
        try {
            $writer = Writer::findOrFail($this->writer_id);
            $writer->name_writer = $this->name;
            $writer->job_writer = $this->job;
            $writer->description_writer = $this->description;
    
            if ($this->image instanceof \Livewire\TemporaryUploadedFile) {
                $fileName = time() . '_' . $this->image->getClientOriginalName();
                $this->image->move(public_path('uploads/writers'), $fileName);
                $writer->image_writer = 'uploads/writers/' . $fileName;
            }
    
            $writer->save();
    
            WriterPlatform::where('writer_id', $writer->id)
                ->whereNotIn('id', array_column($this->platforms, 'id'))
                ->delete();
    
            foreach ($this->platforms as $platform) {
                $platform['writer_id'] = $writer->id;
                $platform['image_platform'] = isset($platform['image_platform'])
                    ? $platform['image_platform']->store('uploads/platforms', 'public')
                    : null;
    
                WriterPlatform::updateOrCreate(
                    ['writer_id' => $writer->id, 'platform_id' => $platform['id'] ?? null],
                    $platform
                );
            }
    
            $this->resetForm();
            DB::commit();
    
            session()->flash('message', 'تم التحديث بنجاح!');
            $this->dispatchBrowserEvent('swal:success', [
                'title' => 'تم التحديث بنجاح!',
                'text' => 'تم تحديث الكاتب والمنصات المرتبطة به.',
                'icon' => 'success',
            ]);
            $this->dispatchBrowserEvent('closeModal', ['modalId' => 'modalWritersEdit']);
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('error', 'فشل في تحديث الكاتب والمنصات. السبب: ' . $e->getMessage());
            throw $e;
        }
    }
    


    public function deleteWriter($id)
    {
        Writer::findOrFail($id)->delete();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->job = '';
        $this->description = '';
        $this->image = null;
        $this->platforms = [];
        $this->writer_id = null;
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function addPlatform()
    {
        $this->platforms[] = ['name_platform' => '', 'url_platform' => '', 'image_platform' => null];
    }

    public function removePlatform($index)
    {
        unset($this->platforms[$index]);
        $this->platforms = array_values($this->platforms);
    }

    public function openCreateModal()
    {
        $this->resetForm();
        $this->resetValidation();
        $this->dispatchBrowserEvent('openModal', ['modalId' => 'modalWritersCreate']);
    }
}
