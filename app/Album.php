<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
    	"id", "title", "image"
    ];

    public function gallery() {
    	return $this->hasMany('App\Gallery');
    }
}
