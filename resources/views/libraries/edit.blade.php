@extends('layouts.app')

@section('content')

<div class="container-fluid mt-20">
<div class="ml-auto bg-gray-200 shadow justify-content-center p-3 mt-5">
    {{-- <div class="pull-right ml-5">
        <a href="" title="Go Back" class="btn mr-4 btn-primary">
            <i class="fa fa-book"></i>DASHBOARD
        </a>
    </div> --}}
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
		<div class="max-w-md w-6/12 space-y-8">
			<div>
				<img class="mx-auto h-12 " src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
				<h2 class=" text-center text-3xl font-extrabold text-gray-900">
					Edit Grade
				</h2>
            </div>
        </div>
    
    

    <form action="{{ route('grades.update', $grade->id) }}"  style='width:400px' class='w-full max-w-sm' method='POST'>
    @csrf
    @method('PUT')
   
    <div class="flex items-center border-b border-teal-500 py-2">
      <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-3 px-2 leading-tight focus:outline-none" type="text" name="book_title"  placeholder="Book Title" aria-label="book_title" value="{{ $library->book_title }}">
    </div>

    <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="shelf_number" placeholder="Shelf No" aria-label="shelf_no" value="{{ $library->shelf_no }}" >
      </div>

      <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="book_borrowed" placeholder="Book Borrowed" aria-label="book_borrowed"  value="{{ $library->book_borrowed}}">
      </div>

      <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="date_borrowed" placeholder="Date Borrowed" aria-label="date_borrowed"  value="{{ $library->date_borrowed}}">
      </div>

      <div class="flex items-center border-b border-teal-500 py-2">
        <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="date_to_return" placeholder="Date To Return" aria-label="date_to_return"  value="{{ $library->date_to_return }}">
      </div>

          {{-- <div class="flex items-center border-b border-teal-500 py-2">
            {{-- <input class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" placeholder="Jane Doe" aria-label="Full name"> --}}
          {{-- </div>  --}}

          <button class="flex-shrink-0 bg-teal-500 mt-3 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
            Submit
           </button>
        </form>

    </div>
    
          
            
</div> 
</div>


{{-- <div class="" style="background-image: url('../Images/add.jpg'); background-size:cover; background-repeat:no-repeat; height:50px"> --}}
    {{-- <img src="../Images/add.jpg" alt="" width="100%"> --}}


@endsection


