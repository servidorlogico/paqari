<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Formulario de Registro</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">DNI</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('dni',$user->dni,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">Nombres</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('name',$user->name,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="lastname">Apellidos</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('lastname',$user->lastname,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="telephone">Telèfono</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('telephone',$user->telephone,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">Direcciòn</label>
                                                <div class="col-lg-10">
                                                    {!! Form::text('address',$user->address,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">Email</label>
                                                <div class="col-lg-10">
                                                    {!! Form::email('email',$user->email,['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">Contraseña</label>
                                                <div class="col-lg-10">
                                                    {!! Form::password('password',['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" for="dni">Confirmar Contraseña</label>
                                                <div class="col-lg-10">
                                                    {!! Form::password('confirm_password',['class'=>'form-control']) !!}
                                                </div>
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary ">Gurdar</button>
                                            
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>