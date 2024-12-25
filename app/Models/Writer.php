<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    use HasFactory;


    public function getImageWriterAttribute($value)
    {
        if ($value) {
            return url('uploads/writers/' . $value);
        } else {
            return url('uploads/images/default.png');
        }
    }

    // public function scopeFilter($query)
    // {
    //     if (request()->has('name')) {
    //         if (request()->get('name') != null)
    //             $query->where(
    //                 'name',
    //                 '%' . request()->get('name') . '%'
    //             );
    //     }

    //     if (request()->has('job')) {
    //         if (request()->get('job') != null)
    //             $query->where(
    //                 'job',
    //                 '%' . request()->get('job') . '%'
    //             );
    //     }
    // }

    public function platforms()
    {
        return $this->hasMany(WriterPlatform::class);
    }
}
