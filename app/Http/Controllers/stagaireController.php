<?php

namespace App\Http\Controllers;
use App\Models\stagaire;
use Illuminate\Http\Request;
use App\Http\Controllers\dossierController;
use App\Models\dossier;
class stagaireController extends Controller
{
    //
    static public function identifiants()
    {
      $id_cgm=request()->input('id_cgm');
        
      // $id_cgm=request()->input('id_stagaire');
     // return 'hi';
        $attributes=request()->validate([
            'id_stagaire' => 'required',
            'id_service'=>'required',
            'CIN' => 'required',
            'addresse' => 'required',
            'date_prevue_du_stage'=> 'required',
            'specialite'=>'required',
            'niveau'=>'required',
            'gmail' => 'required',
            'tel' => 'required',
            'etablissement' => 'required',
        ]
        );
        //$stagaire=stagaire::create($attributes);
        $stagaire=stagaire::where('id',$attributes['id_stagaire']);
        $dossier=dossier::where('id_stagaire',$attributes['id_stagaire']);
      
        $data=array('niveau'=>$attributes['niveau'],'specialite'=>$attributes['specialite'],'date_prevue_du_stage'=>$attributes['date_prevue_du_stage'],'id_service'=>$attributes['id_service' ],'CIN' => $attributes['CIN'] , 'addresse' => $attributes['addresse'], 'gmail' => $attributes['gmail'],'tel' => $attributes['tel'],'etablissement' => $attributes['etablissement']);
        $newdata= array('id_stagaire' => $attributes['id_stagaire'] , 'id_responsables' => $id_cgm);
        
        //$dossier->update(['id_stagaire'=>$stagaire['id']]);
       //  $dossier->save();
     //    $dossier->update(['id_responsables'=>$id_cgm]);
   //      $dossier->save();
        $stagaire->update($data);
        
        $dossier->update($newdata);
       
        $info=stagaireController::whereIsNull_CYCLE();
       

        return redirect('/CGM_interface_CYCLE')->with(['profile'=>'CGM','id_cgm'=>$id_cgm,'info'=>$info]);
    }


static public function whereIsNull()
{
  $stg=stagaire::where('CIN',null)->get();
  $info=array(session('hi'),$stg);
 // dd(session('hi'));
  return redirect('/CGM_interface')->with('hi',$info);
}

static public function whereIsNull_CYCLE()
{
  $stg=stagaire::where('CIN',null)->get();
  $info=array(session('hi'),$stg);
 // dd(session('hi'));
  return $info;
}

}
