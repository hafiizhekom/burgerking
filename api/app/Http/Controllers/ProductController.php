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
        foreach ($data as $key => $value) {
            $value->image = url('/upload/product/'.$value->image);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
    }

    public function showAll(){
        $data = Product::where('active','Y')->with('productcategory:id,name,code')->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/product/'.$value->image);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function showByCode($code){

        $data = Product::where('code',$code)->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/product/'.$value->image);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }

        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function showByCategory($code){
        $dataCategory = ProductCategory::where('code',$code)->first();
        $data = Product::where('category', $dataCategory['id'])->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/product/'.$value->image);
        }
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
            $data = Product::where('category', $dataCategory['id'])->where('active','Y');

        }else{
            $data = Product::where('active','Y');
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

        foreach ($data as $key => $value) {
            $value->image = url('/upload/product/'.$value->image);
        }


        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }
        return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);

    }

    public function store(){

        $data = new Product;
        $data->code = $this->request->code;
        $data->name = $this->request->name;
        $data->description = $this->request->description;
        $data->price = $this->request->price;
        $data->category = $this->request->category;


        if ($this->request->file('image')->isValid()) {
            $file = $this->request->file('image');
            $extension = $this->request->file('image')->extension();
            $this->request->file('image')->move('upload/product', $this->request->code.".".$extension);

            $data->image = $this->request->code.".".$extension;

            if($data->save()){
                return response()->json(['status'=>true, 'message'=>"Success Add Product",'data'=>['id' => $data->id]], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Add Product"], 200);
            }
        }
    }

    public function change(){
        $product = Product::find($this->request->id);

        if($product){
            if ($this->request->hasFile('image')) {
                if ($this->request->file('image')->isValid()) {
                    $file = $this->request->file('image');
                    $extension = $this->request->file('image')->extension();
                    $this->request->file('image')->move('upload/product', $product->code.".".$extension);
                    $product->image = $product->code.".".$extension;
                }
            }
            $product->name = $this->request->name;
            $product->description = $this->request->description;
            $product->price = $this->request->price;
            $product->category = $this->request->category;

            if($product->save()){
                return response()->json(['status'=>true, 'message'=>"Success Update"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function delete(){
        $product = Product::find($this->request->id);

        if($product){

            $product->active = 'N';
            if($product->save()){
                return response()->json(['status'=>true, 'message'=>"Success Delete"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Delete"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }



}
