<?php

namespace App\Http\Middleware;

use Closure;
use \Auth;
use Illuminate\Support\Facades\Gate;
class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)    
    {
        if( Auth::check() && Auth::user()->hasPermission($permission) ){
            return $next($request);
        }
        else{
            return redirect()->route('denied');                       
        }        
    }
}
    