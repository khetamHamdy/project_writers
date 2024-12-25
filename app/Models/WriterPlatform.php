<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WriterPlatform extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];
    protected $fillable = ['name_platform', 'url_platform', 'image_platform', 'writer_id'];

    public function getImageAttribute($value)
    {
        if ($value) {
            return url('uploads/writer_platforms/' . $value);
        } else {
            return url('uploads/images/default.png');
        }
    }

}
