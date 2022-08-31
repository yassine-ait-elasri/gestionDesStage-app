<?php

namespace App\Http\Middleware;
use App\Models\tableip;
use Closure;
use Illuminate\Http\Request;

class CheckDos
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
        $count=0;
        $ip0=tableip::where('ip',request()->ip());
        $ip=$ip0->get();
        if($ip==null)
        {
            tableip::create(['ip'=>request()->ip(),'num'=>0]);

        }
        else{
           // dd($ip[0]);
            $num=$ip[0]['num'];
            $ip0->update(['num'=>$num+1]);
        }
        $ip=$ip0->get();
        $count=$num=$ip[0]['num'];
        if($count>10)
        {
            $ip0=tableip::where('ip',request()->ip());
            $ip0->update(['num'=>0]);
            sleep(60);
            abort(404);
;
        }
        else{
            return $next($request); 

        }
          
            /*array_push($this::$get,['ip'=> request()->ip()]);
            $v=0;
            for($i=0;$i+1<count($this::$get);$i++)
            {
                //dd(count($this::$get));
                 if($this::$get[$i]['ip']==request()->ip()){$v=$v+1 ;}
            }
            if($v>2){
             
             aborde(404);
            }
            else{
           
             return $next($request);
            }*/
        
            }
}
