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
            $.get("https://service-21.net/rest/index.php/restserver/consulta?codigo1=".$codigo)

        $.ajax({
        url: "{{asset('')}}consulta/"+codigo,
        type:  "get", //método de envio
        success: function(res){
          
            console.log(res.data[0]);
            if(respuesta.msg){
                  
                var cabecera = "<div id='tickect'><strong style='color: #E4412B;'>#</strong>"+respuesta.data[0].callID+"</div><div class='row'>"; 
                cabecera+="<div class='col-md-6'><div class='form-group row'>";
                cabecera+="<label class='col-sm-2'>CLT:</label><div class='col-sm-6'><p>"+respuesta.data[0].cardName+"</p></div></div></div>";
                cabecera+="<div class='col-md-6'><div class='form-group row'>";
                cabecera+="<label class='col-sm-2'>CASO:</label><div class='col-sm-6'><p>"+respuesta.data[0].statusName+"</p></div></div></div>";
                cabecera += "</div>"; 
                cabecera += "<div class='row'>"; 
                cabecera+="<div class='col-md-6'><div class='form-group row'>";
                cabecera+="<label class='col-sm-2'>TÉCN.:</label><div class='col-sm-6'><p>"+respuesta.data[0].technicianName+"</p></div></div></div>";
                cabecera+="<div class='col-md-6'><div class='form-group row'>";
                cabecera+="<label class='col-sm-2'>EQUIP:</label><div class='col-sm-8'><p>"+respuesta.data[0].itemCode+" - "+respuesta.data[0].itemName+"</p></div></div></div>";
                cabecera += "</div>"; 
 

                $("#cabecera").html(cabecera);
           
                var detalle = "<table id='table_detalle'>"; 
                detalle+="<thead>";
                detalle+="<tr><th style='width:15% !important'>Fecha</th><th>Hora</th><th>Detalle</th></tr>";
                detalle+="</thead>";
                detalle+="<tbody>";            
                
                detalle+="<tr><td>"+formatDate(respuesta.data[0].respOnDate)+"</td><td>"+respuesta.data[0].respOnTime+"</td><td>"+respuesta.data[0].descrption+"</td></tr>";
                
            if(respuesta.data[0].resolution!=""){
                detalle+="<tr><td>"+formatDate(respuesta.data[0].resolOnDate)+"</td><td>"+respuesta.data[0].resolOnTime+"</td><td>"+respuesta.data[0].resolution+"</td></tr>";  
            }
                detalle+="</tbody>";
                detalle+="</table>";
                $("#detalle").html(detalle);

            }else{
                toastr.error(respuesta.mensaje);
            }

          
        }
        

    })
        
        }
    }
</script>	


    @endsection



