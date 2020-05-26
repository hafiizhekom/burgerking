<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class OrderMiddleware
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
            'type'=>'required|string|max:10',
            'location'=>'string|max:10',
            'address' => 'string|max:100',
            'phone' => 'string|max:15',
            'note' => 'string'
        ]);

        if ($validator->fails()) {
            return response(['status'=>false, 'message'=>$validator->errors()->all()], 400);
        }

        return $next($request);
    }
}
