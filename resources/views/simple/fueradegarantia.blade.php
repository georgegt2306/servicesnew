@extends('plantilla')
@section('content')
	<style type="text/css">
		#servicios{
			color:#fff;
			background-color:#e6412c;
		}
    </style>

    	<script type="application/javascript">
        	function cambiar(esto)
			{
				vista=document.getElementById(esto).style.display;
				if (vista=='none')
					vista='';
				else
					vista='none';

				document.getElementById(esto).style.display = vista;
			}
        </script>		
        
		<div style="width:100%; height:60px; background-image:url(images/tituloFueraGarantia.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        
        <div class="cleaner_h20"></div>
        
        <table class="contenidoFG" align="center">
        	<tr>
			  	<td id="opcA" class="cuerpoOpcFG cuerpoizq" >La factura de compra del producto indique que la garantía ya no se encuentra vigente por la FECHA.</td>
				<td class="cabeceraOpcFG cabecerader" onclick="cambiar('opcA'); return false;">a.</td>
        	</tr>
        </table>
        
        <div class="cleaner_h10"></div>
        
		<table class="contenidoFG" align="center">
            <tr>
            	<td class="cabeceraOpcFG cabeceraizq" onclick="cambiar('opcB'); return false;">b.</td>
			  	<td id="opcB" class="cuerpoOpcFG cuerpoder" style="display: none;">El número de serie o etiqueta del producto se encuentre alterado, mutilado o haya sido retirado.</td>
        	</tr>
		</table>
        
        <div class="cleaner_h10"></div>
		
        <table class="contenidoFG" align="center">
            <tr>
			  	<td id="opcC" class="cuerpoOpcFG cuerpoizq" style="display: none;">Al que se le hubiera despegado, roto o alterado el SELLO DE GARANTÍA y marcas de seguridad.</td>
				<td class="cabeceraOpcFG cabecerader" onclick="cambiar('opcC'); return false;">c.</td>
        	</tr>
        </table>
        
        <div class="cleaner_h10"></div>
        
        <table class="contenidoFG" align="center">
        	<tr>
            	<td class="cabeceraOpcFG cabeceraizq" onclick="cambiar('opcD'); return false;">d.</td>
			  	<td id="opcD" class="cuerpoOpcFG cuerpoder" style="display: none;">El producto o equipo presente golpes, roturas, hendiduras o raspaduras, conectores rotos, pines torcidos, que le falten piezas o componentes por pequeños que estos sean, que presenten polvo, contaminación biológica, evidencia de humedad y/o cualquier otro elemento ajeno al producto.</td>
        	</tr>
        </table>
        
        <div class="cleaner_h10"></div>
        
		<table class="contenidoFG" align="center">
            <tr>
            	<td id="opcE" class="cuerpoOpcFG cuerpoizq" style="display: none;">Cuando en el producto se evidencie el uso indebido por parte del cliente (Chips quemados, Soldaduras fundidas).</td>
            	<td class="cabeceraOpcFG cabecerader" onclick="cambiar('opcE'); return false;">e.</td>
        	</tr>
		</table>
        
        <div class="cleaner_h10"></div>
        
		<table class="contenidoFG" align="center">
            <tr>
            	<td class="cabeceraOpcFG cabeceraizq" onclick="cambiar('opcF'); return false;">f.</td>
			  	<td id="opcF" class="cuerpoOpcFG cuerpoder" style="display: none;">Cuando haya sufrido desperfectos causados por alto voltaje o de suministro eléctrico defectuoso.</td>
        	</tr>
        </table>
        
        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>

@endsection

    


