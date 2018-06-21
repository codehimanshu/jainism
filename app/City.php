<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	"name",
    	"country_id",
    	"user_id"
    ];

    public function user() {
    	return $this->hasOne('App\User');
    }

    public function country() {
    	return $this->belongsTo('App\Country');
    }

    public function temples() {
    	return $this->hasMany('App\Temple');
    }

    public function dharmashalas() {
    	return $this->hasMany('App\Dharmshala');
    }
}
