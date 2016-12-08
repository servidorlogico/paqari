@include('layouts.paqari.header')
<div class="row">
    <div class="small-12 columns">
        <a href="{{url('/')}}">Home</a><span>/</span><a href="{{url('/products')}}">Productos</a>
        </div>
    <hr>
     @include('layouts.paqari.menu')
    <div class="small-12 medium-9 columns">
        <hr class="hr1">
        <img src="{{asset('plugins/front-theme/RECORTES/HOME/banner.png')}}">
        <hr class="hr2">
    </div>
</div>
<div class="row">
    <div class="small-12 medium-2 columns">

    </div>
    <div class="small-12 medium-9 columns">
        <div class="cabeza">Sobre nuestro productos</div>
        <hr class="hr3">
        <h5 class="softText">
            Nuestras lineas de <strong>PIEZAS ÚNICAS Y 100% AUTISMO </strong>
            Piezas creadas especialmente para ti y con tu colaboración lograremos brindarles una 
            <strong> educación y espacio de calidad </strong> para ellos.
        </h5>
        <div class="row">
            <br>
            <div class="small-12 medium-4 columns">
                <a href="{{ route('allproducts','autism')  }}"><img src="{{asset('plugins/front-theme/RECORTES/TIENDA/ventana_1.png')}}"></a>
            </div>
            <div class="small-12 medium-4 columns">
                <a href="{{ route('allproducts','unique')  }}"><img src="{{asset('plugins/front-theme/RECORTES/TIENDA/ventana_2.png')}}"></a>
            </div>
            <div class="small-12 medium-4 columns">
                <a href="{{ route('allproducts','extra')  }}"><img src="{{asset('plugins/front-theme/RECORTES/TIENDA/ventana_3.png')}}"></a>
            </div>

        </div>
    </div>
</div>
            <br>
            <br>
@include('layouts.paqari.foot')