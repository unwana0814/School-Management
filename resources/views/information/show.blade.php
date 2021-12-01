@extends('layouts.app')

@section('content')
    <div class="row">
     <div class="col-lg-12 margin-tb">
         <div class="mt-20">
             <h2 class="text-center font-bold">{{$information->title}}</h2>
         </div>
     </div>
    </div>

     <div class="pull-right mr-4">
        <a href="{{ route('information.index')}}" title="Go Back" class="btn btn-primary mr-20 mt-5">
               <i class="fa fa-book"></i>DASHBOARD
           </a>
    </div>
    
     <div class="row mx-auto mt-20" style="width: 500px; height: 6em; padding:3px">
        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3 ">
            <div class="form-group mr-4 pl-3">
                <strong>Title</strong>
                <div class="div ">{{$information->title}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-warning p-3">
            <div class="form-group pl-3">
                <strong>Description</strong>
                <div class="div">{{$information->description}}</div>
            </div>
        </div>

        <div class = "col-xsx-12 col-sm col-md-4 bg-info p-3">
            <div class="form-group pl-3">
                <strong>For</strong>
                <div class="div">{{$information->for}}</div>
            </div>
        </div>
 </div>
        
@endsection