<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Tracking;
use App\Models\History;

class InsertApiController extends Controller
{


    public function insert(Request $request){
      $callid=intval($request->data[0]['callID']);
      if(Tracking::where('callID',$callid)->count()>=1){
        Tracking::where('callID',$callid)->delete();
      }
      Tracking::insert($request->data[0]);
    }

  
  	public function inserthistory(Request $request){      
      $callid=intval($request->data[0]['callId']);
      if(History::where('callId',$callid)->count()>=1){
        History::where('callId',$callid)->delete();
      }
      for($i=0; $i<sizeof($request->data); $i++){
        History::insert($request->data[$i]);
      }
    }      

}
