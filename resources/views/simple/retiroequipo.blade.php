@extends('plantilla')
@section('content')



	<style type="text/css">
		#servicios{
			color:#fff;
			background-color:#e6412c;
		}
    </style>


    	<div style="width:100%; height:60px; background-image:url(images/tituloRetiroEquipo.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        <img alt="" src="images/retirarequipos.jpg" class="centrar" width="625px">
        <div class="cleaner_h20"></div>
        <div class="centrar" style="width:625px">	
            <p class="textoGeneral">
        		Condiciones de retiro de equipos en garantía y reparación:<br>
				<br>
				<a class="noenlace">1.-</a> Deberá presentar la orden de ingreso y una identificación (cédula de identidad), o carta de la compañía autorizando el retiro.<br>
				<br>
				<a class="noenlace">2.-</a> Si en el periodo de 60 días posterior al aviso de entrega, y luego de reiterados avisos no se retira el equipo, <a class="noenlace">Service 21</a> se reserva el derecho de disponer de manera total del  equipo del cliente, sin opción a reclamo alguno.<br>
                <br>
        	</p>
        </div>
        <div class="cleaner_h20 linea"></div>
        <div class="cleaner_h20"></div>
        <iframe src="funciones/regvisitas.php?pag=retiroequipos" width="25" height="25" style="display:none"></iframe>


    	<div class="cleaner_h10"></div>



    

@endsection

    



