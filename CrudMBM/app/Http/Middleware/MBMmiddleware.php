<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MBMmiddleware
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
            

        if($request->session()->has('username'))
             return $next($request);
       else{
                session()->flash('msg','At First ,You should do Login to Access this file!');
                return redirect()->route('login');
           }
   }
}