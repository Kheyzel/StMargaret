<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\socialServices;
class socialServicesController extends Controller
{
    public function index(){
        $socialServices = socialServices::all();
        return view('social_services.index', compact('socialServices'));
    }


    public function create(){
        return view('social_services.create');
    }

    public function store(Request $request){


         $socialServices = new socialServices;

             $socialServices->title = $request->title;
             $socialServices->description = $request->description;
              $socialServices ->save();

        return redirect()->route('socialServices.index');   
    }

    public function edit($socialServicesID) {
         $socialServices = socialServices::findOrfail($socialServicesID);
                return view('social_services.edit', compact('socialServices'));
     }


    

    
    public function update(Request $request,$socialServicesID)
    {
        $socialServices = socialServices::findOrfail($socialServicesID);
        $socialServices->update(
             $request->all()
        );
        // $aboutUs->mission = $request->mission;
        // $aboutUs->mission = $request->vision;

        // $aboutUs->save();
        
        return redirect()->route('socialServices.index');
    }

    public function destroy(socialServices $socialService){
        $socialService->delete();
        return redirect()->route('socialServices.index');
    }
}