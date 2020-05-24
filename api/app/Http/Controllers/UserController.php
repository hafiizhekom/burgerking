<?php

namespace App\Http\Controllers;


use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(){
        $data = User::where('active','Y')->get();
        return response()->json(['status'=>true, 'data'=>$data]);
    }
}
