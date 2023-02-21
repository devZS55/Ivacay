<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    protected $table= "packages";
    use HasFactory;

    public function getCountry()
    {
        return $this->belongsTo('App\Models\CountryModel','country_id');
    }
    public function getUser()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function getImage()
    {
        return $this->hasMany('App\Models\ImageModel','image_id');
    }
    public function getImages()
    {
        return $this->hasMany('App\Models\ImageModel','pakage_id');
    }
}
