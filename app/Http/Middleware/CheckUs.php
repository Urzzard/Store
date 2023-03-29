<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->tipo == 2){
            return redirect('cliente-home');
        } elseif(auth()->user()->tipo == 1){
            return redirect('admin-home');
        } elseif(auth()->user()->tipo == 3){
            return redirect('trabajador-home');
        }
    }
}
