<div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <div class="d-flex align-items-baseline mr-5">
                    <h3>{{ ucwords(__('cp.writers')) }} </h3>
                </div>
                <input style="width: 40%" type="text" class="form-control" placeholder="بحث..." wire:model="search">

                <button class="btn btn-secondary mr-2 btn-success" data-toggle="modal" wire:click="openCreateModal"
                    data-target="#modalWritersCreate">
                    <i class="icon-xl la la-plus"></i>
                    <span>{{ __('cp.add') }}</span>
                </button>
            </div>
        </div>

        <div class="d-flex flex-column-fluid">
            <div class="container">
                <div class="gutter-b example example-compact">
                    <div class="contentTabel">
                        <div class="table-responsive">
                            <table class="table table-hover tableWithSearch" id="tableWithSearch">
                                <thead>
                                    <tr>
                                        <th class="wd-5p">ID</th>
                                        <th> {{ ucwords(__('cp.image')) }}</th>

                                        <th class="wd-25p">
                                            <a class="dark_link" href="#"
                                                wire:click.prevent="sortBy('name_writer')">
                                                {{ ucwords(__('cp.name')) }}
                                                @if ($sortField === 'name_writer')
                                                    @if ($sortDirection === 'asc')
                                                        <i class="la la-arrow-up"></i>
                                                    @else
                                                        <i class="la la-arrow-down"></i>
                                                    @endif
                                                @endif
                                            </a>
                                        </th>
                                        <th class="wd-25p">
                                            <a class="dark_link" href="#"
                                                wire:click.prevent="sortBy('job_writer')">
                                                {{ ucwords(__('cp.job')) }}
                                                @if ($sortField === 'job_writer')
                                                    @if ($sortDirection === 'asc')
                                                        <i class="la la-arrow-up"></i>
                                                    @else
                                                        <i class="la la-arrow-down"></i>
                                                    @endif
                                                @endif
                                            </a>
                                        </th>
                                        <th>{{ ucwords(__('cp.status')) }}</th>
                                        <th class="wd-10p">{{ ucwords(__('cp.created')) }}</th>
                                        <th class="wd-10p">{{ ucwords(__('cp.edit')) }}</th>
                                        <th class="wd-15p">{{ ucwords(__('cp.action')) }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($writers as $writer)
                                        <tr class="odd gradeX">
                                            <td class="v-align-middle">{{ $writer->id }}</td>
                                            <td>
                                                <img src="{{ @$writer->image_writer }}" width="50px" height="50px">
                                            </td>
                                            <td class="v-align-middle">{{ $writer->name_writer }}</td>
                                            <td class="v-align-middle">{{ $writer->job_writer }}</td>
                                            <td class="v-align-middle">
                                                <span
                                                    class="badge badge-pill badge-{{ $writer->status == 'active' ? 'info' : 'danger' }}">
                                                    {{ __('cp.' . $writer->status) }}
                                                </span>
                                            </td>
                                            <td class="v-align-middle">{{ $writer->created_at }}</td>
                                            <td class="v-align-middle">{{ $writer->updated_at }}</td>
                                            <td class="v-align-middle">
                                                <button class="btn btn-sm btn-clean btn-icon edit_writer"
                                                    wire:click.prevent="editWriter({{ $writer->id }})"
                                                    data-toggle="modal" data-target="#modalWritersEdit">
                                                    <i class="la la-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Pagination -->
                            {{ $writers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('livewire.model.add')
    @include('livewire.model.update')
</div>
