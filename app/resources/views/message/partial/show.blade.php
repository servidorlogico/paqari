<div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default bootstrap-admin-no-table-panel">
                                <div class="panel-heading">
                                    <div class="text-muted bootstrap-admin-box-title">Detalle del mensaje</div>
                                </div>
                                <div class="bootstrap-admin-no-table-panel-content bootstrap-admin-panel-content collapse in">
                                    <div class="form-group">
                                        {!! Form::label('date','Fecha de envío:') !!}
                                        {!! Form::text('date',$message->created_at,['class'=>'form-control','readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('to','De:') !!}
                                        {!! Form::text('to',$message->name.' '.$message->lastname,['class'=>'form-control','readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email','Email:') !!}
                                        {!! Form::text('email',$message->email,['class'=>'form-control','readonly']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('content','Contenido:') !!}
                                        {!! Form::textarea('content',$message->content,['class'=>'form-control','readonly']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>