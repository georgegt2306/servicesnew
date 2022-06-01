@extends('plantilla')
@section('content')

	<style type="text/css">
		#servicios{
			color:#fff;
			background-color:#e6412c;
		}
    </style>


    



    	<div style="width:100%; height:60px; background-image:url(images/tituloSoporteTecnico.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        
        <script type="application/javascript">
			

			
			/* -Texto Opcion 1- */
			var opc1 = 'Mantenga la inversión de sus clientes en equipos EPSON incrementando  la duración de su garantía estándar con uno o dos años adicionales.<br><br>Solicite información en nuestro  counter para los  precios de las  garantías extendidas, acorde al período de tiempo adicional que requiera su cliente.<br><br>Para procesar a las garantías extendidas se requiere la siguiente documentación:<br><br><a class="noenlace">1.-</a> Orden de compra a nombre de <a class="noenlace">Service 21</a> indicando:<br>&emsp;<a class="noenlace">a.</a> Cantidad,  tiempo  de  garantía,  precio  unitario  y  modelo  de  la impresora.<br>&emsp;<a class="noenlace">b.</a> Razón social, RUC, dirección, teléfono y nombre de contacto el usuario final del equipo.<br>&emsp;<a class="noenlace">c.</a> Copia  de  la  factura  de  compra  del equipo.<br><br><a class="noenlace">Nota:</a> Las garantías extendidas  deben ser emitidas a nombre del usuario final propietario del equipo.  No pueden estar a nombre del reseller que vende el equipo. <br><a class="noenlace">Tiempo de  entrega:</a> 3 semanas.<br><a class="noenlace">Forma  de  Pago:</a> 50%  a  la  puesta  de  la  orden  de  compra  y  50%  contra  entrega  del documento.<br><br><p style="text-align:right">.';

			/* -Texto Opcion 2- */
			var opc2 = 'Agregue valor a  sus  equipos HP aumentado de 2 a 3 años máximo dependiendo del producto,su período de garantía con los HP   Carepack, que disponen de una amplia variedad   de niveles de servicio con atención  en sitio, horario extendido  y para equipos críticos las ofertas con tiempo especial de 6 horas Call to repair, asi como instalaciones y puestas en marcha de equipos con el respaldo de personal certificado de HP:<br><br><a class="noenlace">Service 21</a> ofrece a los resellers de Siglo 21 la lista completa de Carepacks en las líneas de IPG Consumo y Comercial, PSG Consumo y Comercial, Servidores y Storage.<br><br>Para procesar las garantías extendidas se requiere la siguiente documentación:<br><br><a class="noenlace">1.-</a> Orden de compra a nombre de <a class="noenlace">Service 21</a> indicando:<br>&emsp;<a class="noenlace">a.</a> Cantidad, tiempo de garantía, precio unitario, modelo de la impresora, serial y número de <br>&emsp;parte del Carepack seleccionado.<br>&emsp;<a class="noenlace">b.</a> Razón social, RUC, dirección, teléfono y nombre de contacto del usuario final del equipo.<br><br><p style="text-align:right">';
			
			/* -Texto Opcion 3- */
			var opc3 = 'Ponemos a disposición de nuestros resellers la venta de repuestos para los equipos Epson vigentes.<br><br>Tenemos a su disposición las partes más comunes de equipos matriciales bajo pedido con la cancelación del 100% como Ribbon drive, bus de datos, etc. para cobertura de sus contratos de mantenimiento y reparación de sus clientes.  Consulte  nuestra disponibilidad y también pedidos especiales con entrega en un máximo de 45 días.<br><br>';
			
			function cambiar(indice)
			{
				
				document.getElementById('Opc1').style.backgroundColor = "#909092";
				document.getElementById('Opc2').style.backgroundColor = "#909092";
				document.getElementById('Opc3').style.backgroundColor = "#909092";
				//document.getElementById('Opc4').style.backgroundColor = "#909092";
				
				switch (indice)
				{
					case 1: document.getElementById('contenidoST').innerHTML = opc1; document.getElementById('Opc1').style.backgroundColor = "#e4412b"; break;
					case 2: document.getElementById('contenidoST').innerHTML = opc2; document.getElementById('Opc2').style.backgroundColor = "#e4412b"; break;
					case 3: document.getElementById('contenidoST').innerHTML = opc3; document.getElementById('Opc3').style.backgroundColor = "#e4412b"; break;
				}
			}
			
        </script>
        
        <table align="center" class="textoGeneral">
        	<tr>
            	<td id="Opc1" class="tdTituloSopTec" onClick="cambiar(1); return false;">GARANTÍAS EXTENDIDAS PARA EQUIPOS EPSON</td>
                <td id="Opc2" class="tdTituloSopTec" onClick="cambiar(2); return false;">GARANTÍAS EXTENDIDAS PARA EQUIPOS HP</td>
                <td id="Opc3" class="tdTituloSopTec" onClick="cambiar(3); return false;">VENTA DE REPUESTOS EPSON</td>
            </tr>
            <tr>
            	<td id="contenidoST" colspan="4" class="textoGeneral tdContenidoSopTec"></td>
            </tr>
        </table>
        
        <script type="text/javascript">cambiar(1);</script>
        
        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h20"></div>



@endsection


    



