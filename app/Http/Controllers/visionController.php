<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vision;
class visionController extends Controller
{


     public function edit($aboutusID){
         $vision = vision::findOrfail($aboutusID);
         return view('about_us.editVision', compact('vision'));
     }

     public function create(){
        return view('about_us.createVision');
    }

    public function store(Request $request){
        $vision = new vision;
        $vision->vision = $request->vision;
            $vision->save();

       return redirect()->route('aboutUs.index');   
   }
    
    public function update(Request $request,$aboutusID){
     $vision = vision::findOrfail($aboutusID);
      $vision->update(
             $request->all()
        );
        // $aboutUs->mission = $request->mission;
        // $aboutUs->mission = $request->vision;

        // $aboutUs->save();
        
        return redirect()->route('aboutUs.index');
    }

    public function destroy(vision $vision){
        $vision->delete();
        return redirect()->route('aboutUs.index');
    }
}
