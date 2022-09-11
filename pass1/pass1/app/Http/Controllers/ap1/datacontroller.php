<?php

namespace App\Http\Controllers\ap1;

use App\Http\Controllers\ap1\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\datamodel;
use Illuminate\Support\Facades\Validator;


class datacontroller extends BaseController
{
    
    public function data(Request $request)
    {

        $validator=Validator::make($request->all(),
        [
            'name'=>"required",
            'email'=>'required',
            "phone"=>"required",
            "message"=>"required",
        ]);

        if($validator->fails())
        {
            return $this->sendError("Validation Error",$validator->errors());
        }

        $input=$request->all();
        $data=datamodel::create($input);
        $success['token']=$data->createToken("token")->accessToken;
        $success['name']=$data->name;

        return $this->send($success,'User register successfully');
        
    }


    public function show()
    {
        $data=datamodel::all();
        if(is_null($data))
        {
           return $this->sendError('No any user are avaialable');            
        }
        else
        {
            $data=datamodel::all();
            return $this->send($data,'Data will retrived successfully');
        }
    }




    public function destroy($id)
    {

        datamodel::where('id',$id)->delete();
        if(is_null($id))
        {
            return $this->sendError("No data is avaialable for delete");
        }
        else
        {
            datamodel::where('id',$id)->delete();

            return $this->send($id,"Data will Deleted successfully");
        }
    }



}
