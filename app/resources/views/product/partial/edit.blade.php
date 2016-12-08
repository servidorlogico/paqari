<div class="row">
    <div class="panel panel-primary">
         <div class="panel-heading">
            <h3 class="panel-title">Formulario de producto</h3>
        </div>
          {!! Form::Open(['class'=>'form-horizontal','method'=>'PUT','route'=>['product.update',$product],'files'=>true]) !!} 
          <div class="panel-body">
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
            
                       
                        <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="slug">Código</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('slug',$product->slug,['class'=>'form-control']) !!}
                                                    @if ($errors->has('slug'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('slug') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                        </div>
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="name">Nombre</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('name',$product->name,['class'=>'form-control']) !!}
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                        </div>
                          <div    class="form-group {{ $errors->has('section') ? ' has-error' : '' }}">
                                    <label class="col-lg-2 control-label" for="category_id">Secciones</label>
                                    <div  class="row col-lg-10">
                                         
                                               <div class="col-xs-3">
                                                      {!! Form::label('section','100% Autismo' ,['control-label']) !!}
                                                      @if($product->section=='autism')
                                                      {!! Form::radio('section', 'autism', true);  !!}
                                                      @else
                                                      {!! Form::radio('section', 'autism', false);  !!}
                                                      @endif
                                                </div>
                                                <div class="col-xs-3">
                                                      {!! Form::label('section','Pieza única' ,['control-label']) !!}
                                                      @if($product->section=='unique')
                                                      {!! Form::radio('section', 'unique', true);  !!}
                                                      @else
                                                      {!! Form::radio('section', 'unique', false);  !!}
                                                      @endif
                                                </div>
                                                <div class="col-xs-3">
                                                      {!! Form::label('section','Extra' ,['control-label']) !!}
                                                      @if($product->section=='extra')
                                                      {!! Form::radio('section', 'extra', true);  !!}
                                                      @else
                                                      {!! Form::radio('section', 'extra', false);  !!}
                                                      @endif
                                                </div>
                                                    
                                        
                                    </div>
                        </div>
                      
                        <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="category_id">Categorìa</label>
                                                <div class="col-lg-4">
                                                    
                                                        <select class="form-control" name="category_id">
                                                        @foreach($categories as $category)
                                                            @if($category['select'])
                                                                <option value="{{ $category->id }}" selected="selected">{{ $category->name }}
                                                                </option>
                                                            @else
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                        </select>
                                                    
                                                    @if ($errors->has('category_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('category_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                
                        </div>                  
                        
                        
                        @if($categories[0]->select)
                            <div  id="tail" style="display: visivility" class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label class="col-lg-2 control-label" for="category_id">Tallas</label>
                                        <div  class="row col-lg-10">
                                             @foreach($sizes as $size)
                                                   <div class="col-xs-2">
                                                          {!! Form::label($size->size,$size->size ,['control-label']) !!}
                                                          @if($size['check']=='true')
                                                              {!! Form::checkbox($size->size, $size->id,true) !!}
                                                          @else
                                                          
                                                              {!! Form::checkbox($size->size, $size->id,false) !!}
                                                          @endif
                                                    </div>
                                                        
                                            @endforeach
                                        </div>
                            </div>
                            
                        @else
                            <div  id="tail" style="display: none" class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                        <label class="col-lg-2 control-label" for="category_id">Tallas</label>
                                        <div  class="row col-lg-10">
                                             @foreach($sizes as $size)
                                                   <div class="col-xs-2">
                                                          {!! Form::label($size->size,$size->size ,['control-label']) !!}
                                                          {!! Form::checkbox($size->size, $size->id) !!}
                                                    </div>
                                                        
                                            @endforeach
                                        </div>
                            </div>
                        @endif
                       
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="description">Descripción</label>
                                                <div class="col-lg-10">
                                                    {!! Form::textarea('description',$product->description,['class'=>'form-control','size'=>'30x1']) !!}
                                                    @if ($errors->has('description'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('description') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                        </div>
                        <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                                    <label class="col-lg-2 control-label" for="name">Precio</label>
                                                    <div class="col-lg-4">
                                                        {!! Form::text('price',$product->price,['class'=>'form-control','type'=>'number']) !!}
                                                        @if ($errors->has('price'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('price') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                     <label class="col-lg-2 control-label" for="name">Stock</label>
                                                    <div class="col-lg-4">
                                                        {!! Form::text('stock',$product->stock,['class'=>'form-control']) !!}
                                                        @if ($errors->has('stock'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('stock') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                        </div>
                                             
                         
            
        </div>
            
        </div>
        <div class="panel-footer">
                        
                            <div class="col-md-4">
                                <div class="fileUpload btn btn-primary">
                                    <span class=" glyphicon glyphicon-folder-open"></span>
                                <input  name="url_1" id="uploadBtn1" type="file" class="upload" />
                                </div>                                         
                                                
                            <input  id="uploadFile1" value="{{ $product->url_1 }}"  placeholder="Choose File" disabled="disabled"/>
                             @if ($errors->has('url_1'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('url_1') }}</strong>
                                    </span>
                            @endif
                            </div>
                        
                            <div class="col-md-4">
                                <div class="fileUpload btn btn-primary">
                                <span class=" glyphicon glyphicon-folder-open"></span>
                                <input  name="url_2" id="uploadBtn2" type="file" class="upload" />
                             </div>                                         
                                                 
                             <input  id="uploadFile2"    value="{{ $product->url_2 }}" placeholder="Choose File" disabled="disabled"/>
                             @if ($errors->has('url_2'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('url_2') }}</strong>
                                    </span>
                            @endif
                             </div>
                             <div class="col-md-4">
                                 <div class="fileUpload btn btn-primary">
                                    <span class=" glyphicon glyphicon-folder-open"></span>
                                <input  name="url_3" id="uploadBtn3" type="file" class="upload" />
                            </div>                                         
                                                
                            <input   id="uploadFile3"  value="{{ $product->url_3 }}" placeholder="Choose File" disabled="disabled"/>
                             @if ($errors->has('url_3'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('url_3') }}</strong>
                                    </span>
                            @endif

                            </div>

                                                
                

                                            
                                    
                                            
                
                <button type="submit" class="btn btn-primary ">Guardar</button>
        </div>>
        {!! Form::close() !!}





    </div>
</div>

