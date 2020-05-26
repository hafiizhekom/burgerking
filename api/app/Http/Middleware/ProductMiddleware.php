<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class ProductMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $validator = Validator::make($request->all(), [
            'code' => 'required|string|unique:products|max:10',
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'price'=>'required|integer',
            'image'=>'required|image',
            'category'=>'required|integer'
        ]);

        if ($validator->fails()) {
            return response(['status'=>false, 'message'=>$validator->errors()->all()], 400);
        }

        return $next($request);
    }
}
