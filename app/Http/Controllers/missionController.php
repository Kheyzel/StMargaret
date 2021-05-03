<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mission;
class missionController extends Controller
{


     public function edit($aboutusID){
         $mission = mission::findOrfail($aboutusID);
         return view('about_us.edit', compact('mission'));
     }

     public function create(){
         return view('about_us.createMission');
     }

     public function store(Request $request){
        $mission = new mission;
        $mission->mission = $request->mission;
            $mission->save();

       return redirect()->route('aboutUs.index');   
   }
    
    public function update(Request $request,$aboutusID){
     $mission= mission::findOrfail($aboutusID);
      $mission->update(
             $request->all()
        );
        return redirect()->route('aboutUs.index');
    }

    public function destroy(mission $mission){
        $mission->delete();
        return redirect()->route('aboutUs.index');
    }
}