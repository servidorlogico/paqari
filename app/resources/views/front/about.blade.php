@include('layouts.paqari.header')
<div class="row">
     <div class="small-12 columns">
        <a href="{{url('/')}}">Home</a><span>/</span><a href="{{url('/about')}}">Nosotros</a>
        </div>
    <hr>
      @include('layouts.paqari.menu-about')
    
    <div class="small-12 medium-9 columns">
        <h3 class="azul">PAQARI</h3>
        <h4 class="softText">TIENDA SOLIDARIA</h4>
        <p>Siempre Amanecer, como institución educativa, venia brindando asistencia
        social mediante la subvención parical o total de la escolaridad de los niños
        de familias de bajos recursos que llegaban a la institución en busca de esperanza
        y oportunidades(Programa de becas "Caminando Juntos").</p>
        <p>A pesar de esto, el ingreso que genera aun no es lo suficiente para el mantenimiento
        y desarrollo de la institución. Por eso, con el objetivo de generar un ingreso extra
        que ayude a estabilizar el desarrollo de la institución y les permita realizar
        sus actividades se creó la tienda para aplicar el ingreso económico.</p>
        <div class="row softText" style="text-align:center">
            <div class="medium-6 columns">
                <br>
                <img src="{{ asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/mision.png') }}">
                <br><br>
                <p>Generar un ingreso extra para la asociación mediante la
                    venta de varios productos (ropa.bisuteria,adornos, etc.)
                </p>
            </div>
            <div class="medium-6 columns">
                <br>
                <img src="{{asset('plugins/front-theme/RECORTES/QUIENES_SOMOS/vision.png') }}">
                <br><br>
                <p>
                    Ser la primera tienda de ayuda social para niños y jóvenes dentro
                    del Transtorno del Espectro del Autismo mediante la venta de 
                    beneficiencia y manuales.
                </p>
            </div>
        </div> 
    </div>

</div>

            <br>
            <br>
@include('layouts.paqari.foot')