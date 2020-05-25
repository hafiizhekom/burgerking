<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
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
        $data = Article::where('active','Y')->limit(6)->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/article/'.$value->image);
            $value->description = substr($value->content, 0, 100);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function showAll(){
        $data = Article::where('active','Y')->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/article/'.$value->image);
            $value->description = substr($value->content, 0, 100);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function showByCode(){
        $data = Article::where('active','Y')->get();
        foreach ($data as $key => $value) {
            $value->image = url('/upload/article/'.$value->image);
            $value->description = substr($value->content, 0, 100);
        }
        if($data){
            return response()->json(['status'=>true, 'data'=>$data]);
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function store(){

        $data = new Article;
        $data->code = $this->request->code;
        $data->title = $this->request->title;
        $article->content = str_replace("'","", $this->request->content);
        $article->content = str_replace("\"","", $article->content);


        if ($this->request->file('image')->isValid()) {
            $file = $this->request->file('image');
            $extension = $this->request->file('image')->extension();
            $this->request->file('image')->move('upload/article', $this->request->code.".".$extension);

            $data->image = $this->request->code.".".$extension;

            if($data->save()){
                return response()->json(['status'=>true, 'message'=>"Success Add Article",'data'=>['id' => $data->id]], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Add Article"], 200);
            }
        }
    }

    public function change(){
        $article = Article::find($this->request->id);

        if($article){
            if ($this->request->hasFile('image')) {
                if ($this->request->file('image')->isValid()) {
                    $file = $this->request->file('image');
                    $extension = $this->request->file('image')->extension();
                    $this->request->file('image')->move('upload/article', $article->code.".".$extension);
                    $article->image =  $article->code.".".$extension;
                }
            }
            $article->title = $this->request->title;
            $article->content = str_replace("'","", $this->request->content);
            $article->content = str_replace("\"", "", $article->content);

            if($article->save()){
                return response()->json(['status'=>true, 'message'=>"Success Update"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Update"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }

    public function delete(){
        $article = Article::find($this->request->id);

        if($article){

            $article->active = 'N';
            if($article->save()){
                return response()->json(['status'=>true, 'message'=>"Success Delete"], 200);
            }else{
                return response()->json(['status'=>false, 'message'=>"Fail Delete"], 200);
            }
        }else{
            return response()->json(['status'=>false, 'message'=>"Can not find data"], 200);
        }
    }
}
