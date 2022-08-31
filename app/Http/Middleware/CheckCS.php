<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Exception;

class CheckCS
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
        
        if(session('profile')=='CS')
        {              
            //session()->put(0,[0=>"Bienvenue dans la cellule de gestion des moyens "]);
            //session('hi')[0]->put(0,' Bienvenue dans la cellule de gestion des moyens');
           // session('hi')[0]=' Bienvenue dans la cellule de gestion des moyens';
          
        //   dd(session('id_cgm'));
       // dd(session());
            return $next($request);

        }
       if(session('hi')!=null){
        if(array_key_exists(0,session('hi'))){
            if(array_key_exists('profile',session('hi')[0])){
                        $sesion=session('hi')[0];
                    // dd($sesion);
                        $hi=$sesion['profile'];
                        
                        if($hi=="CS"){
                        return $next($request);
                    }
                        else{
                            return redirect()->route('login');
        }}}}
        else{
            return redirect()->route('login');

        }
        

        
    }
}
