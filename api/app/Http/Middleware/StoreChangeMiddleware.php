<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class StoreChangeMiddleware
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
            'id' => 'required|integer',
            'name' => 'required|string|max:50',
            'address' => 'required|string|max:100',
            'phone'=>'required|string|max:15',
            'longitude'=>'required|string',
            'latitude'=>'required|string'
        ]);

        if ($validator->fails()) {
            return response(['status'=>false, 'message'=>$validator->errors()->all()], 400);
        }

        return $next($request);
    }
}
