<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\organization;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = organization::all();
        return view ('organization.index', compact('organizations'));
    }

    public function create(){
        return view('organization.create');
    }

    public function store(Request $request){


        $organization = new organization;

            $organization->org_position = $request->org_position;
            $organization->org_name = $request->org_name;
             $organization ->save();

       return redirect()->route('organization.index');   
   }
    public function edit($id)
    {
        $organization = organization::findOrfail($id);
        return view('organization.edit', compact('organization'));
    }

    public function update(Request $request, $id)
    {
        $organization = organization::findOrfail($id);
        $organization->update(
             $request->all()
        );
        return redirect()->route('organization.index');
    }

    public function destroy(organization $organization){
        $organization->delete();
        return redirect()->route('organization.index');
    }

}
