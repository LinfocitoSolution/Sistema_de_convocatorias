<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class esRol
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
        //return $next($request);
        if(Auth::check())
        {
            $user=Auth::user();
            if(!$user->esRol())
            {
                //return redirect()->intended('noregister');
               return redirect()->intended("login");
            }
            else {
                return $next($request);
            }
            
            //return view("calls.noregister");
        }
        else 
        {
            Redirect::to("login")->withSuccess('nel mijo no pasaste el check');
        }
    }
}
