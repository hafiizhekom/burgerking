<?php

namespace App\Http\Controllers;


use App\Models\ProductCategory;

class CategoryController extends Controller
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
        $data = ProductCategory::where('active','Y')->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function store(){
        $data = new ProductCategory;
        $data->code = $this->request->nama_tender;
        $data->name = $this->request->lokasi;

        if($data->save()){
            return response()->json(['status'=>true, 'message'=>"Success Add Category",'data'=>['id' => $data->id]], 200);
        }else{
            return response()->json(['status'=>false, 'message'=>"Fail Add Category"], 200);
        }
    }



}
