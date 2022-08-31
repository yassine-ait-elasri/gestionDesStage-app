<?php

namespace App\Http\Controllers;
use App\Models\encadrant; 
use Illuminate\Http\Request;

class encadrantController extends Controller
{
    static public function find($service)
    {
        $encadrant=encadrant::where('service',$service)->get();
        //$encadrant=encadrant::all();
        $myArr=[];
        for($i=0;$i<count($encadrant);$i++){
            $id=$encadrant[$i]->id;
            $nom=$encadrant[$i]->nom;
            $prenom=$encadrant[$i]->prenom;
            $service=$encadrant[$i]->service;
            $secArry=['id'=>$id,'nom'=>$nom,'prenom' => $prenom ,'service'=>$service];
            array_push($myArr,$secArry);
            
           // $nom=$nom+$encadrant[$i];
       
    }
    return $myArr;
   // dd($myArr);
    }
    static public function infra()
    {//'ERS','BPS','DP'
        $en=[];
       $en1=encadrantController::find('ERS');
       array_push($en,$en1);
       $en2=encadrantController::find('BPS');
       array_push($en,$en2);
       $en3=encadrantController::find('DP');
       array_push($en,$en3);
      // dd($en);
       return $en;
      // dd($en);
    }
    static public function info()
    {
        //'DO','DI','QNV'
        $en=[];
        $en1=encadrantController::find('DO');
        array_push($en,$en1);
        $en2=encadrantController::find('DI');
        array_push($en,$en2);
        $en3=encadrantController::find('QNV');
        array_push($en,$en3);
        //dd($en);
        return $en;
      // dd($en);
    }
}
