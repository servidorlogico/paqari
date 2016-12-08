<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Formulario de Registro</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    {!! Form::Open(['class'=>'form-horizontal','method'=>'POST','route'=>'admin.store']) !!} 
                                        <fieldset>

                                            <div class="form-group {{ $errors->has('dni') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="dni">DNI</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('dni',null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('dni'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('dni') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="dni">Nombres</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="lastname">Apellidos</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('lastname',null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('lastname'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('lastname') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="telephone">Telèfono</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('telephone',null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('telephone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('telephone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="address">Direcciòn</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                                                     @if ($errors->has('address'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                             <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="dni">Email</label>
                                                <div class="col-lg-10">
                                                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                             <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="password">Contraseña</label>
                                                <div class="col-lg-10">
                                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <label class="col-lg-2 control-label" for="password_confirmation">Confirmar Contraseña</label>
                                                <div class="col-lg-10">
                                                    {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
                                                      @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary ">Guardar</button>
                                            
                                        </fieldset>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
</div>