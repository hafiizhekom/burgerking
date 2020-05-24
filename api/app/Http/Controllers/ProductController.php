<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
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
        $data = Product::where('active','Y')->limit(6)->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
    }

    public function showAll(){
        $data = Product::where('active','Y')->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function showByCode($code){

        $data = Product::where('code',$code)->get();
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function showByCategory($code){
        $dataCategory = ProductCategory::where('code',$code)->first();
        $data = Product::where('category', $dataCategory['id'])->get();

        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }
        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function search($code){
        $lowest_price = $this->request->lowestprice;
        $highest_price = $this->request->highestprice;
        $keyword = $this->request->keyword;
        $sort= $this->request->sort;
        $sortfilter = explode("-", $sort);
        if($code!="all"){
            $dataCategory = ProductCategory::where('code',$code)->first();
            $data = Product::where('category', $dataCategory['id']);

        }else{
            $data = Product::where('id','>', '0' );
        }

        if($lowest_price != "" && $highest_price != ""){
            $data = $data->whereBetween('price', [$lowest_price, $highest_price]);
        }

        if($keyword){
            $data = $data->where('name', 'like', '%'.$keyword.'%');
        }

        if($sort){
            $data = $data->orderBy($sortfilter[0], $sortfilter[1]);
        }

        $data = $data->get();



        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }
        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }



}
