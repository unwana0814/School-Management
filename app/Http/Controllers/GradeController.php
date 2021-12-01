<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
   
    public function index()
    {
        $grades = Grade::paginate(5);
        return view('grades.index', ['grades' => $grades], compact('grades'))->with(request()->input('page') );
    }

    
    public function create()
    {
        return view('grades.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'score'=>'required'
        ]);

        Grade::create($request->all());
    
        return redirect()->route('grades.index')->with('success','Grade created succesfully');
    }

   
    public function show(Grade $grade)
    {
        return view('grades.index', compact('grades'));
    }

    
    public function edit(Grade $grade)
    {
       return view('grades.edit');
    }

   
    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'name'=>'required',
            'type'=>'required',
            'score'=>'required'
        ]);

        $grade->update($request->all());
    
        return redirect()->route('grades.index')->with('success','Grade created succesfully');
    }

    
    public function destroy($id)
    {
        $id->delete();

        return redirect()->route('grades.index')->with('success','Grade created succesfully');

    }
}
