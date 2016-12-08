@extends('layouts.admin.panel')

    @section('title',$user->name.' '.$user->lastname)
    @section('page-header','Datos del administrador')
	@section('content')
		@include('admin.partial.show')
	@endsection