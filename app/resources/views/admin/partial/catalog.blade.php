                                   <a href="{{route('admin.create') }}">Crear nuevo administrador</a>
                                     <div class="panel panel-info">
                                        <div class="panel-heading">CATÀLOGO</div>

                                        <div class="panel-body">
                                            
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th> ID</th>
                                                            <th> Nombres</th>
                                                            <th> Apellidos</th>
                                                            <th> Telèfono</th>
                                                            <th> Opciòn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($users as $usr)
                                                        <tr>
                                                             
                                                                <td>USR-{{ $usr->id }}</td>
                                                                <td> {{ $usr->name }}</td>
                                                                <td>{{ $usr->lastname }}</td>
                                                                <td>{{ $usr->telephone }}</td>
                                                                <td>
                                                                    <a  class="btn btn-info btn-sm" href="{{ route('admin.show',$usr) }}">ver</a>
                                                                    @if(Auth::user()->type!='root')
                                                                    <a class="btn btn-success btn-sm" href="{{ route('admin.edit',$usr) }}">editar</a>
                                                                    @endif
                                                                    <a class="btn btn-danger btn-sm" href="#" onclick="alert({{ $usr->id }})">eliminar</a>
    
                                                                </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                </table>

                                                
                                            
                                        </div>
                                </div>