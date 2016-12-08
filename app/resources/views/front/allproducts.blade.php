@include('layouts.paqari.header')
<div class="row">
    <div class="small-12 columns"><a href="{{url('/')}}">Home</a><span>/</span><a href="{{url('/products')}}">Productos</a></div>
    <hr>
   @include('layouts.paqari.menu')
    <div class="small-12 medium-9 columns">
        @include('layouts.paqari.title')
        <hr class="hr3">
        
            <div class="row productos">
                @foreach($products as $product)
                    <div class="small-12 medium-4 columns">
                        <a href="{{route('product_front_show',[$section,$product->slug])}}">
                            <div class="marcoProductos" style='background-image: url("/images/{{ $product->url_1  }}");'>
                                <img src="{{ asset('plugins/front-theme/RECORTES/HOME/marco2.png') }}"> 
                            </div>
                        </a>
                        <p>S/ {{ number_format($product->price,2,',',' ') }}</p>
                    </div>    
                @endforeach
            </div>

        <div class="numerosBusqueda">
            {!! $products->render() !!}
            
        </div>        
        
        
    </div>
</div>

            <br>
            <br>
@include('layouts.paqari.foot')