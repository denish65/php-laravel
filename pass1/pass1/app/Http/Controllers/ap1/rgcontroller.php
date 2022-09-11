<?php

namespace App\Http\Controllers\ap1;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ap1\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Validator;
// use Validator;

class rgcontroller extends BaseController
{

    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            'name'=>"required",
            'email'=>"required",
            'password'=>"required"

        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation Error',$validator->errors());
        }

        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $data=User::create($input);
        $success['token']=$data->createToken("MyApp")->accessToken;
        $success['name']=$data->name;

        return $this->send($success,'User register successfully');
    }
    

    public function login(Request $request)
    {

       if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
           $data=Auth::User();
           $success['token']=$data->createToken('MyApp')->accessToken;
           $success['name']=$data->name;
           return $this->send($success,"User Logged in  successfully");
        }
        else
        {
            return $this->sendError('Unauthorised',['error'=>'Unauthorised']);
        }
    }
    



}
