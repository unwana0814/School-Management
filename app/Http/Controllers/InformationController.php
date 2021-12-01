<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
   
    public function index()
    {
        $information = Information::paginate(5);
        return view('information.index', ['information' => $information], compact('information'))->with(request()->input('page') );

    }

    
    public function create()
    {
       return view('information.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'for'=>'required'
        ]);

        Information::create($request->all());

        return redirect()->route('information.index')->with('success','Information created succesfully');

    }

   
    public function show(Information $information)
    {
        return view('information.show', compact('information'));
    }

   
    public function edit(Information $information)
    {
        return view('information.edit');
    }

    
    public function update(Request $request, Information $information)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'for'=>'required'
        ]);

        $information->update($request->all());

        return redirect()->route('information.index')->with('success','Information created succesfully');
    }

    
    public function destroy($id)
    {
        $id->delete();

        return redirect()->route('information.index')->with('success','Information created succesfully');

    }
}
