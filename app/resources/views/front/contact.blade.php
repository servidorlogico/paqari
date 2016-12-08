@include('layouts.paqari.header')
<hr class="hr1">
<div class="row">
    <div class="large-12 columns fullimage">
        <img src="{{asset('plugins/front-theme/RECORTES/HOME/banner.png')}}">
    </div>
    <br>

</div>
<hr class="hr2">
<br>
<div class="row">
    <div class="small-5 columns">
        
        {!! Form::open(['route'=>'send.message','method'=>'POST','class'=>'formContacto']) !!}
            @if(Auth::check())
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Nombre</label>
                    {!!Form::text('name',Auth::user()->name)!!}
                     @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label>Apellidos</label>
                {!!Form::text('lastname',Auth::user()->lastname)!!}
                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Correo</label>
                {!!Form::text('email',Auth::user()->email)!!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <br><br>
            
                <label>MENSAJE</label>
                <br>
                {!!Form::textarea('content',null)!!}
                @if ($errors->has('content'))
                    <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
            
            <button type="submit">Enviar</button>
            @else
            
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label>Nombre</label>
                    {!!Form::text('name',null)!!}
                     @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                <label>Apellidos</label>
                {!!Form::text('lastname',null)!!}
                @if ($errors->has('lastname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('lastname') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Correo</label>
                {!!Form::text('email',null)!!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <br><br>
            
                <label>MENSAJE</label>
                <br>
                {!!Form::textarea('content',null)!!}
                @if ($errors->has('content'))
                    <span class="help-block">
                        <strong>{{ $errors->first('content') }}</strong>
                    </span>
                @endif
                <button type="submit">Enviar</button>
             @endif
            
            
        {!! Form::close() !!}
    </div>
    <div class="small-1 columns"></div>
    <div class="small-6 columns">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.5280025201105!2d-77.03248275502217!3d-12.114508674303632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c817b3269c53%3A0x6748cb24633fd7a2!2sCalle+Coronel+Incl%C3%A1n%2C+Miraflores+15074!5e0!3m2!1ses!2spe!4v1480923576388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <h4 class="softText">
            Calle General Inclan 759<br>
            De Lunes a Viernes: 8am - 6pm
        </h4>
        <h4>
            Mireflores - Lima
        </h4>
        <br><br>
        <h4>
            Email:
        </h4>
        <h4 class="softText">siempre.amanecer.tienda@gmail.com</h4>
        <br><br>
        <h4>Teléfonos:</h4>
        <h4 class="softText"> +511-719-1144 (Fijo)</h4>
        <br>
        <h4 class="softText">(#) 999-052-411(Movistar)</h4>
        <br>
        <hr class="hr3">
        </div>
        
    </div>
    
</div>
<br><br>
@include('layouts.paqari.foot')