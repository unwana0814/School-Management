<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    
    public function index()
    {
        $exams = Exam::paginate(5);
        return view('exams.index', ['exams' => $exams], compact('exams'))->with(request()->input('page') );
    }

    
    public function create()
    {
        return view('exams.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required'
    
        ]);
       
        Exam::create($request->all());
    
        return redirect()->route('exams.index')->with('success','Exams created succesfully');
    }

    
    public function show(Exam $exam)
    {
        return view('exams.show', compact('exam'));
    }

    
    public function edit(Exam $exam)
    {
        return view('exams.edit', compact('exam'));
    }

    
    public function update(Request $request, Exam $exam)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required'
    
        ]);
       
       $exam->update($request->all());
    
        return redirect()->route('exams.index')->with('success','Exam created succesfully');
    }

  
    public function destroy($id)
    {
        Exam::find($id)->delete();

    return redirect()->route('exams.index')->with('success', 'Exam Deleted Successfully');
    }
}

