<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mission;
use App\vision;
 
class AboutUsController extends Controller
{
    public function index()
    {
        $missions = mission::all();
        $visions = vision::all();
        return view('about_us.index', compact('missions', 'visions'));
    }
}
