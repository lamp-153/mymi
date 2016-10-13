<?php

namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
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
        //检查adminuser里面是否有值 
        if(empty(session()->get('adminuser'))){
            return redirect("admin/login");
        }
        return $next($request);
    }
}
