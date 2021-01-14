<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landing_IndexController extends Controller
{
    public function index()
    {
        return view('landing_page.index');
    }
}
