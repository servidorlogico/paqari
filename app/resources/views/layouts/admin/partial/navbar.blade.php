<div class="col-md-2 bootstrap-admin-col-left">
                    <ul class="nav navbar-collapse collapse bootstrap-admin-navbar-side">
                        <li class="active">
                            <a >Pakari</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="glyphicon glyphicon-chevron-right"></i> Home</a>
                        </li>
                       @if(Auth::user()->type=='root')
                        <li>
                            <a href="{{route('admin.index')}}"><i class="glyphicon glyphicon-chevron-right"></i> Administradores</a>
                        </li>
                        @endif
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Usuarios</a>
                        </li>
                        <li>
                            <a href="{{ route('product.index') }}"><i class="glyphicon glyphicon-chevron-down"></i> Productos</a>
                            
                        </li>
                        <li>
                            <a href="{{ route('suscrip.index') }}"><i class="glyphicon glyphicon-chevron-right"></i> Suscriptores</a>
                            
                        </li>
                        <li>
                            <a href="{{ route('msg.index') }}"><i class="glyphicon glyphicon-chevron-right"></i> Mensajes</a>
                            
                        </li>
                        <li>
                            <a><i class="glyphicon glyphicon-chevron-down"></i> Configuraciòn</a>
                            <ul class="nav navbar-collapse bootstrap-admin-navbar-side">
                                <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>   - - - Pakari</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>   - - - Temporadas</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i>   - - - Otros</a></li>
                            </ul>
                        </li>
                        
                     
                        
                        
                    </ul>
                </div>