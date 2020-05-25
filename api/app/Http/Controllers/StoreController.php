<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
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
        $data = Store::where('active','Y')->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/article/'.$value->image);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function store(){

        $data = new Store;
        $data->code = $this->request->code;
        $data->name = $this->request->name;
        $data->address = $this->request->address;
        $data->phone = $this->request->phone;
        $data->latitude = $this->request->latitude;
        $data->longitude = $this->request->longitude;

        if($data->save()){
            return response()->json(['status'=>true, 'message'=>"Success Add Store",'data'=>['id' => $data->id]], 200);
        }else{
            return response()->json(['status'=>false, 'message'=>"Fail Add Store"], 200);
        }
    }

    public function change(){
        $store = Store::find($this->request->id);

        if($store){

            $store->name = $this->request->name;
            $store->address = $this->request->address;
            $store->phone = $this->request->phone;
            $store->latitude = $this->request->latitude;
            $store->longitude = $this->request->longitude;

            if($store->save()){
                return response()->json(['status'=>true, 'message'=>"Success Update"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function delete(){
        $store = Store::find($this->request->id);

        if($store){

            $store->active = 'N';
            if($store->save()){
                return response()->json(['status'=>true, 'message'=>"Success Delete"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Delete"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }
}
