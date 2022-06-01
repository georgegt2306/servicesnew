@extends('plantilla')
@section('content')
	<style type="text/css">
		#contacto{
			color:#fff;
			background-color:#e6412c;
		}
    </style>


    	<script type="application/javascript">
        	function cambiar(img1,img2)
			{
				vista1=document.getElementById(img1).style.display;
				vista2=document.getElementById(img2).style.display;
				vista1='';
				vista2='none';
				document.getElementById(img1).style.display = vista1;
				document.getElementById(img2).style.display = vista2;
			}
        </script>
        
    	<div style="width:100%; height:60px; background-image:url(images/tituloContacto.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        <div class="cleaner_h20"></div>
        
        <div id="MapaGrande">
        	<map id="mapMapa" name="mapMapa">
        		<area shape="rect" coords="318,155,369,229" onclick="cambiar('MapaGrandeQuito','MapaGrande'); return false;" style="cursor:pointer">
	            <area shape="rect" coords="252,304,302,378" onclick="cambiar('MapaGrandeGuayaquil','MapaGrande'); return false;" style="cursor:pointer">
    	    </map>
        	<img alt="" src="images/mapaGrande.png" width="746" class="centrar" usemap="#mapMapa">
        </div>
        
        
        <div id="MapaGrandeGuayaquil" style="display: none;">
        	<map id="mapMapaG" name="mapMapaG">
        		<area shape="rect" coords="203,158,253,233" onclick="cambiar('MapaGrandeQuito','MapaGrandeGuayaquil'); return false;" style="cursor:pointer">
	            <area shape="rect" coords="136,305,186,380" style="cursor:pointer">
    	    </map>
        	<img alt="" src="images/mapaGrandeGuayaquil.png" width="746" class="centrar" usemap="#mapMapaG">
        </div>
        
        
        <div id="MapaGrandeQuito" style="display: none;">
       	  <map id="mapMapaQ" name="mapMapaQ">
        		<area shape="rect" coords="201,154,251,229" style="cursor:pointer">
	            <area shape="rect" coords="135,305,185,380" onclick="cambiar('MapaGrandeGuayaquil','MapaGrandeQuito'); return false;" style="cursor:pointer">
    	    </map>
       	  <img alt="" src="images/mapaGrandeQuito.png" width="746" class="centrar" usemap="#mapMapaQ">
        </div>
        
        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>



@endsection




