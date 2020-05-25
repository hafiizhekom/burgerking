<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class CategoryController extends Controller
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
        $data = ProductCategory::where('active','Y')->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function store(){
        $data = new ProductCategory;
        $data->code = $this->request->code;
        $data->name = $this->request->name;

        if($data->save()){
            return response()->json(['status'=>true, 'message'=>"Success Add Category",'data'=>['id' => $data->id]], 200);
        }else{
            return response()->json(['status'=>false, 'message'=>"Fail Add Category"], 200);
        }
    }

    public function change(){
        $category = ProductCategory::find($this->request->id);

        if($category){

            $category->name = $this->request->name;

            if($category->save()){
                return response()->json(['status'=>true, 'message'=>"Success Update"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function delete(){
        $category = ProductCategory::find($this->request->id);

        if($category){

            $category->active = 'N';
            if($category->save()){
                return response()->json(['status'=>true, 'message'=>"Success Delete"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Delete"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }



}
