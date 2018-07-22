<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PathshalaCategory extends Model
{
    protected $fillable = [
    	"id", "category", "image", "status"
    ];

    public function videos() {
    	return $this->hasMany('App\PathshalaVideo', 'category_id');
    }
}
