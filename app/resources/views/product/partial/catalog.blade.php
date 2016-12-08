                                   <a href="{{route('product.create') }}">Crear nuevo producto</a>
                                     <div class="panel panel-info">
                                        <div class="panel-heading">CATÀLOGO</div>

                                        <div class="panel-body">
                                                <div class="col-lg-6">
                                                {!! Form::open(['method'=>'GET','route'=>'search.product']) !!}
                                                <div class="input-group left">
                                                  
                                                      <input name="word"  type="text" class="form-control" placeholder="Código o nombre">
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
                                                            <th> ID</th>
                                                            <th> Nombre</th>
                                                            <th> Precio</th>
                                                            <th> Stock</th>
                                                            <th> Disponible</th>
                                                            <th> Opciòn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($products as $pr)
                                                        <tr>
                                                             
                                                                <td>{{ $pr->slug }}</td>
                                                                <td> {{ $pr->name }}</td>
                                                                <td> {{ $pr->price }}</td>
                                                                <td>{{ $pr->stock }}</td>
                                                                <td>{{ $pr->rest }}</td>
                                                                <td>
                                                                    <a  class="btn btn-info btn-sm" href="{{ route('product.show',$pr->slug) }}">ver</a>
                                                                    
                                                                    <a class="btn btn-success btn-sm" href="{{ route('product.edit',$pr->slug) }}">editar</a>
                                                                    
                                                                    <a class="btn btn-danger btn-sm" href="#" onclick="alert({{ $pr->id }})">eliminar</a>
    
                                                                </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>

                                            {!! $products->render() !!}
                                            
                                        </div>
                                </div>