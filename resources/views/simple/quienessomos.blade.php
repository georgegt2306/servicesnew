@extends('plantilla')
@section('content')
	<style type="text/css">
    	#quienessomos{
			color:#fff;
			background-color:#e6412c;
		}
 
		.roundabout-holder {       
			list-style: none;       
			padding: 0;       
			margin: 0 auto;       
			height: 295px;       
			width: 455px;    
		}    
		
		.roundabout-moveable-item {       
			height: 294px;       
			width: 454px;       
			cursor: pointer;       
			/*background-color: #ccc;       
			border: 1px solid #999;    */
		}    
		
		.roundabout-in-focus {       
			cursor: auto;
		}
		
		.roundabout-in-focus img{       
			border:#e6412c;
			border-style:solid;
			border-width:3px;
			background-color:#e6412c;
		}
		
		#sliderQuienesSomos ul li img{
			width:100%;
			height:100%;
		}
		
	    </style>


        
        <div id="sliderQuienesSomos">
                <div class="previous arrow"></div>
                <div class="next arrow"></div>
                <ul>
                    <li><img id="img1" src="images/qsuno.jpg" alt="" /></li>
                    <li><img id="img2" src="images/qsdos.jpg" alt="" /></li>
                    <li><img id="img3" src="images/img3.jpg" alt="" /></li>
                </ul>
        </div>
        
        <script>    
			$(document).ready(function() {$('#sliderQuienesSomos ul').roundabout( { btnNext: ".previous", btnPrev: ".next" } ); }); 
        </script>


        
        <p class="textoGeneral">
        	Somos un grupo humano capacitado para el ensamblaje y el servicio técnico de equipos de computación, brindando asesoramiento técnico y cumpliendo las necesidades de nuestros clientes, mejorando continuamente para alcanzar la excelencia en el servicio.
        </p>
        <div class="cleaner_h10"></div>
        <p class="textoGeneral">
            Trabajamos en conjunto con el Departamento Técnico de Electrónica Siglo 21 en Quito, brindando de esta forma cobertura a todo el territorio nacional.
    	</p>
        <br><br>
        <p class="tituloGeneral">Objetivos</p>
        <br>

        <p class="textoGeneral">
          <a class="noenlace">•</a>&nbsp;Ofrecer un personal capacitado para cumplir eficientemente las tareas asignadas.<br>
          <!--<a class="noenlace">•</a>&nbsp;Incrementar la capacidad de ensamblaje de computadoras Speedmind.<br>-->
          <a class="noenlace">•</a>&nbsp;Identificar los requisitos y necesidades del cliente, para llevar a cabo en el menor tiempo posible los procesos de reparación y garantía<br>
          <!--<a class="noenlace">•</a>&nbsp;Disminuir el número de equipos con problemas de ensamblaje.<br>-->
          <!--<a class="noenlace">•</a>&nbsp;Disminuir el tiempo promedio de entrega de equipos en Servicio técnico.<br>-->
          <a class="noenlace">•</a>&nbsp;Poner a disposición de nuestros clientes, repuestos que contengan la última tecnología en el mercado, manteniendo una estrecha relación con los fabricantes y proveedores.<br>
          <a class="noenlace">•</a>&nbsp;Ofrecer al cliente el respaldo total de productos Speedmind.<br>
        </p>

        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>

        

    


    




@endsection