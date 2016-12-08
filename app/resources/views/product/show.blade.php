@extends('layouts.admin.panel')

    @section('title','Producto '.$product->name)
    

    @section('page-header','Productos')
	@section('content')
		@include('product.partial.show')
		
	
					
		
	@endsection
	