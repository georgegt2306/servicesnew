<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultaApiController extends Controller
{
    public function consulta(){
        $codigounic2= intval($_GET['codigo']);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://201.218.2.21:8055/api/CallServiceS21?callId=".$codigounic2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

          if(curl_exec($ch) === false)
          {
              echo 'Curl error: ' . curl_error($ch);
          }
          else
          {
              echo 'Operation completed without any errors';
          }
          
         curl_close($ch);
 
    }


}
