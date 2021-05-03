<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = gallery::all();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $gallery = new gallery();
        $gallery -> gallery_date = $request->input('gallery_date');
        $gallery -> gallery_description = $request->input('gallery_description');
        
        if ($request->hasFile('gallery_image'))
            {
                $file = $request->file ('gallery_image');
                $filename=$file->getClientOriginalName();
                $request->gallery_image->storeAs('gallery_images',$filename,'public');
                $gallery->gallery_image=$filename;
            }
        $gallery->save();
        return redirect()->route('gallery.index');
    }

    public function edit($id) {
            $gallery = gallery::findOrfail($id);
               return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id){
        $gallery = gallery::findOrFail($id);

        $gallery -> gallery_date = $request->input('gallery_date');
        $gallery -> gallery_description = $request->input('gallery_description');
    
        if ($request->hasFile('gallery_image'))
            {
                $file = $request -> file ('gallery_image');
                $filename=$file->getClientOriginalName();
                $request->gallery_image->storeAs('gallery_images',$filename,'public');
                $gallery->gallery_image=$filename;
            }
    
        $gallery->save();
        return redirect()->route('gallery.index');
    }

    public function destroy(gallery $gallery){
        $gallery->delete();
        return redirect()->route('gallery.index');
    }
}
