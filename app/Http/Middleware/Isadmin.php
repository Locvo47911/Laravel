<?php

namespace App\Http\Middleware;

use Closure;

class Isadmin
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
        if(\Auth::check() && \Auth::user()->role_id == 1) {
            //Ktra xem da login hay chua, doc request xem co user nao dang login neu dung se tra ve true neu sai thi tra ve false
            //&& \Auth::user()->role_id == 1 lay user dang login tra ve thong tin user de so sanh voi 1 hoac 0 xem laf admin hay user 
        return $next($request);
        }
        return redirect()->back();
    }
}
         
