@include('layouts.paqari.header')
<br>
<div class="row">
<div class="small-12 medium-3 columns">
    <div class="row">
        <div class="small-12 columns">
            <ul class="menuRedondo">
                <li style="z-index:10;"><a href="#">Productos </a></li>
                <li style="z-index:0;"><a href="#">Donativos</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="small-12 medium-8 columns">
  <div class="row">
        <h1 class="softText azul">Lista Productos</h1>
        @if(isset($cart))
            
                <table class="tablaImg">
                    <thead >
                        <tr>
                        <th width="150">Preview</th>
                        <th>Producto</th>
                        <th width="100">Codigo</th>
                        <th width="100">Cantidad</th>
                        <th width="100">Donativo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($cart)>0)            
                             @foreach($cart as $item)
                                    <tr>
                                    <td>
                                        <div class="marcoAzul">
                                            <img src="/images/{{$item->url_1}}" class="wrapper">
                                        </div>
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->slug}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>
                                        <div class="row">
                                            <div class="small-12 columns" style="margin-top:3.2em;">
                                                S/. {{$item->price}}
                                            </div>
                                            <div class="small-12 columns">
                                                <a href="{{route('cart.delete.item',$item->slug)}}"  class="bCafe2">Eliminar</a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    </tr>
                             @endforeach   
                        @else
                            <div class="tablaImg">Carrito vacío</div>        
                        @endif            
                    </tbody>
                </table>
            
        @else
        <div class="tablaImg">Carrito vacío</div>
        @endif
        @if(isset($cart))
            @if(count($cart)>0)
               <a href="{{ route('cart.fact') }}" type="button" class="bBlue">Segui Comprando</a>
               <a href="{{ route('cart.delete') }}" type="button" class="bCafe">Eliminar</a>
            @endif
            
        @endif
  </div>
</div>
</div>
            <br>
            <br>
@include('layouts.paqari.foot')