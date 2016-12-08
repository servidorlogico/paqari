<footer>
<div class="row foot">
    <br>
    <div class="large-3 columns foot margintop">
        <img src="{{ asset('plugins/front-theme/RECORTES/FOTTER/orlas1.png')  }}">
        <br><br>
        <h4>SUSCRÍBETE A NUESTRO NEWSLETTER</h4>
        <p>Recibirás emails con novedades de la tienda solidaria.</p>
        {!! Form::open(['method'=>'post','route'=>'suscript'])!!}
            <input name="email" type="text">
            <button type="submit">SUSCRIBIR!</button> 
        {!! Form::close() !!}
    </div>
    <div class="large-3 columns foot">
        <img src="{{ asset('plugins/front-theme/RECORTES/FOTTER/asociasion.png')}}">
        <br>
        <h4>TIENDA SOLIDARIA</h4>
        <h4>100% AUTISMO</h4>
        <h4>PIEZA ÚNICA</h4>
        <h4>EXTRA</h4>

    </div>
    <div class="large-3 columns foot">
        <img src="{{ asset('plugins/front-theme/RECORTES/FOTTER/colegio.png')}}">
        <br>
        <h4>UBICACIÓN TIENDA</h4>
        <p>Calle General Inclan 759</p>
        <p>Miraflores - Lima</p>

    </div>
    <div class="large-3 columns foot margintop">
        <img src="{{ asset('plugins/front-theme/RECORTES/FOTTER/orlas11.png')}}">
        <br><br>
        <h4>MÁS INFORMACIÓN</h4>
        <h4>ASOCIACIÓN SIEMPRE AMANECER</h4>
        <h4>COLEGION SIEMPRE AMANECER</h4>
        
        

    </div>
</div>
</footer>
