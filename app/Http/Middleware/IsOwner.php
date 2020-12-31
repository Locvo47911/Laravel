<?php

namespace App\Http\Middleware;

use Closure;

class IsOwner
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
        $userID = $request->id;
        if(\Auth::check() && \Auth::user()->id == $userID) {
             return $next($request);
        }
        return redirect()->back();
    }
}
