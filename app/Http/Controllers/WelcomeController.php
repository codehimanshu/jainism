<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();
        return view('welcome',compact('countries'));
    }

    public function aboutDarshanmala()
    {
        return view('aboutDarshanmala');
    }

    public function aboutJainism()
    {
        return view('aboutJainism');
    }

    public function gallery()
    {
        return view('gallery');
    }
}
