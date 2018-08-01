<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index() {
    	$albums = Album::get();
    	return view('gallery',compact('albums'));
    }

    public function gallery($id) {
    	$album = Album::find($id);
    	if(!$album)
    		abort('404');
    	$galleries = $album->gallery;
    	return view('gallery_ind',compact('album','galleries'));
    }
}
