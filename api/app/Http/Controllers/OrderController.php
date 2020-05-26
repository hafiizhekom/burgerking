<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
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
        $data = Order::where('active','Y')->with('user')->with('store')->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function store(){
        $data = new Order;
        $data->user =  $this->request->user()->user->id;
        $data->type = $this->request->type;
        $data->location = $this->request->location;
        $data->address = $this->request->address;
        $data->phone = $this->request->phone;
        $data->note = $this->request->note;

        if($data->save()){
            return response()->json(['status'=>true, 'message'=>"Success oRDER",'data'=>['id' => $data->id]], 200);
        }else{
            return response()->json(['status'=>false, 'message'=>"Fail Order"], 200);
        }
    }

}
