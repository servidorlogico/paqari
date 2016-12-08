@extends('layouts.admin.panel')

    @section('title','Producto '.$product->name)
    

    @section('page-header','Editar producto')
	@section('content')
		@include('product.partial.edit')
		
	
					
		
	@endsection
		@section('script')

		document.getElementById("uploadBtn1").onchange = function () {
		    document.getElementById("uploadFile1").value = this.value;
		};
		document.getElementById("uploadBtn2").onchange = function () {
		    document.getElementById("uploadFile2").value = this.value;
		};
		document.getElementById("uploadBtn3").onchange = function () {
		    document.getElementById("uploadFile3").value = this.value;
		};
		
		
		
		$( "select[name='category_id']" ).change(function() {
		  	if($(this).val()==1)
		  	{
		  		$('#tail').css('display','block');
		  	}
		  	else{

		  	$('#tail').css('display','none');
		  		
			

			}
		  	
			

		});


	@endsection
 
	