<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("consulta.index");
    }


    public function show($id)
    {

        $codigo	= strtoupper($id);

        if (is_numeric($codigo)) {

            $cabecera = $this->cabecera($codigo);
           
            

            if(!is_null($cabecera)){
                $historial = $this->historial($codigo);
                return response()->json(["sms"=> true, "cabecera"=>$cabecera, "historial"=>$historial, "serie"=>false]);
            }else{
                return response()->json(["sms"=> false, "mensaje"=>"Codigo de Ingreso no encontrado"]); 
            }

            

        }else{
           
            $serie = $this->serie($codigo);
            
            if(isset($serie[0])){

                if(sizeof($serie)>1){
                    return response()->json(["sms"=> true, "cabecera"=>null, "historial"=>null, "serie"=>$serie]); 
                }else{
                    $cabecera = $this->cabecera($codigo);
            
                    $historial = $this->historial($codigo);

                    return response()->json(["sms"=> true, "cabecera"=>$cabecera, "historial"=>$historial, "serie"=>false]); 
                }
            }else{
                return response()->json(["sms"=> false, "mensaje"=>"Serie no encontrada"]); 
            }

        }
      
    }


    public function cabecera($codigo){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://201.218.2.21:8055/api/CallServiceS21?callId=".$codigo);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $logre=curl_exec($ch);

        if(curl_exec($ch) === false)
        {
            echo 'Curl error: ' . curl_error($ch);
        }
        else
        {
           $resp=json_decode($logre);
           curl_close($ch);
           if(isset($resp->data[0])){
            return $resp->data[0];
           }else{
            return null;
           }
        }
    }

    public function historial($codigo){
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://201.218.2.21:8055/api/service/CallServiceLog?callId=".$codigo);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $respuesta=curl_exec($ch);

        if(curl_exec($ch) === false)
        {
            echo 'Curl error: ' . curl_error($ch);
        }
        else
        {
           $resp2=json_decode($respuesta);
           curl_close($ch);
           return $resp2->data;
        }
    }


    public function serie($codigo){

  
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://201.218.2.21:8055/api/service/SeriesHistoriesService?serie=".$codigo);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $serie=curl_exec($ch);

         if(curl_exec($ch) === false)
          {
              echo 'Curl error: ' . curl_error($ch);
          }
          else
          {
                $resp3=json_decode($serie);
                curl_close($ch);
                return $resp3->data;
          }

    }


   
}
