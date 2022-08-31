<?php

namespace App\Http\Controllers;
use App\Models\cs;
use App\Models\service;
use App\Models\encadrant; 
use App\Models\stagaire;
use App\Models\dossier; 
use Illuminate\Http\Request;
use App\Http\Controllers\encadrantController as  EC;
class csController extends Controller
{
    //var $infra=['ERS','BPS','DP'];
  //  var $info=['DO','DI','QNV'];
    public function liste(Request $request){
        
        $email=$request->input('email');
        
        $array=session("hi");
        //dd($array['id']);
        $cs=cs::where('id',$array['id'])->first();
       // dd($cs);
        $encadrants=encadrant::where('service',$cs->service)->get();
        $dossier=dossier::where('OK_CD',null)->get();
       $stagaire=[];
       for($n=0;$n<count($dossier);$n++)
       {
        //dd();
        
        $stagr=stagaire::where('id',$dossier[$n]['id_stagaire'])->where('id_service',$cs->service)->get();
        //$stagaire=$stagaire>get();
        array_push($stagaire,$stagr);
       }
        
        
     //   dd($encadrants);
        $info=[0=>session('hi'),1=>$encadrants,2=>$stagaire,3=>$stagaire];
        return redirect('/ChefS_interface')->with('hi',$info);}
        //  dd($encadrants);        

       /* if($cs=='infra')
        {
            $es=EC::infra();
            */
           /// dd($e);
        //    dd($e);
           //dd($e);
           /*
           $encadrant1=encadrant::where('service','ERS');
            dd($encadrant1);
            $encadrant2=encadrant::where('service','BPS');
            $encadrant3=encadrant::where('service','DP');
            $all=[$encadrant1,$encadrant2,$encadrant3];
           */
         // return Ruote::view('/CS_interface',$es);
      //  dd($es);
            //return view('CS_interface',$es);
         //      return redirect('/ChefS_interface')->with('ens',$es);
      /*   return view('/ChefS_interface',['es'=>$es]);
        }
        if ($cs=='info') {
            $es=EC::info();*:/
            
            /* 
            $encadrant1=encadrant::where(['service','DO']);
            $encadrant2=encadrant::where(['service','DI']);
            $encadrant3=encadrant::where(['service','QNV']);
            $all=[$encadrant1,$encadrant2,$encadrant3];
            return $all;
                        Route::get('/CS_interface',
            function(){
                return view('CS_interface',$es);
            } );*/
       //     return view('/CS_interface',$es);
      // return view('/ChefS_interface',['es'=>$es]);
        }
        
    



    

/*

    <!--@if (//session('hi'))
    <div class="alert alert-success">
        {{ //session('hi') }}
    </div>
    @endif 
            @foreach ($es as $e )
            <p>{{$e}}<p>;
        @endforeach

*/