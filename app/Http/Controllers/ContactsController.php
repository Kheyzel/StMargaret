<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = contact::all();
        return view('contact.index', compact('contacts'));
    }

    public function edit($contact_id)
     {
         $contact = contact::findOrfail($contact_id);
         return view('contact.edit', compact('contact'));
     }

     public function update(Request $request,$contact_id)
    {
     $contact= contact::findOrfail($contact_id);
      $contact->update(
             $request->all()
      );
        
        return redirect()->route('contact.index');
    }

}
