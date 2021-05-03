<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;

class Landing_MainController extends Controller
{
    public function index()
    {

        $galleries = gallery::all();
        $abouts = AboutUs::all();
        
        return view('landing_page_main.index', compact('abouts', 'galleries'));
    }
}
