@extends('layouts.admin.panel')

    @section('title','Administradores')
    @section('page-header','Administradores')
	@section('content')
		@include('admin.partial.catalog')
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
					    window.location = "admin/"+id+"/destroy";
					  } 
					});
					

			};
		@endsection
	@endsection