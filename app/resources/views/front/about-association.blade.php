@include('layouts.paqari.header')
<div class="row">
        <div class="small-12 columns">
        <a href="{{url('/')}}">Home</a><span>/</span><a href="{{url('/about')}}">Nosotros</a>
        </div>
    <hr>
    @include('layouts.paqari.menu-about')
    <div class="small-12 medium-9 columns">
        <br>
        <br>
        <div class="row">
            <div class="small-4 columns"></div>
            <div class="small-4 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/titular.png') }}" class="wrapper">
            </div>
            <div class="small-4 columns"></div>
        </div>
        <br>
        <div class="row">
            <div class="small-1 columns"></div>
            <div class="small-10 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/informacion_central.png') }}" class="wrapper">
            </div>
            <div class="small-1 columns"></div>
        </div>
        <br><br>
        <div class="row">
            <div class="small-12 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/sub_titular.png') }}" class="wrapper">
            </div>
        </div>  
        <div class="row">
            <div class="small-4 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/proyecto.png') }}" class="wrapper2">
            </div>
            <div class="small-4 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/proyecto2.png') }}" class="wrapper2">
            </div>
            <div class="small-4 columns">
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/proyecto3.png') }}" class="wrapper2">
            </div>
        </div>
        
            
        <!--
        <div class="row">
            <div class="small-2 columns"></div>
            <div class="small-8 columns">
                <p class="softText" style="text-align:center">
                    El autismo es un trastorno neurológico complejo que generalmente
                    dura toda la vida. Se presenta en cualquier grupo racial, ético y social,
                    y es cuatro veces más frecuente en los niños que en las niñas. El
                    autismo daña la capacidad de una persona para comunicarse y 
                    relacionarse con otros.<br>
                    Actualmente se diagnostica con autismo a:
                </p>
            </div>
            <div class="small-2 columns"></div>
        </div>
        <div class="row">
            <div class="small-5 columns">
                <p>1 de cada 68 individuos</p>
                <img src="RECORTES/QUIENES_SOMOS/">
            </div>
            <div class="small-2 columns"></div>
            <div class="small-5 columns">
                <p>1 de cada 42 niños varones</p>
            </div>
        </div>
        -->
    </div>

</div>

            <br>
            <br>
@include('layouts.paqari.foot')