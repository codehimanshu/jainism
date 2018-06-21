<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempleImage extends Model
{
    protected $fillable = [
    	"temple_id",
    	"image"
    ];

    public function temple() {
    	return $this->belongsTo("App\Temple");
    }
}
