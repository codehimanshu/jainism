<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StayPlan extends Model
{
    protected $fillable = [
    	"dharmshala_id",
    	"plan_name",
    	"min_capacity",
    	"max_capacity",
    	"price_per_seat",
    	"fix_price"
    ];
}
