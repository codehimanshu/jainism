<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
    	"id", "album_id", "image"
    ];
    protected $table = "gallery";
}
