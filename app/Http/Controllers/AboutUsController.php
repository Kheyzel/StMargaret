<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUs;

class AboutUsController extends Controller
{
    public function index()
    {
        $abouts = AboutUs::all();
        return view('about_us.index', compact('abouts'));
    }




     public function edit($aboutusID)
     {
         $aboutUs = AboutUs::findOrfail($aboutusID);
         return view('about_us.edit', compact('aboutUs'));
     }


    

    
    public function update(Request $request,$aboutusID)
    {
     $aboutus = AboutUs::findOrfail($aboutusID);
      $aboutus->update(
             $request->all()
        );
        // $aboutUs->mission = $request->mission;
        // $aboutUs->mission = $request->vision;

        // $aboutUs->save();
        
        return redirect()->route('about_us.index');
    }
}
