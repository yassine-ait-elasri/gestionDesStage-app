<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCD
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
        if(session('profile')=='CD')
        {       
            return $next($request);}

        if(session('hi')!=null){
            
            if(array_key_exists('profile',session('hi'))){
                        $sesion=session('hi');
                    // dd($sesion);
                        $hi=$sesion['profile'];
                        
                        if($hi=="CD"){
                        return $next($request);
                    }
                        else{
                            return redirect()->route('login');
        }}}
        else{
            return redirect()->route('login');

        }

        /*$sesion=session('hi');
        $hi=$sesion['profile'];
        if($hi=="CD"){
        return $next($request);}
        else{
            return route('login');
        }*/
    }
}
