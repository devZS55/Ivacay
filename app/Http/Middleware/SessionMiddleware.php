<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check())
        {
            if(auth()->user()->user_role !== 2)
            {
                return back();
            }
            
        }else{
            return redirect(route('admin_login'));
        }


        // if(!Auth::user()){

        //     return redirect(route('login_page'));
        // }
        return $next($request);
    }
}
