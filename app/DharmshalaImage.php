<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DharmshalaImage extends Model
{
    protected $fillable = [
    	"dharmshala_id",
    	"image"
    ];

    public function dharmshala() {
    	return $this->belongsTo("App\Dharmshala");
    }
}
