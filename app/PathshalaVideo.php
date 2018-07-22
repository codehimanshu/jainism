<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PathshalaVideo extends Model
{
    protected $fillable = [
    	"id", "category_id", "title", "description", "url"
    ];
}
