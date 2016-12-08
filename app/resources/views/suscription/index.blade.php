@extends('layouts.admin.panel')

    @section('title','Suscriptores')
    @section('page-header','Suscriptores')
	@section('content')
		@include('suscription.partial.index')
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
					    window.location = "suscrip/"+ id +"/destroy";
					  } 
					});
					

			};
		@endsection
	@endsection