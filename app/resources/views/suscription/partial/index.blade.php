                                   
                                     <div class="panel panel-info">
                                        <div class="panel-heading">CATÀLOGO</div>

                                        <div class="panel-body">
                                                <div class="col-lg-6">
                                                {!! Form::open(['method'=>'GET','route'=>'search.suscrip']) !!}
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
                                                </div>
                                                <hr>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th> Fecha</th>
                                                            
                                                            <th> Email</th>
                                                            <th> Opción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($suscriptions as $sus)
                                                        <tr>
                                                                <td> {{ $sus->created_at }}</td>
                                                                
                                                                <td>{{ $sus->email }}</td>
                                                                <td>
                                                                    <a class="btn btn-danger btn-sm" href="#" onclick="alert({{ $sus->id }})">eliminar</a>
    
                                                                </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>

                                                {!! $suscriptions->render()  !!}
                                            
                                        </div>
                                </div>