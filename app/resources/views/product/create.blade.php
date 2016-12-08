@extends('layouts.admin.panel')

    @section('title','Nuevo Producto')
    
	@section('style-link')
		
		
	@endsection

    @section('content')
    	@include('product.partial.create')
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
		  	$("input[name='XS']").prop("checked",false);
			$("input[name='S']").prop("checked",false);
			$("input[name='M']").prop("checked",false);
			$("input[name='L']").prop("checked",false);
			$("input[name='XL']").prop("checked",false);
			

			}
		  	
			

		});


	@endsection

	@section('script_link')
		

	@endsection