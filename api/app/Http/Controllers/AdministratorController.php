<?php

namespace App\Http\Controllers;


use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        //
        $this->request = $request;
    }

    public function show(){
        $data = Administrator::where('active','Y')->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function showCurrent(){
        $adminAuth = $this->request->user()->user;
        $data = Administrator::where('username',$adminAuth->username)->first();
        return response()->json(['status'=>true, 'data'=>$data]);
    }
}
