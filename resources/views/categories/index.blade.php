@extends('layouts.app')

@section('content')
<style>
    body {
        color: #566787;
        background: #f5f5f5;
		font-family: 'Roboto', sans-serif;
	}
    .table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px;        
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 8px 0 0;
        font-size: 22px;
    }
    .search-box {
        position: relative;        
        float: right;
    }
    .search-box input {
        height: 34px;
        border-radius: 20px;
        padding-left: 35px;
        border-color: #ddd;
        box-shadow: none;
    }
	.search-box input:focus {
		border-color: #3FBAE4;
	}
    .search-box i {
        color: #a0a5b1;
        position: absolute;
        font-size: 19px;
        top: 8px;
        left: 10px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table td:last-child {
        width: 130px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 95%;
        width: 30px;
        height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 30px !important;
        text-align: center;
        padding: 0;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 6px;
        font-size: 95%;
    }    
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8 mb-2"><h2>Categories <b>Available</b></h2></div>
                        <div class="col-sm-4">
                            {{-- <div class="search-box">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div> --}}
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Name <i class="fa fa-sort"></i></th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            @foreach ($categories as $category)
                               <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <form action="">
                                    <a href="{{ route('categories.show', $category->id) }}" class="view" title="View" data-toggle="tooltip"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>

                                <a href="{{ route('categories.edit', $category->id) }}" class="edit" title="Edit" data-toggle="tooltip"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                   @csrf
                                    @method('DELETE')

                                     <button type="submit" title="delete" onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE')" title="show" style="border:none; background-color:transparent;"   class="delete">
                                     <i class="fa fa-trash-o fa-lg text-danger"></i>
                                     </button>
    
                                {{-- <a href="" class="delete" title="delete" data-toggle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a> --}}
                            </td>
                                </form>
                                

                             
                        </tr> 
                            @endforeach
                            
                            <div class="pull-right">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary mb-8"> Add New Book
                                    <i class="fa fa-plus-circle"></i>
                                </a>
                            </div>
                </table>

            </div>

           
        </div> 
        
        
    </div>  
    
   

@endsection
