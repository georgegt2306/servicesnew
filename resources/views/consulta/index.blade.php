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
    
        <table width="100%" class="textoGeneral" align="center">
    		<tr>
            	<td colspan="3"><p>Consulta el estado actual de tu equipo ingresado en nuestro Servicio Técnico</p>
            	</td>
			</tr>
           


            <tr>
            	<td colspan="2" valign="bottom"><p> NÚMERO DE INGRESO de tu equipo: 
                <input id="codigo" type="text" name="codigo" onkeypress="return justNumbers(event);" >   <img src="images/btn_buscar.png" alt="" height="29" align="absmiddle" style="cursor:pointer" onClick="return comprobar();"></td>
            </tr>

        
        </table>
      
        
        <div class="cleaner_h20"></div>


        
        <table id="datosGenerales" align="center" width="314" style="border-spacing:0px;" class="textoGeneral">
        	<tr>
            	<td height="93" class="conson_datos_cab" style="text-align:right" valign="bottom"><label style="padding-right:15px"><strong>#<? echo $codigo; ?></strong></label></td>
            </tr>
            <tr>
            	<td height="10" class="conson_datos_med"></td>
            </tr>
            <tr class="conson_datos_med">
            	<td height="40" class="conson_datos_med">
                	<table align="center" width="90%"><tr>
                    	<td width="90" valign="top"><label style="padding-left:10px; padding-right:11px;font-weight:bold;">Cliente: </label></td>
                        <td style="font-size:13px; line-height:18px; text-align:left; text-transform:uppercase;"><? echo $cliente; ?></td>
                    </tr></table>
                </td>
            </tr>
            <tr>
            	<td height="40" class="conson_datos_med">
                	<table align="center" width="90%"><tr>
                    	<td width="90" valign="top"><label style="padding-left:10px; padding-right:10px;font-weight:bold;">Equipo: </label></td>
                        <td style="font-size:13px; line-height:18px; text-align:left; text-transform:uppercase"><? echo $equipo." ".$nombreequipo; ?></td>
                    </tr></table>
                </td>
            </tr>
            <tr>
            	<td height="40" class="conson_datos_med">
                	<table align="center" width="90%"><tr>
                    	<td width="90" valign="top"><label style="padding-left:10px; padding-right:12px;font-weight:bold;">CASO: </label></td>
                        <td style="font-size:13px; line-height:18px; text-align:left; text-transform:uppercase"><? echo $estado; ?></td>
                    </tr></table>
                </td>
            </tr>
            <tr>
            	<td height="40" class="conson_datos_med">
                	<table align="center" width="90%"><tr>
                    	<td width="90" valign="top"><label style="padding-left:10px; padding-right:12px;font-weight:bold;">Técnico: </label></td>
                        <td style="font-size:13px; line-height:18px; text-align:left; text-transform:uppercase"><? echo $tecnico; ?></td>
                    </tr></table>
                </td>
            </tr>
            <tr>
            	<td height="10" class="conson_datos_med"></td>
            </tr>
            <tr>
            	<td height="6" class="conson_datos_pie"></td>
            </tr>
        </table>
        <br><br>
        <div id="detalle">
            
        </div>
        <div class="cleaner_h30 linea"></div>
        <div class="cleaner_h30"></div>

<script type="application/javascript">

			
    function comprobar()
    {
        var codigo= $("#codigo").val();
        if(codigo == '')
        {
            alert('Estimado usuario, ingrese su codigo por favor');
            return false;
        }

        if (!/^([0-9])*$/.test(document.getElementById('codigo').value)){
            alert('Estimado usuario, en este campo solo puede ingresar numeros');
            return false;
        }
        
        else
        {
        $.get('https://service-21.net/rest/index.php/restserver/consulta?codigo1='+codigo);

        $.ajax({
        url: "{{asset('')}}consulta/"+codigo,
        type:  "get", //método de envio
        success: function(res){
          
            console.log(res.data);
            if(res.sms){
                  

                var detalle = "<table id='estadosDetalles'  width='598' style='border-spacing:0px;'>";
                detalle+="<tr><td height='81' class='conson_estados_cab'></td></tr>";
                detalle+="<tr><td height='5' class='conson_estados_med'></td></tr>";
                detalle+="<tr><td class='conson_estados_med'><table align='center' rules='all' border='1' bordercolor='#CCCCCC' width='555'>";
                detalle+="<tr><td width='70' align='center'>"+res.data.itemName+"</td></tr>";  
                detalle+="</table>";
                    
                
                $("#detalle").html(detalle);

            }else{
                alert(respuesta.mensaje);
            }

          
        }
        

    })
        
        }
    }
</script>	


    @endsection



