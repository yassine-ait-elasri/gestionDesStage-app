<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCGM
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
        if(session('profile')=='CGM')
        {              
            //session()->put(0,[0=>"Bienvenue dans la cellule de gestion des moyens "]);
            //session('hi')[0]->put(0,' Bienvenue dans la cellule de gestion des moyens');
           // session('hi')[0]=' Bienvenue dans la cellule de gestion des moyens';
          
        //   dd(session('id_cgm'));
       // dd(session());
            return $next($request);

        }
       // dd(session('hi')[0]['profile']);
        if(session('hi')!= null ){
            if(array_key_exists(0,session('hi'))){
            if(array_key_exists('profile',session('hi')[0])){
                        $sesion=session('hi')[0];
                    // dd($sesion);
                        $hi=$sesion['profile'];
                        
                        if($hi=="CGM"){
                        //dd($next($request));
                        return $next($request);
                    }
                        else{
                            return redirect()->route('login');
        }}}}
        else{
            return redirect()->route('login');

        }
        
        /*
        if(session('hi')!=null){
            
            if(array_key_exists('profile',session('hi'))){
                        $sesion=session('hi');
                    // dd($sesion);
                        $hi=$sesion['profile'];
                        
                        if($hi=="CGM"){
                           // dd(session('hi')['profile']);
                        return $next($request);
                    }
                        else{
                            return redirect()->route('login');
        }}}
        else{
            return redirect()->route('login');

        }
        */
       
        
        /*$sesion=session('hi');
        $hi=$sesion['profile'];
        if($hi=="CGM"){
        return $next($request);}
        else{
            return route('login');
        }
    */
    }
}
