<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
    	$blogs = Blog::orderBy('created_at','desc')->paginate(2);
    	return view('blog',compact('blogs'));
    }

    public function show($id) {
    	$blog = Blog::find($id);
    	if(!$blog)
    		abort('404');
    	return view('blogSingle', compact('blog'));
    }
}
