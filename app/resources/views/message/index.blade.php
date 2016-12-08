@extends('layouts.admin.panel')

    @section('title','Mensajes')
    @section('page-header','Mensajes')
	@section('content')
		@include('message.partial.index')
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
					    window.location = "msg/"+ id +"/destroy";
					  } 
					});
					

			};
		@endsection
	@endsection