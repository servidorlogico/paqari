<div class="row">
                        <div class="col-lg-12">
                            <div class="list-group">
                              <a href="#" class="list-group-item active">
                                Detalles
                              </a>
                              <a  class="list-group-item"><strong>DNI: </strong> {{ $user->dni }}</a>
                              <a  class="list-group-item"><strong>Nombres: </strong> {{ $user->name }}</a>
                              <a  class="list-group-item"> <strong>Apellidos:</strong> {{ $user->lastname }}</a>
                              <a class="list-group-item"><strong>Telèfono: </strong> {{ $user->telephone }}</a>
                              <a  class="list-group-item"><strong>Direcciòn:</strong> {{ $user->address }}</a>
                              <a  class="list-group-item"><strong>Email:</strong> {{ $user->email }}</a>
                              <a  class="list-group-item"><strong>Creado:</strong> {{ date($user->created_at) }}</a>
                              <a  class="list-group-item"><strong>Modificado:</strong> {{ date($user->updated_at) }}</a>
                              
                            </div>
                        </div>
</div>