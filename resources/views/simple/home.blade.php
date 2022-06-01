@extends('plantilla')
@section('content')
<style type="text/css">
    	#index{
			color:#fff;
			background-color:#e6412c;
		}
        #carousel {
			margin: 0 auto;
		}
			
		#pages {
			width: 125px;
			margin: 0 auto;
		}
			
		.bullet {
			background: url(images/page-off.png) center center no-repeat;
			display: block;
			width: 18px;
			height: 18px;
			margin: 0;
			margin-right: 5px;
			float: left;				
		}
        
		.hover_bkgr_fricc{
			background:rgba(0,0,0,.4);
			cursor:pointer;
			display:block;
			height:100%;
			position:fixed;
			text-align:center;
			left:0;
			top:0;
			width:100%;
			z-index:10000;
		}
		.hover_bkgr_fricc .helper{
			display:inline-block;
			height:100%;
			vertical-align:middle;
		}
		.hover_bkgr_fricc > div {
			background-color: #fff;
			box-shadow: 10px 10px 60px #555;
			display: inline-block;
			height: auto;
			max-width: 551px;
			min-height: 100px;
			vertical-align: middle;
			width: 60%;
			position: relative;
			border-radius: 8px;
			padding: 15px 5%;
		}
		.popupCloseButton {
			background-color: #fff;
			border: 3px solid #999;
			border-radius: 50px;
			cursor: pointer;
			display: inline-block;
			font-family: arial;
			font-weight: bold;
			position: absolute;
			top: -20px;
			right: -20px;
			font-size: 25px;
			line-height: 30px;
			width: 30px;
			height: 30px;
			text-align: center;
		}
		.popupCloseButton:hover {
			background-color: #ccc;
		}
		.trigger_popup_fricc {
			cursor: pointer;
			font-size: 20px;
			margin: 20px;
			display: inline-block;
			font-weight: bold;
		}
</style>
<div id="articulo">
        	<div class="float_l"><img alt="" src="images/animacion.gif" width="300px" height="300px" style="margin-right:25px"></div>
    		<p id="contArt"><br><br><br>Somos el Centro de Servicios Informáticos del Ecuador, prestos a hacer de la frase</p>
            <br>
            <p id="fraseArt">“Soporte <span>PARA EL FUTURO”</span></p>
            <br>
            <p id="textArt">su cumplimiento diario, brindando a nuestros clientes servicios de alta calidad con profesionalismo, agilidad y eficiencia.
   			</p>
            <!--<div class="cleaner_h10"></div>-->
        </div>
        <div class="cleaner_h20 linea"></div>
        <div class="cleaner_h20"></div>

        <div id="pages"></div>
        <div class="cleaner_h10"></div>
        <div id="sliderIndex">	
            <div id="carousel">
				<div><a href="mantenimiento-epson.html"><img src="images/banner_ini4.jpg" alt="" width="100%"/></a></div>
                <div style="background-image:url(images/banner_ini5.jpg); background-size:contain"><a target="_blank" href="recursos/formato-ingreso.pdf"><img src="images/boton_descargar.png" alt="" style="margin-top:200px; margin-left:30px"></a></div>
                <div style="background-image:url(images/banner_ini1.jpg); background-size:contain"><a href="consultaonline.html"><img src="images/boton_consultar.png" alt="" style="margin-top:190px; margin-left:30px"></a></div>
				<div><a href="csa-service21.html"><img src="images/banner_ini2.jpg" alt="" width="100%"/></a></div>
				<div><a href="reparacion-service21.html"><img src="images/banner_ini3.jpg" alt="" width="100%"/></a></div>
			</div>
		</div>
        
		<script type="text/javascript" src="js/ejecutarSlider.js"></script>

        <div class="cleaner_h30"></div>
                
        <div id="bloques">
            <div id="bloque">
                <div class="bloqueTitulo">noticias</div>
                <div class="bloqueContenido">
                    <div class="bloqueTexto">
                    
                    <p>¿Cómo desinstalar aplicaciones en Windows y MacOS fácilmente?</p>		
                    <div align="justify">Es común que nuestros dispositivos incluyan aplicaciones que no usemos, sea un smartphone, smartwatch, tablet e incluso laptops y equipos de escritorio.	
                        Algunos fabricantes suelen incluir software de seguridad, juegos y diversas herramientas en periodo de evaluación para que compremos las versiones completas. ¿Esta práctica se realiza porque quieren mejorar nuestra seguridad o se debe a una alianza comercial? Sea una u otra la razón, tenemos formas de resolver esta situación...</div>
                    <p><span>Fuente: <a href="https://tecnologia21.com/desinstalar-aplicaciones-windows-macos">Tecnología21</a> - 27/Agosto</span></p>                	
                    
                    <div class="cleaner_h20 linea"></div>
                    <div class="cleaner_h20"></div>
                    
                    <p>WhatsApp, Instagram y negocios usan códigos QR durante 2020</p>
                    <div align="justify">Mientras que en algunos países los códigos QR no son tan populares, en otros países como China sí lo son, principalmente, para actividades relacionadas al comercio y los negocios.
                        En esta situación de aislamiento social debemos aplicar cambios en diversos procesos, hacer las cosas de manera diferente y la tecnología está de nuestro lado...</div>
                    <p><span>Fuente: <a href="https://tecnologia21.com/whatsapp-instagram-negocios-codigos-qr-2020">Tecnología21</a> - 19/Agosto</span></p>
                    
                    <div class="cleaner_h20 linea"></div>
                    <div class="cleaner_h20"></div>
                    
                    <p>El final de Internet Explorer y el impulso de Microsoft Edge	</p>
                    <div align="justify">Durante más de una década, Internet Explorer fue el navegador web con mayor cuota del mercado. Aquellos propietarios de sitios web y también programadores recuerdan con poco entusiasmo que debían desarrollar código para Internet Explorer y para el resto de navegadores web.
                        La “e” azul fue sinónimo de Internet para muchas personas alrededor del mundo durante muchos años. Internet Explorer tuvo su mayor auge entre los años 2000 a 2012, donde otros navegadores aparecieron en escena, como Firefox y Google Chrome que incorporaron extensiones para brindarnos nuevas capacidades. También hubieron otros pero con porcentajes muy pequeños de cuotas de mercado...</div>
                    <p><span>Fuente: <a href="https://tecnologia21.com/whatsapp-instagram-negocios-codigos-qr-2020">Tecnología21</a> - 18/Agosto</span></p>
                    

                    <div class="cleaner_h20"></div>
                    
                </div>
                </div>
            </div>
            <div id="bloque">
                <div class="bloqueTitulo">eventos</div>
                <div class="bloqueContenido">
                    <div class="bloqueTexto2">
                    
                    <div class="" >	
                        <p>Evento HP - Siglo21</p><br />Ver más: <a href="https://business.facebook.com/electronicasiglo21/posts/1430303127048638" target="new">link</a>
                    </div>
                    
                    <div class="cleaner_h20 linea"></div>
                    <div class="cleaner_h20"></div>
                    
                    <div class="" >	
                        <p>Nuevo portafolio Dell</p><br />Ver más: <a href="https://business.facebook.com/electronicasiglo21/posts/1384799681598983" target="new">link</a>
                    </div>
                    
                    <div class="cleaner_h20 linea"></div>
                    <div class="cleaner_h20"></div>
                    
                    <div class="" >	
                        <p>Evento Epson</p><br />Ver más: <a href="https://business.facebook.com/electronicasiglo21/posts/1356431811102437" target="new">link</a>
                    </div>                
                    
                    </div>
                </div>
            </div>
        </div>
            

        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>
        
        <div id="nuestrosClientes"></div>
		
		

    	<div class="cleaner_h10"></div>
    @endsection