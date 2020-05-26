<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function show(){
        $data = User::where('active','Y')->get();
        return response()->json(['status'=>true, 'data'=>$data]);
    }

    public function showCurrent(){
        $userAuth = $this->request->user()->user;
        $data = User::where('email',$userAuth->email)->first();
        return response()->json(['status'=>true, 'data'=>$data]);
    }

    public function change(){

        $user = User::find($this->request->id);

        if($user){
            $user->name = $this->request->name;
            $user->phone = $this->request->phone;

            if($this->request->password){
                if($this->request->password == $this->request->repassword){
                    $user->password = md5($this->request->password);
                }else{
                    return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
                }
            }


            if($user->save()){
                return response()->json(['status'=>true, 'message'=>"Success Update"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }


    }
}
