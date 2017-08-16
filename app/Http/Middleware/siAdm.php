<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class siAdm
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
         // Permisos:
        if($request->path()=='order-detail') return $next($request);
        
        if($request->user()->type != 'admin'){
            $message = 'Permiso denegado: solo administradores son permitidos para entrar a esta sección';
            return redirect('/')->with('message', $message);
        }

        return $next($request);


    }
}
