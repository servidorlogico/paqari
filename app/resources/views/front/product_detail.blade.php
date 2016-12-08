@include('layouts.paqari.header')
<div class="row">
    <div class="small-12 columns">
        <a href="#">Home</a><span>/</span><a href="#">Productos</a>
    </div>
     <hr>
    @include('layouts.paqari.menu')
    <div class="small-12 medium-9 columns">
         @include('layouts.paqari.title')
         
         <hr class="hr3">
         @if($product)
         <div class="row">
             <div class=" small-12 medium-4 columns">
                 <div class="row">
                    <div class="small-12 columns">
                        <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco1.png')}}" class="wrapper">
                    </div>
                    <div class="small-6 columns">
                        <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco1.png')}}">
                    </div>
                    <div class="small-6 columns">
                        <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco1.png')}}">
                    </div>
                </div>
             </div>
             <div class="small-12 medium-8 columns">
             <div class="row"> 
                <div class=" medium-1  columns"></div>
                <div class=" medium-10  columns">
                    <h4>{{ $product->name }}</h4>
                    <h3 class="softText">S./  {{ number_format($product->price,2,',',' ') }}</h3>
                    <p class="softText">
                        nota: las ganancias de la donación serán destinadas para los fines benéficos de la asociación Siempre Amanecer.
                    </p>
                </div>
                <div class=" medium-1  columns"></div>
                <hr class="hr2 ">
                <div class=" medium-1  columns"></div>
                <div class="small-5 columns inputBlue">
                    @if(count($product->sizes)>0)
                        <h3>TALLA</h3>
                        <select name="talla">
                            @foreach($product->sizes as $size)
                                <option value="{{ $size->size}}">{{$size->size}}</option>
                            @endforeach
                        </select>
                    @endif
                    </div>
                {!! Form::open(['id'=>'add-item','method'=>'GET','route'=>['cart.add',$product->slug]]) !!}
                        <div class="small-6 columns inputBlue">
                            <h3>Cantidad</h3>
                            <input id="quantity" name="quantity" type="tex" value="1">
                        </div>
                        <div class="small-6 columns"></div>
                        
                        <div class="small-6 columns">
                            <div class="row">
                                <div class="small-6 columns">
                                    <img class="wrapper" src="{{asset('plugins/front-theme/RECORTES/HEADER/carrito.png')}}"  style="height:100px;">
                                </div>
                                <div class="small-6 columns" >
                                    <p style="height:100px;display: flex;justify-content: flex-end;align-content: center;flex-direction: column;"><a  onclick="event.preventDefault();
                                                 document.getElementById('add-item').submit();" type="submit">Añadir al Carrito</a></p>
                                </div>
                            </div>
                        </div>
                
                
                {!! Form::close() !!}
                </div>
             </div>
         </div>
        @else
        <div class="row">
             <div class=" small-12 medium-4 columns">
                 
             </div>
             <div class="small-12 medium-8 columns">
             <div class="row"> 
                <div class=" medium-1  columns"></div>
                <div class=" medium-10  columns">
                    <h4>ERROR! No encontrado!</h4>
                    
                    <p class="softText">
                        nota: El producto que está buscando no se ha encontrado.
                    </p>
                </div>
                <div class=" medium-1  columns"></div>
                <hr class="hr2 ">
                
                </div>
             </div>
         </div>
        @endif
    <div class="cabeza">Productos Destacados</div>
    <hr class="hr3">
    <div class="row productos">
        <div class="medium-4 columns">
            <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco2.png')}}">
            <p>S/ 00.00</p>
        </div>
        <div class="medium-4 columns">
            <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco2.png')}}">
            <p>S/ 00.00</p>
        </div>
        <div class="medium-4 columns">
            <img src="{{asset('plugins/front-theme/RECORTES/HOME/marco2.png')}}">
            <p>S/ 00.00</p>
        </div>

    </div>

    </div>
    
</div>

            <br>
            <br>
@include('layouts.paqari.foot')