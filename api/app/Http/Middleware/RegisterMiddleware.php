<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class RegisterMiddleware
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
            'name' => 'required|string|max:50',
            'email'=>'required|email|unique:users|max:50',
            'phone'=>'required|string|max:15',
            'birthday'=>'required|string',
            'password' => [
                'required',
                'string',
                // 'min:10',             // must be at least 10 characters in length
                // 'regex:/[a-z]/',      // must contain at least one lowercase letter
                // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                // 'regex:/[0-9]/',      // must contain at least one digit
                // 'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'repassword' => 'required|same:password',
            // 'id_jenis_kelamin'=>'required|integer',
            // 'tanggal_lahir'=>'required|date_format:Y-m-d|before:today',
            // 'no_handphone'=>'required|string|regex:/[0-9]/|max:15',
            // 'alamat'=>'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response(['status'=>false, 'message'=>$validator->errors()->all()], 400);
        }

        return $next($request);
    }
}
