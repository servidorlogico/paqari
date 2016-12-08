
<div class="row">
    <div class="panel panel-primary">
         <div class="panel-heading">
            <h3 class="panel-title">Formulario de Registro</h3>
        </div>
        {!! Form::Open(['class'=>'form-horizontal','method'=>'POST','route'=>'product.store','files'=>true]) !!} 
         <div class="panel-body">
            <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
            
                       
                        <div class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="slug">Código</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('slug',null,['class'=>'form-control']) !!}
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
                                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
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
                                                      {!! Form::radio('section', 'autism', true);  !!}
                                                </div>
                                                <div class="col-xs-3">
                                                      {!! Form::label('section','Pieza única' ,['control-label']) !!}
                                                      {!! Form::radio('section', 'unique', false);  !!}
                                                </div>
                                                <div class="col-xs-3">
                                                      {!! Form::label('section','Extra' ,['control-label']) !!}
                                                      {!! Form::radio('section', 'extra', false);  !!}
                                                </div>
                                                    
                                        
                                    </div>
                        </div>
                        <div class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="category_id">Categorìa</label>
                                                <div class="col-lg-4">
                                                    {!! Form::select('category_id',$categories,null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('category_id'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('category_id') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                 
                                                
                        </div>
                        <div  id="tail" style="display: visibility" class="form-group {{ $errors->has('category_id') ? ' has-error' : '' }}">
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
                        <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="description">Descripción</label>
                                                <div class="col-lg-10">
                                                    {!! Form::textarea('description',null,['class'=>'form-control','size'=>'30x1']) !!}
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
                                                        {!! Form::text('price',null,['class'=>'form-control','type'=>'number']) !!}
                                                        @if ($errors->has('price'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('price') }}</strong>
                                                            </span>
                                                        @endif

                                                    </div>
                                                     <label class="col-lg-2 control-label" for="name">Stock</label>
                                                    <div class="col-lg-4">
                                                        {!! Form::text('stock',null,['class'=>'form-control']) !!}
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
                                                
                            <input  id="uploadFile1"  placeholder="Choose File" disabled="disabled"/>
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
                                                
                             <input  id="uploadFile2" placeholder="Choose File" disabled="disabled"/>
                             @if ($errors->has('url_2'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('url_2') }}</strong>
                                    </span>
                            @endif
                             </div>
                             <div class="col-md-4">
                                 <div class="fileUpload btn btn-primary">
                                    <span class=" glyphicon glyphicon-folder-open"></span>
                                <input name="url_3" id="uploadBtn3" type="file" class="upload" />
                            </div>                                         
                                                
                            <input   id="uploadFile3" placeholder="Choose File" disabled="disabled"/>
                             @if ($errors->has('url_3'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('url_3') }}</strong>
                                    </span>
                            @endif

                            </div>

                                                
                

                                            
                                    
                                            
                
                <button type="submit" class="btn btn-primary ">Guardar</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>

