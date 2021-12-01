@extends('layouts.app')

@section('content')
    <div class="row">
     <div class="col-lg-12 margin-tb">
         <div class="mt-20">
             <h2 class="text-center font-bold">{{$library->name}}</h2>
         </div>
     </div>
    </div>

     <div class="pull-right mr-4">
        <a href="{{ route('libraries.index')}}" title="Go Back" class="btn btn-primary mr-20 mt-5">
               <i class="fa fa-book"></i>DASHBOARD
           </a>
    </div>
    
     <div class="row mx-auto mt-20" style="width: 500px; height: 6em; padding:3px">
        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3 ">
            <div class="form-group mr-4 pl-3">
                <strong>Book title</strong>
                <div class="div ">{{$library->book_title}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-warning p-3">
            <div class="form-group pl-3">
                <strong>Shelf Number</strong>
                <div class="div">{{$library->shelf_number}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3">
            <div class="form-group pl-3">
                <strong>Book Borrowed</strong>
                <div class="div">{{$library->book_borrowed}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3">
            <div class="form-group pl-3">
                <strong>Date Borrowed</strong>
                <div class="div">{{$library->date_borrowed}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3">
            <div class="form-group pl-3">
                <strong>Date To Return</strong>
                <div class="div">{{$library->date_to_return}}</div>
            </div>
        </div>
 </div>
        
   
    
@endsection