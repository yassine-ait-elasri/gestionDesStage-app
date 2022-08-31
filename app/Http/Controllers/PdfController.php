<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\user;
use App\Models\stagaire;
use App\Http\Controllers\dossierController;
class PdfController extends Controller
{
	protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new FPDF('L','mm','Letter');
    }

    public function index(Request $request) 
    {
        $stgs=dossierController::pdf_stg();
        $id_stg=$request->input('id_stg');
        //dd($id_stg);
        $my_stg=[];
        for($j=0;$j<count($stgs);$j++)
        {
            if($id_stg==$stgs[$j]['id'])
            {
                
                $my_stg=$stgs[$j];
            }
        }
       // dd($my_stg);
        $id=$request->input('id_cgm');
        $id=$request->input('id_cgm');
        $cgm=user::where('id',$id)->get();
        $stg=stagaire::where('id',$id_stg)->get();
       // dd($id_stg);
        //dd($cgm[0]['nom']);
        $nom=$cgm[0]['nom'];
        $prenom=$cgm[0]['prenom'];
        $msgL0="ATTESTATION DU STAGE";
        $msgL1="Je soussigne(e) Monsieur/Madame ".$nom." ".$prenom." agissant en qualite de cellule de gestion des moyens , certifie";
    	$msgL2="par la presente que Monsieur/Madame ".$my_stg['nom']." ".$my_stg['prenom']." demeurant au ".$my_stg['etablissement']."a effectue un stage au sein de notre entreprise HCP";
        $msgL3="du ".$my_stg['date_reception']." au ".$my_stg['date_fin']." .";
        $msgL4="Cette attestation est delivree a l interesse(e) pour servir et valoir ce que de droit. ";
        $msgL5="Fait le :  ";
        $msgL6="Signature :";
        $msgL7="Cachet de l entreprise  :";
        $this->fpdf->AddPage("L", 'Letter');
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(90,10,"");
        $this->fpdf->Cell(72,10,$msgL0,'B');
        $this->fpdf->ln(0);
        $this->fpdf->SetFont('Times', '', 12);
        $this->fpdf->Cell(250,90,$msgL1);
        $this->fpdf->ln(5);
        $this->fpdf->Cell(0,100,$msgL2);
        $this->fpdf->ln(5);
        $this->fpdf->Cell(0,110,$msgL3);
        $this->fpdf->ln(15);
        $this->fpdf->Cell(0,120,$msgL4);
        $this->fpdf->ln(15);
        $this->fpdf->Cell(10,120,$msgL5);
        $this->fpdf->ln(15);
        $this->fpdf->Cell(10,120,$msgL6);
        $this->fpdf->ln(10);
        $this->fpdf->Cell(145,120,"");        
        $this->fpdf->Cell(45,120,$msgL7);
        $this->fpdf->Output();

        exit;
    }
}

