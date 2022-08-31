<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\encadrant;
use App\Models\stagaire; 
use Illuminate\Http\Request;
use App\Http\Controllers\encadrantController as  EC;
use App\Http\Controllers\dossierController as  DC;

class cdController extends Controller
{
    //var $infra=['ERS','BPS','DP'];
  //  var $info=['DO','DI','QNV'];
    public function liste(Request $request){
        
        $ens=dossier::all();
        for($i=0;$i<count($ens);$i++)
        {   $Myarr=[];
            $id_encadrant=$ens[$i]['id_encadrants'];
            $id_stagaire=$ens[$i]['id_stagaire'];
            $stagaire=stagaire::where('id',$id_stagaire)->get();
            $encadrant=encadrant::where('id',$id_encadrant)->get();
            array_push($Myarr,$stagaire);
            array_push($Myarr,$encadrant);
           // dd($Myarr);
            return redirect('/CD_interface2')->with('info',$Myarr);
        }


       
       
        /* $email=$request->input('email');
        $array=session("hi");
        
            $ens=encadrant::all();
            for($i=0;$i<count($ens);$i++)
            { 
                $en=$ens[$i]['id'];
                
                $dossier=dossier::where('id_encadrants',$en);/////:::get id for encadrant then get naim get id stagaire get name
                if($dossier->id_encadrants!=null){
                dd($dossier);
                for($j=0;$j<count($dossier);$j++)
                {
                }}*/



            }
            

    
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
