@extends('plantilla')
@section('content')
	<style type="text/css">
		#servicios{
			color:#fff;
			background-color:#e6412c;
		}
        #codigo{
           border-style:solid; 
           border-color:#666; 
           border-width:1px; 
           border-radius:7px; 
           height:25px; 
           width:100px; 
           padding-left:8px
        }
    </style>


    	
    <div style="width:100%; height:60px; background-image:url(images/tituloConsultaOnline.png); background-size:contain; background-repeat:no-repeat; background-position:center"></div>
        
    <div class="cleaner_h20"></div>
        
            <table width="80%" class="textoGeneral" align="center">
    		<tr>
            	<td colspan="2"><p>Consulta el estado actual de tu equipo ingresado en nuestro Servicio Técnico</p>
            	</td>
			</tr>
            <tr><td colspan="2"><br></td></tr>


            <tr id="filaIngresar" >
            	<td colspan="2" valign="bottom"><p> Escribe el NÚMERO DE INGRESO o SERIE de tu equipo: <input id="codigo" type="text" name="codigo" style="border-style:solid; border-color:#666; border-width:1px; border-radius:7px; height:25px; width:100px; padding-left:8px"></td>
            </tr>
            <tr id="filaBtn" >
            	<td colspan="2" valign="bottom" align="center"><br>
                    <img src="images/btn_buscar.png" alt="" height="29" align="absmiddle" style="cursor:pointer" onclick="Comprobar(document.getElementById('codigo').value);">
                </td>
            </tr>
        </table>
       
      
        
        <div class="cleaner_h20"></div>


        

        <div id="todo">

        </div>
        
        <div id="detalle">

        </div>
        <div id="historial">

        </div>        


        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>

<script type="application/javascript">

			

			
    function Comprobar(codigo)
    {

        $("#codigo").val('');
        if(codigo == '')
        {
            alert('Estimado usuario, ingrese su codigo por favor');
            return false;
        }
        else
        {
            $.ajax({
            url: "{{asset('')}}consulta/"+codigo,
            type:  "get", //método de envio
            success: function(res){
                
            if(res.sms){
                  
                if(res.serie!=false){
                    var cabecera = "<div style='border: 1px solid black; padding:50px; text-align:center; margin-top:10px; margin-bottom:50px'>";
                    cabecera+="<h3 style='color: black; margin-bottom:10px; font-weigth:bold'> Seleccione el # ingreso que desea consultar:</h3>";
      				
			
                 	for(h=0; h < (res.serie).length ; h++){  		
                   		cabecera+="<p><a style='color:black' onclick='Comprobar("+res.serie[h].callID+")' href='#'>";
                        cabecera+="<i class='icon-folder-open' style='color:blue'></i> <strong style='color:blue'># INGRESO: </strong>"+res.serie[h].callID+" <strong style='margin-left:12px; color:blue'>FECHA:</strong>"+res.serie[h].Fecha+"</a></p>";
            		}
			
                    $("#todo").html(cabecera);
                    $("#detalle").html('');
                    $("#historial").html('');
                    
                }else{

                        var cabecera ="<table id='datosGenerales' align='center' width='314' style='border-spacing:0px;' class='textoGeneral'>";
                        cabecera+="<tr><td height='93' class='conson_datos_cab' style='text-align:right' valign='bottom'><label style='0padding-right:15px'0><strong>#"+res.cabecera.callID+"</strong></label></td></tr>";
                        cabecera+= "<tr><td height='10' class='conson_datos_med'></td></tr>";
                        cabecera+="<tr class='conson_datos_med'>";
                        cabecera+="<td height='40' class='conson_datos_med'>";
                        cabecera+="<table align='center' width='90%'><tr><td width='90' valign='top'><label style='padding-left:10px; padding-right:11px;font-weight:bold;'>Cliente: </label></td>";
                        cabecera+="<td style='font-size:13px; line-height:18px; text-align:left; text-transform:uppercase;'>"+res.cabecera.cardName+"</td></tr></table></td></tr>";
                        
                        cabecera+="<tr><td height='40' class='conson_datos_med'><table align='center' width='90%'><tr><td width='90' valign='top'><label style='padding-left:10px; padding-right:10px;font-weight:bold;'>Equipo: </label></td>";
                        cabecera+= "<td style='font-size:13px; line-height:18px; text-align:left; text-transform:uppercase'>"+res.cabecera.subject+"</td></tr></table></td></tr>"; 
                        
                        cabecera+= "<tr><td height='40' class='conson_datos_med'><table align='center' width='90%'><tr><td width='90' valign='top'><label style='padding-left:10px; padding-right:12px;font-weight:bold;'>Status: </label></td>"; 
                        cabecera+="<td style='font-size:13px; line-height:18px; text-align:left; text-transform:uppercase'>"+res.cabecera.statusName+"</td></tr></table></td></tr>";
                        
                        cabecera+="<tr><td height='40' class='conson_datos_med'><table align='center' width='90%'><tr><td width='90' valign='top'><label style='padding-left:10px; padding-right:12px;font-weight:bold;'>Técnico: </label></td>";
                        cabecera+="<td style='font-size:13px; line-height:18px; text-align:left; text-transform:uppercase'>"+res.cabecera.technicianName+"</td></tr></table></td></tr></table>";

                        $("#todo").html(cabecera);
                        
                                                            
                        var detalle="<br><br><table id='estadosDetalles' align='center' width='598' style='border-spacing:0px;'>";
                        detalle+="<tr><td colspan='2' style='text-align:center; color:white; background-color:red; font-size:17px'> Estados </td> </tr>";

                        detalle+="<tr><td height='5' class='conson_estados_med'></td></tr>";

                        detalle+="<tr><td class='conson_estados_med'>";
                        detalle+="<table align='center' rules='all' border='1' bordercolor='#CCCCCC' width='555'>";
                        detalle+="<thead><tr><th>Fecha</th><th>Hora</th><th>Detalle</th></tr></thead>";       	
                        detalle+= "<tbody><tr><td width='70' align='center'>"+formatDate(res.cabecera.respOnDate)+"</td>"; 
                        detalle+="<td width='60' align='center'>"+formatTime(res.cabecera.respOnTime)+"</td>";
                        detalle+="<td width='350'><p style='padding-bottom:7px; padding-top:7px; padding-left:7px'>"+res.cabecera.descrption+"</p></td></tr>";
                            if(res.cabecera.descrption!=""){
                                        
                                detalle+="<tr><td width='70' align='center'>"+formatDate(res.cabecera.resolOnDate)+"</td>";
                                detalle+="<td width='60' align='center'>"+formatTime(res.cabecera.resolOnTime)+"</td>";                            
                                detalle+="<td width='350'><p style='padding-bottom:7px; padding-top:7px; padding-left:7px'>"+res.cabecera.resolution+"</p></td></tr>";
                                        
                            }         
                            detalle+="</tbody></table></td></tr></table>";
                        $("#detalle").html(detalle);
                        
                        
                        var historial="<br><table id='estadosDetalles' align='center' width='598' style='border-spacing:0px;'>";
                        historial+="<tr><td colspan='2' style='text-align:center; color:white; background-color:red; font-size:17px'> Historial</td></tr>";    
                        historial+="<tr><td height='5' class='conson_estados_med'></td></tr>";    
                        historial+="<tr><td class='conson_estados_med'><table align='center' rules='all' border='1' bordercolor='#CCCCCC' width='555'>"
                        historial+="<thead><tr><th>Estado</th><th>Fecha</th></tr></thead>";
                      		
                      
                    		for(j=0; j<(res.historial).length; j++){
                                 
                                  
                                                         
                                  historial+="<tr><td width='70' align='center'>"+res.historial[j].estado+"</td>";   
                                  historial+="<td width='60' align='center'>"+res.historial[j].fecha+"</td></tr>";
                    	
                            }
                        historial+="</table></td></tr>";   

                    
                        $("#historial").html(historial);         

                       

                    }
                }else{
                    $("#todo").html('');
                    $("#detalle").html('');
                    $("#historial").html('');
                    toastr.error(res.mensaje);
                }


          
            }
        })
        
        }
    }



    function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('/');
    }

    function formatTime(time) {
        
       if(time.length>3){
        const h = time.slice(0, 2);
        const m = time.slice(-2);
        return [h, m].join(':');
    }else{
        const h = time.slice(0, 1);
        const m = time.slice(-2);
        return [h, m].join(':');
       }

       
       
    }
</script>	


    @endsection



