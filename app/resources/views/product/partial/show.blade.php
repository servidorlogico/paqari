<div class="row">
	 <div class="panel panel-primary">
         <div class="panel-heading">
            <h3 class="panel-title">Detalles del producto</h3>
        </div>
         <div class="panel-body">
		{!! Form::Open(['class'=>'form-horizontal']) !!} 
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                        <div class="form-group">
                                <label class="col-lg-2 control-label" for="slug">Código</label>
                                <div class="col-lg-10">
                                   {!! Form::text('slug',$product->slug,['class'=>'form-control','read onnly']) !!}
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label" for="name">Nombre</label>
                                 <div class="col-lg-10">
                                {!! Form::text('name',$product->name,['class'=>'form-control']) !!}
                                </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label" for="category_id">Categorìa</label>
                                <div class="col-lg-4">
                                 {!! Form::text('name',$product->category->name,['class'=>'form-control']) !!}
                                 </div>
                                 <label class="col-lg-2 control-label" for="description">Donado</label>
                                 <div class="col-lg-4">
                                 @if($product->unique)
                                 SI
                                 @else
                                 NO
                                 @endif
                                 </div>
                        </div>
                        <div  id="tail" style="display: visibility" class="form-group">
                                    <label class="col-lg-2 control-label" for="category_id">Tallas</label>
                                    <div  class="row col-lg-10">
                                         @foreach($product->sizes as $size)
                                               <div class="col-xs-2">
                                                      {!! Form::label($size->size,$size->size ,['control-label']) !!}
                                                      
                                                </div>
                                                    
                                        @endforeach
                                    </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label class="col-lg-2 control-label" for="description">Descripción</label>
                                    <div class="col-lg-10">
                                    {!! Form::textarea('description',$product->description,['class'=>'form-control','size'=>'30x1']) !!}
                                     </div>
                        </div>
                        <div class="form-group">
                                    <label class="col-lg-2 control-label" for="name">Precio</label>
                                    <div class="col-lg-4">
                                    {!! Form::text('price',$product->price,['class'=>'form-control','type'=>'number']) !!}
                                    </div>
									<label class="col-lg-2 control-label" for="name">Stock</label>
									<div class="col-lg-4">
                                    {!! Form::text('stock',$product->stock,['class'=>'form-control']) !!}
                                     </div>
                        </div>
                                             
                                            
                                            
                                        
            
            
        	</div>
        {!! Form::close() !!}
            
        </div>
     
        
    </div>
	
</div>
<div class="row">
	
	  <div class="col-xs-6 col-md-4">
	    <a href="#" class="thumbnail">
	      <img src="/images/{{$product->url_1}}">
	    </a>
	  </div>
	  <div class="col-xs-6 col-md-4">
	    <a href="#" class="thumbnail">
	      <img src="/images/{{$product->url_2}}">
	    </a>
	  </div>
	  <div class="col-xs-12 col-md-4">
	    <a href="#" class="thumbnail">
	      <img src="/images/{{$product->url_3}}">
	    </a>
	  </div>
</div>
