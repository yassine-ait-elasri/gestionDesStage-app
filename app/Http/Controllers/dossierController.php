<?php

namespace App\Http\Controllers;
use App\Models\dossier;
use App\Models\stagaire ;
use App\Models\encadrant ;
use App\Models\service ;
use App\Models\cd ;
use App\Models\cs ;
use Illuminate\Http\Request;
class dossierController extends Controller
{
    
    public function intier()
    {
      //  dd($hi);
        
        $attributes=request()->validate([
            'numero' => 'required|unique:dossiers,numero',
            'dateR' => 'required',
            'nom' => 'required',
            'prenom' =>'required'
        ]
        );
        $stg=stagaire::create(
            [
                'nom' => $attributes['nom'],
                'prenom' => $attributes['prenom'],
               
            ]
        );
        $user=dossier::create(
            [
                'numero' => $attributes['numero'],
                'date_reception' => $attributes['dateR'],
                'id_stagaire' => $stg['id']
            ]
        );
        
        $user->save();
       /// $hi=array('hi' => 'bienvenue '.$user->nom.$user->prenom , 'id'=>$user->id,'profile'=>$user->profile);
       //$request->session()->push('hi'); 
       return redirect('/BDO_interface')->with('profile','BDO');
    }


    public function edit_etat(Request $request)
    {
    $numero=$request->input('numero');  
    $etat=$request->input('etat');
    $theme=$request->input('theme');
    $dateF=$request->input('dateF');
    $dossier=dossier::where('numero',$numero);
    $myArr = array('etat'=>$etat,'theme' => $theme ,'date_fin'=>$dateF );
    $dossier->update($myArr);
    return redirect('/');


    }
    

    public function affecterCD(Request $request )
    {
       
        $encadrant=$request->input('encadrant');
        $stagaire=$request->input('stagaire');
        $dossier=dossier::where('id_stagaire',$stagaire);
        $dossier->update(['id_encadrants'=>$encadrant]);
        $stg=stagaire::where('id',$stagaire)->get();
        $en=encadrant::where('id',$encadrant)->get();
        $myArr=[];
        array_push($myArr,$stg);
        array_push($myArr,$en);
        return redirect('/CD_interface2')->with(['details'=>$myArr,'id_cd'=>request()->input('id')]);

    }

    public function affecter(Request $request )
    {
        $id_cs=$request->input('id_cs'); 
        
        $encadrant=$request->input('encadrant');
        $stagaire=$request->input('stagaire');
        $dossier=dossier::where('id_stagaire',$stagaire);
        $dossier->update(['id_encadrants'=>$encadrant]);
        $liste_cycle=dossierController::liste_cycle($id_cs) ;
        return redirect('/CS_interface_CYCLE')->with(['profile'=>'CS','hi'=>$liste_cycle,'id_cs'=>$id_cs]);

    }

    static public function liste_cycle($id_cs)
    {
        $cs=cs::where('id',$id_cs)->first();
        $encadrants=encadrant::where('service',$cs->service)->get();
        $dossier=dossier::where('OK_CD',null)->where('id_encadrants',null)->get();
       $stagaire=[];
       for($n=0;$n<count($dossier);$n++)
       {
        //dd();
        
        $stagr=stagaire::where('id',$dossier[$n]['id_stagaire'])->where('id_service',$cs->service)->get();
        //$stagaire=$stagaire>get();
        array_push($stagaire,$stagr);
       }
        
        
     //   dd($encadrants);
        $info=[0=>"bienvenue chef de service ",1=>$encadrants,2=>$stagaire,3=>$stagaire];
       return $info;
    }
    



    public function ok()
    {
        $ok=$request->input('ok');
        if($ok=='ok')
        {
            $dossier->update(['ok_CD'=>$ok]);
        }

    }

    static public function search_stg()
    {
       
        
            $ens=dossier::all();
            $Myarr=[];
            
            for($i=0;$i<count($ens);$i++)
            {  
                $id_encadrant=$ens[$i]['id_encadrants'];
                $id_stagaire=$ens[$i]['id_stagaire'];
               
                if($id_encadrant==null)
                {
                $stagaire=stagaire::where('id',$id_stagaire)->get();

                array_push($Myarr,$stagaire);
                
            }
            
            
        }
        return $Myarr;
    }



    static public function search_StgEmptyok()
    {
       
        
           // $ens=dossier::all();
           $ens=dossier::where('OK_CD',null)->get(); 
           $Myarr=[];
            
            for($i=0;$i<count($ens);$i++)
            {  
              //  $id_encadrant=$ens[$i]['id_encadrants'];
                $ok=$ens[$i]['OK_CD'];
                if($ok==null)
                {
                $id_stagaire=$ens[$i]['id_stagaire'];
                $stagaire=stagaire::where('id',$id_stagaire)->get();
                array_push($Myarr,$stagaire);
          }
    }
    return $Myarr;

}



static public function searchEmptyEncadrant(Request $request)
    {
           // dd(request()->input('id'));
            $id_stagaire=request()->input('id_stagaire');
            $stg=stagaire::where('id',$id_stagaire)->get();
            $dos=dossier::where('id_stagaire',$id_stagaire)->get();
           // dd($dos);
            $id_encadrant=$dos[0]['id_encadrants'];
            $en=encadrant::where('id',$id_encadrant)->get();
            //dd($id_encadrant);
            if(count($en)==0)
            {   $id_cd=request()->input('id');
                //dd($id_cd);
                $cd=cd::where('id',$id_cd)->first();
               
                $service=$cd['departement'];
                //dd($service);
                $departement=service::where('id_service',$service)->first()->departement;
                $services=service::where('departement',$departement)->get();
               // dd($services);
                $info = array('stg' => $stg );
                $encadrants=[];
                for($i=0;$i<count($services);$i++){
                    
                    $enc=encadrant::where('service',$services[$i]['id_service'])->get();
                    array_push($encadrants,$enc);
                }
                array_push($info,$encadrants);
                
                    array_push($info,request()->input('id'));
                
                    return redirect('/CD_interface3')->with(['profile'=>'CD','someDetails'=>$info]);}
            else{
                
                $myArr=[];
                 array_push($myArr,$stg);
                 array_push($myArr,$en);
                 array_push($myArr,request()->input('id'));
                 
                 return redirect('CD_interface2')->with(['profile'=>'CD','details'=>$myArr]);
               //  return redirect('/CD')->with('info',$Myarr);
                // return return redirect('CD_interface2')->with('details',);
                 // $en;

            }
            
    }





public function sendok(Request $request)
        {    
            $id_stagaire=request()->input('stagaire');
            $dos=dossier::where('id_stagaire',$id_stagaire);
            $dos->update(['OK_CD' => 'OK']);
            

            return redirect('/CD_interface_CYCLE')->with(['profile'=>"CD",'id_cd'=>request()->input('id')]);

        }

public function cgm()
{

        

}

    static public function pdf_stg()
        {
            $Les_stg=dossier::where('OK_CD','OK')->get();
            $data=[];
            for($i=0;$i<count($Les_stg);$i++)
            {
                $stg=stagaire::where('id',$Les_stg[$i]['id_stagaire'])->first();
            

                $Un_stg=[
                    'id'=>$Les_stg[$i]['id_stagaire'],
                    'date_reception'=>$Les_stg[$i]['date_reception'],
                    'date_fin'=>$Les_stg[$i]['date_fin'],
                    'nom'=>$stg['nom'],
                    'prenom'=>$stg['prenom'],
                    'etablissement'=>$stg['etablissement']
                ];
                array_push($data,$Un_stg);
            }
            return $data;
        }



}
