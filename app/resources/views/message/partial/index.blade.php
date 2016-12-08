                                   
                                     <div class="panel panel-info">
                                        <div class="panel-heading">CATÀLOGO</div>

                                        <div class="panel-body">
                                                <div class="col-lg-6">
                                                {!! Form::open(['method'=>'GET','route'=>'search.message']) !!}
                                                <div class="input-group left">
                                                  
                                                      <input name="word"  type="text" class="form-control" placeholder="Correo o nombres y apellidos">
                                                      <span class="input-group-btn">
                                                        <button class="btn btn-default" type="submit">
                                                            <span class="glyphicon glyphicon-search"></span>
                                                            Buscar
                                                        </button>
                                                      </span>
                                                  
                                                </div><!-- /input-group -->
                                                {!! Form::close() !!}
                                              </div><!-- /.col-lg-6 -->
                                              <hr>
                                              
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th> Fecha</th>
                                                            <th> Nombres</th>
                                                            <th> Apellidos</th>
                                                            <th> Email</th>
                                                            <th> Opción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($messages as $msg)
                                                        <tr>
                                                                <td> {{ $msg->created_at }}</td>
                                                                <td> {{ $msg->name }}</td>
                                                                <td> {{ $msg->lastname }}</td>
                                                                <td>{{ $msg->email }}</td>
                                                                <td>
                                                                    <a class="btn btn-success btn-sm" href="{{ route('msg.show',$msg->id) }}">ver</a>
                                                                    <a class="btn btn-danger btn-sm" href="#" onclick="alert({{ $msg->id }})">eliminar</a>
                                                                    
                                                                </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>

                                                {!! $messages->render() !!}
                                            
                                        </div>
                                </div>