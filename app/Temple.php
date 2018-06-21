<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temple extends Model
{
    protected $fillable = [
    	"name",
    	"city_id",
    	"user_id",
    	"main_image",
    	"about",
    	"latitude",
    	"longitude",
    	"location"
    ];

    public function city() {
    	return $this->belongsTo('App\City');
    }

    public function images() {
    	return $this->hasMany('App\TempleImage');
    }
}
