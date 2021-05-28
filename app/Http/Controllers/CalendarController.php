<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\calendarOfAct;

class CalendarController extends Controller
{
    public function index()
    {
        $calendarOfActs = calendarOfAct::all();   
        return view('calendar.index', compact('calendarOfActs'));
    }

    public function create()
    {
        return view('calendar.create');
    }

    public function store(Request $request)
    {
        $calendar = new CalendarOfAct();
        $calendar->act_date = $request->input('act_date');
        $calendar->act_description = $request->input('act_description');
       
        if ($request->hasFile('act_image'))
            {
                $file = $request->file('act_image');
                $filename =$file->getClientOriginalName();
                $request->aaccurate datact_image->storeAs('gallery_image',$filename,'public');
                $calendar->act_image=$filename;
            }
            $calendar->save();
        return redirect()->route('calendar.index');
    }

    public function edit($id) {
        $calendarOfAct = calendarOfAct::findOrfail($id);
               return view('calendar.edit', compact('calendarOfAct'));
    }

    public function update(Request $request, calendarOfAct $calendarOfAct){
        $calendarOfAct = calendarOfAct::findOrFail($calendarOfAct->id);
        $calendarOfAct->update($request->all());
        return redirect()->route('calendar.index', $calendarOfAct->id);
    }

    public function destroy(calendarOfAct $calendarOfAct){
        $calendarOfAct->delete();
        return redirect()->route('calendar.index');
    }
}
