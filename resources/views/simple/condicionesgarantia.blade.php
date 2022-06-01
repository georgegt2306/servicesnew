@extends('plantilla')
@section('content')
	    <style type="text/css">
            #servicios{
                color:#fff;
                background-color:#e6412c;
            }

            figure { display: block; width: 100%; height: 100%; margin: 0 }
            .accordion.stitch .slide div { background: #333 }
            .social-buttons { width: 100%; text-align: center; margin-top: 30px }
            .social-buttons ul { display: inline-block; margin: 0 }
            .social-buttons li { float: left; list-style-type: none }
            .call_out {
                color: #444444;
                background: url('img-demo/callout_bg.gif') repeat;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                -moz-box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                box-shadow: 1px 0 3px rgba(0, 0, 0, 0.08);
                margin-top: 20px;
            }

            .call_out .wrap {
                padding: 19px 20px 17px 20px;
                border: 1px solid #d7d4cb;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }

            .call_out h2 {
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                text-shadow: 0 1px 0 rgba(255, 255, 255, 1);
                color: #444444;
                font-size: 18px;
                line-height: 20px;
                margin: 10px 0;
            }

            .call_out a.alt_btn {
                background: url('img-demo/sprite.png') 24px 356px;
                display: block;
                padding: 0 0 0 23px;
                float: right;
                margin: -45px 0 0 0;
                font-family: Georgia, "Times New Roman", Times, serif;
                font-style: italic;
                font-size: 14px;
                color: #252525;
                text-shadow: 0px 1px 1px rgba(255, 255, 255, 0.8);
                text-align: center;
                border: none;
                -webkit-box-shadow: 0;
                -moz-box-shadow: 0;
                box-shadow: 0;
                text-decoration: none;
                font-weight: bold;
            }

            .call_out a.alt_btn span {
                padding: 14px 23px 15px 0;
                background: url('img-demo/sprite.png') 100% 253px;
                display: block;
            }

            .call_out a:hover.alt_btn { background: url('img-demo/sprite.png') 24px 408px }
            .call_out a:hover.alt_btn span { background: url('img-demo/sprite.png') 100% 304px }
        </style>
       
    
        
        <div style="width:100%; height:60px; background-image:url(images/tituloCaractAceptarG.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        <div class="cleaner_h10"></div>
        <div id="one" style="margin:0 auto">
            <ol>
                <li>
                    <h2><span>Primer Paso</span></h2>
                    <div>
                        <figure>
                            <img src="images/primer paso.jpg" alt="image" width="100%" height="100%" />
                            <figcaption class="ap-caption">
                            Presentar Factura Original donde conste el número de serie.<br>
                            En caso de que la factura no presente detalles, <br>
                            anexar la Nota de Entrega con las series respectivas.</figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>Segundo Paso</span></h2>
                    <div>
                        <figure>
                            <img src="images/segundo paso.jpg" alt="image" width="100%" height="100%" />
                            <figcaption class="ap-caption">
                            Entregar una copia de la factura.
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>Tercer Paso</span></h2>
                    <div>
                        <figure>
                            <img src="images/tercer paso.jpg" alt="image" width="100%" height="100%" />
                            <figcaption class="ap-caption">
                            Entregar la caja, los manuales o el software que acompaña al producto,<br>
                            cuando se los requiera.
                            </figcaption>
                        </figure>
                    </div>
                </li>
                <li>
                    <h2><span>Cuarto Paso</span></h2>
                    <div>
                        <figure>
                            <img src="images/cuarto paso.jpg" alt="image" width="100%" height="100%" />
                            <figcaption class="ap-caption">
                            Presentar un informe técnico indicando los problemas que presenta el<br>
                            producto.</figcaption>
                        </figure>
                    </div>
                </li>
            </ol>
        </div>
        <div class="cleaner_h20 linea"></div>
        <div class="cleaner_h20"></div>
        <script>
            (function($, d) {
                $('#one').liteAccordion({
                        onTriggerSlide : function() {
                            this.find('figcaption').fadeOut();
                        },
                        onSlideAnimComplete : function() {
                            this.find('figcaption').fadeIn();
                        },
                        autoPlay : false,
                        pauseOnHover : true,
                        theme : 'service21',
                        rounded : true,
                        enumerateSlides : true
                }).find('figcaption:first').show();

            })(jQuery, document);

        </script>
@endsection      