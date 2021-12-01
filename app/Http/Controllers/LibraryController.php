<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    
    public function index()
    {
        $libraries = Library::paginate(5);

        return view('libraries.index', ['libraries' => $libraries], compact('libraries'))->with(request()->input('page') );
    }

    
    public function create()
    {
        return view('libraries.create');
    }

   
    public function store(Request $request)
    {
       $request->validate([
           'book_title'=>'required',
           'shelf_number'=>'required',
           'book_borrowed' => 'required',
           'date_borrowed' => 'required',
           'date_to_return'=>'required'
       ]);

       Library::create($request->all());

       return view('libraries.index', compact('libraries'))->with('success','Library created succesfully');
    }

   
    public function show(Library $library)
    {
        return view('libraries.index', compact('libraries'));
    }

   
    public function edit(Library $library)
    {
        return view('libraries.index');
    }

   
    public function update(Request $request, Library $library)
    {
        $request->validate([
            'book_title'=>'required',
            'shelf_number'=>'required',
            'book_borrowed' => 'required',
            'date_borrowed' => 'required',
            'date_to_return'=>'required'
        ]);
 
        $library->update($request->all());
 
        return view('libraries.index', compact('libraries'))->with('success','Library updated succesfully');
    }

   
    public function destroy($id)
    {
        $id->delete();

        return view('libraries.index', compact('libraries'))->with('success','Library deleted succesfully');

    }
}
