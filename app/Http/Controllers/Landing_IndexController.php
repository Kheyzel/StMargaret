<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mission;
use App\vision;
use App\socialServices;
use App\calendarOfAct;
use App\gallery;
use App\contact;
use App\organization;
class Landing_IndexController extends Controller
{
    public function index()
    {
        $missions = mission::all();
        $visions = vision::all();
        $socialServices = socialServices::all();
        $calendarOfActs = calendarOfAct::orderBy('act_date', 'asc')->get();
        $galleries = gallery::all();
        $month = calendarOfAct::all()->first();
        $contacts = contact::all();
        $organizations = organization::all();
        return view('landingPage.index', compact('missions', 'visions', 'socialServices', 'calendarOfActs', 'galleries', 'month', 'contacts', 'organizations'));
        
    }
}
