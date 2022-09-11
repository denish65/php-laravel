<?php

namespace App\Http\Controllers\ap1;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    
    public function send($result,$message)
    {
        $response=[

            'success'=>true,
            'data'=>$result,
            'message'=>$message,
        ];
            return response()->json($response,404);
    }


    public function sendError($error,$errorMessage=[],$code=202)
    {

        $response=[
            'success'=>false,
            'message'=>$error,
        ];


        if(!empty($errorMessage))
        {
          $response['data']=$errorMessage;
        }

        return response()->json($errorMessage,$code);




    }





}
