<!DOCTYPE html>
<html lang="es">
<head>
    <title>PAQARI</title>
    <meta charset="utf-8" />
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('plugins/front-theme/css/foundation.css',true)}}">
    <link rel="stylesheet" href="{{asset('plugins/front-theme/estilos.css',true)}}" />
   
</head>
 
<body>
    <header>
       <div id="BarraInicial">
       <div class="row">
           <div id="SaberMasText" class="small-8 columns"></div>
           {!! Form::open(['method'=>'GET','route'=>'search_front']) !!}
           <div  id="Buscar" class="small-4 columns">

                    <span class="small-2">Buscar</span>
                    <input name="word" clas="small-6" type="text">
                    <span>Icono</span> 

           
           
           </div>
           {!! Form::close() !!}
        </div>
       </div>
        <div class="row">   
       <div class="table">
          
       <div id="BarraLogo">
           <div id="BRedes">
               <div id="SiguenosEn"></div>
               <div id="BarraIconos">
                   <ul>
                       <li id="IFacebook"></li>
                       <li id="IPhoto"></li>
                       <li id="ITwitter"></li>
                   </ul>
               </div>
           </div>
           <div class="IdWrapper">
                <a href="{{url('/')}}"> 
                        <div id="Logo">
                        </div>
                </a>
           </div>
           <div id="Carrito">
               @if(!Auth::user())
                <a href="{{url('/login')}}"><span id="MensajeCarrito"></span></a>
            @else
               <a  href="{{ route('cart.fact') }}"> <span>{{ Auth::user()->name.' '.Auth::user()->lastname}} </a>
                (
                @if(isset($cart))
                    {{count($cart)}}
                @else
                0
                @endif
                )
                </span>
            @endif
               <a href="{{route('cart.show')}}"><span id="ICarrito"></span></a>
           </div>
       
       
        </div>
       </div>
       </div>
       <nav class="row">
           <ul class="row">
               <li class="small-3 columns"><a href="{{ url('/about')  }}">QUIÉNES SOMOS</a></li>
               <li class="small-3 columns"><a href="{{ url('/products')  }}">PRODUCTOS</a></li>
               <li class="small-3 columns"><a href="{{ url('/contact')  }}">CONTACTO</a></li>
               <li class="small-3 columns"><a href="{{url('/help')}}">AYUDA</a></li>
           </ul>
       </nav>
    </header>
