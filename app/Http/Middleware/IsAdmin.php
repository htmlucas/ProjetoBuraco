<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    
    public function handle($request, Closure $next)
    {
        if($request->user()->tipo_usuario !== 'admin')
        {
            return redirect()->route('dashboard.index')->with('msg_error'.'Acesso negado!');
        }
        return $next($request);
    }
}
