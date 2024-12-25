<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use Translatable;
    public $translatedAttributes = ['title','description','key_words','footer_description','address'];
    public $guarded = [];
    protected $hidden = ['translations'];

    public function getLogoAttribute($logo)
    {
        return !is_null($logo)?url('uploads/settings/'.$logo):null;
    }

    public function getImageAttribute($image)
    {
        //return url('uploads/settings/'.$image);
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }

    public function getDivisionBannerImageAttribute($image)
    {
        //return url('uploads/settings/'.$image);
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }

    public function getDivisionBannerMobileImageAttribute($image)
    {
        //return url('uploads/settings/'.$image);
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }

    public function getCertBannerImageAttribute($image)
    {
        //return url('uploads/settings/'.$image);
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }

    public function getCertBannerMobileImageAttribute($image)
    {
        //return url('uploads/settings/'.$image);
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }



}
