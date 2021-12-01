<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {

        $books = Book::paginate(5);
        return view('books.index', ['books' => $books], compact('books'))->with(request()->input('page') );
    }


    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'year' => 'required'
        ]);
       
        Book::create($request->all());
    
        return redirect()->route('books.index')->with('success','Book created succesfully');
    }

  
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

   
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

   
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'year' => 'required'
        ]);
        $book->update($request->all());
    
        //return and redirect
    
        return redirect()->route('books.index')->with('success','Book Updated Successfully');
    }

    
    public function destroy($id)
    {
        Book::find($id)->delete();

        return redirect()->route('books.index')->with('success', 'Book Deleted Successfully');
    }
}

