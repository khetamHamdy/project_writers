<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageTranslation extends Model
{
    protected $table="languge_translations";

    protected $fillable = ['name'];
}
