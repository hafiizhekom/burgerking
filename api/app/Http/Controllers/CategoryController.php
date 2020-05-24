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
}
