@extends('layouts.admin.panel')

    @section('title',$message->name.' '.$message->lastname)
    @section('page-header','Mensaje')
	@section('content')
		@include('message.partial.show')
	@endsection