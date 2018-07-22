<?php

namespace App\Http\Controllers;

use App\PathshalaCategory;
use App\PathshalaVideo;
use Illuminate\Http\Request;

class PathshalaController extends Controller
{
    public function index() {
    	$categories = PathshalaCategory::where('status',1)->get();
    	return view('pathshala',compact('categories'));
    }

    public function category($id) {
    	$category = PathshalaCategory::find($id);
    	if(!$category)
    		abort('404');
    	$videos = $category->videos;
    	return view('pathshala_category',compact('category','videos'));
    }
}
