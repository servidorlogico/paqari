@include('layouts.paqari.header')
<br><br>
<div class="row">
<div class="small-12 medium-3 columns">
    <div class="row">
        <h5>Perfil del comprador</h5>
        <div class="small-12 columns marcoAzul">
            <img src="{{asset('plugins/front-theme/RECORTES/HEADER/LOGO.png')}}" class="wrapper">
        </div>
        <div class="small-12 columns" style="padding:0;">
            <ul class="menuAzul">
                <li style="z-index:20;">{{Auth::user()->name.' '.Auth::user()->lastname}}</li>
                <li style="z-index:10;">Dirección: {{Auth::user()->address}}</li>
                <li style="z-index:0;"> Edad: 25 años</li>
            </ul>
        </div>
        <div class="small-12 columns">
            <ul class="menuRedondo">
                <li style="z-index:10;"><a href="#">Configuración </a></li>
                <li style="z-index:0;"><a href="#">Facturación</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="small-12 medium-8 columns">
    <div class="row">
        <h1 class="softText azul">Historial Facturación</h1>

         <table class="tablaAzul">
            <thead >
                <tr>
                <th width="150">Fecha de Donación</th>
                <th>Producto</th>
                <th width="100" style="font-aling:center">Cantidad</th>
                <th width="100">Donativo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>16/10/2016</td>
                <td>Camisa Floreada Plateada</td>
                <td>2</td>
                <td>S/.20.00</td>
                </tr>
                <tr>
                <td>16/10/2016</td>
                <td>Camisa Floreada Plateada</td>
                <td>2</td>
                <td>S/.20.00</td>
                </tr>                <tr>
                <td>16/10/2016</td>
                <td>Camisa Floreada Plateada</td>
                <td>2</td>
                <td>S/.20.00</td>
                </tr>                <tr>
                <td>16/10/2016</td>
                <td>Camisa Floreada Plateada</td>
                <td>2</td>
                <td>S/.20.00</td>
                </tr>                <tr>
                <td>16/10/2016</td>
                <td>Camisa Floreada Plateada</td>
                <td>2</td>
                <td>S/.20.00</td>
                </tr>
            </tbody>
        </table>
        <button class="bCafe">Descargar como PDF</button>
    </div>
</div>
</div>
            <br>
            <br>
@include('layouts.paqari.foot')