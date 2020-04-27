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
            if($user->esRol()=='administrador')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='postulante')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='secretaria')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='jefe de departamento')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='comision merito')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='comision conocimiento')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            if($user->esRol()=='director de carrera')
            {
                //return redirect()->intended('noregister');
                return $next($request);
            }
            else {
                
                return redirect()->intended("login");
            }
            
            //return view("calls.noregister");
        }
        else 
        {
            Redirect::to("login")->withSuccess('nel mijo no pasaste el check');
        }
    }
}
