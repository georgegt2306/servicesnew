@extends('plantilla')
@section('content')
	<style type="text/css">
		#servicios{
			color:#fff;
			background-color:#e6412c;
		}
    </style>



        <map id="imgpoliticas" name="imgpoliticas">
        
        	<area shape="poly" coords="70, 53, 0, 365, 0, 374, 200, 374, 275, 53" alt="" onMouseOver="document.getElementById('imgPyG').src='images/sombras_c1.png';" onMouseOut="document.getElementById('imgPyG').src='images/sombras_c0.png';"/>
        
       		<area shape="poly" coords="294, 53, 220, 374, 422, 374, 497, 53" alt="" onMouseOver="document.getElementById('imgPyG').src='images/sombras_c2.png';" onMouseOut="document.getElementById('imgPyG').src='images/sombras_c0.png';"/>
        
        	<area shape="poly" coords="512, 53, 441, 374, 640, 374, 718, 53" alt="" onMouseOver="document.getElementById('imgPyG').src='images/sombras_c3.png';" onMouseOut="document.getElementById('imgPyG').src='images/sombras_c0.png';"/>
        
        </map>
        <!--<img id="imgPyG" class="centrar" style="background-image:url(images/politicasygarantias.png); background-size:720px 374px; background-position:center; background-repeat:no-repeat" src="images/sombras_c0.png" alt="" width="720px" height="374px" usemap="#imgpoliticas">-->
        <img id="imgPyG" class="centrar" src="images/politicasygarantias.png" alt="" width="720px" height="374px">
        
        <div class="cleaner_h20"></div>
        
        <div class="textoGeneral">
        	Centro Autorizado de Servicios para las marcas SPEEDMIND, EPSON, CANON, HP CONSUMO, AOC, TRIPPLITE, CDP y gestor de las garantías para los productos comercializados por Electrónica Siglo 21.<br> 
            <img alt="" src="images/imagenTV.png" class="float_r" width="350px">
            Ponemos a disposición de los clientes el presente compendio de políticas:
            
			<br><br>
            <a href="periododevigencia.html">1.	Períodos de vigencia</a>
                <div style="height:15px"></div>
            <a href="condicionesgarantia.html">2.	Requisitos para aceptar una garantía</a>
            <div style="height:15px"></div>
            <a href="fueradegarantia.html">3.	Productos fuera de garantía</a>
            <div style="height:15px"></div>
            <a href="garantiainmediata.html">4.	Garantía inmediata</a>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner_h60"></div>
        <!--
        <iframe src="https://drive.google.com/file/d/1Gug6anv18tB9Xq1ZjHA-sOOS4LIjbQi5/preview" height="800px" width="100%"></iframe>
        <a href="recursos/DisposicionesGenerales.pdf" target="_blank"><img alt="" src="images/boton_descarga.png" class="centrar" width="300"></a>
        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h20"></div>
        <iframe src="funciones/regvisitas.php?pag=politicasgarantia" width="25" height="25" style="display:none"></iframe>
 -->
    <!-- InstanceEndEditable -->


@endsection


