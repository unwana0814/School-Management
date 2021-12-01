<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\Book;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::paginate(5);
        return view('categories.index', ['categories' => $categories], compact('categories'))->with(request()->input('page') );
    }

    public function create()
    {
        return view('categories.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

        ]);
       
        Category::create($request->all());
    
        return redirect()->route('categories.index')->with('success','Category created succesfully');
    }


    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

  
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category->update($request->all());
    
        //return and redirect
    
        return redirect()->route('categories.index')->with('success','Category Updated Successfully');
    }

    
    public function destroy($id)
    {
        $id->delete();

      

        return redirect()->route('categories.index')->with('success', 'Category Deleted Successfully');
    }
}
