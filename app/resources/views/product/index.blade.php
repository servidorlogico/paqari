@extends('layouts.admin.panel')

    @section('title','Productos')
    @section('page-header','Productos')
	@section('content')
		@include('product.partial.catalog')
		
	
					
		
	@endsection
	@section('script')
			function alert(id){
				swal({
					  title: "¿Estás seguro?",
					  text: "Estàs intentando eliminar un registro!",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonColor: "#DD6B55",
					  confirmButtonText: "Sì, continuar",
					  cancelButtonText: "No, cancelar!",
					  closeOnConfirm: false,
					  closeOnCancel: true
					},
					function(isConfirm){
					  if (isConfirm) {
					    window.location = "product/"+id+"/destroy";
					  } 
					});
					

			};
	@endsection