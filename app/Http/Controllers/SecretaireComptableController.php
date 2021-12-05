<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employe;
use App\Models\Pointage;
use App\Models\DemandePaiement;
use DB;
use Log;
use Alert;

class SecretaireComptableController extends Controller
{
   
    public function __construct() {
        $this->middleware('auth'); 
      }
      public function index() {

        $employes = Employe::all();

        // $employes = DB::table('pointages')
        // ->join('employes', 'employes.matricule', '=', 'pointages.matricule')
        // ->select('employes.*', 'pointages.volumeHoraire')
        // ->where('pointages.payee', 'non')
        // ->get();

      
        return view('secretaire_comptable.index', compact('employes'));

      }

      public function searchEmployeSecretaireComptable(Request $request) {
        
        $employe = Employe::where('nom_prenoms','LIKE','%'.$request->q.'%')->get();
        if(count($employe) > 0)
            return view('secretaire_comptable.index')->withDetails($employe)->withQuery ( $request->q );
        else return view ('secretaire_comptable.index')->withMessage('Aucune correspondance trouvée !');
      }

      public function nouvelleDemandePaiement($matricule)
      {
        // $matricule = Request::get ( 'matricule' );
        $employes = DB::table('employes')->where('matricule', ''.$matricule.'')->get();

        // if(count($employe) > 0)
 
        return view('secretaire_comptable.nouvelleDemandePaiement', compact('employes'));
        // else 
        // return view('secretaire_comptable.nouvelleDemandePaiement', compact('employes'));

      }

      public function enregistrerDemandePaiement(Request $request)
      {
            $request->validate([
                'matricule' => ['required', 'string', 'max:255'],
                'periode' => ['required', 'string', 'max:255'],
                'nbSeances' => ['required', 'string', 'max:255'],
                // 'listSeances' => ['required', 'string', 'max:255'],
                'volumeHoraireTotal' => ['required', 'string', 'max:255'],
                'coutTotal' => ['required', 'string', 'max:255'],
            ]);

            $periodeExploded = explode(" ", $request->periode);
    
            $dateDebut = $periodeExploded[0];
            $dateFin = $periodeExploded[2];

          $user = DemandePaiement::create([
            'matricule' => $request->matricule,
              'dateDebut' => $dateDebut,
              'dateFin' => $dateFin,
              'nbSeances' => $request->nbSeances,
              // 'listeSeances' => $request->listeSeances,
              'volumeHoraireTotal' => $request->volumeHoraireTotal,
              'coutTotal' => $request->coutTotal,
              'valide' => 'non',
              'rejete' => 'non',
              'paye' => 'non',

          ]);

         


          DB::table('pointages')->whereBetween('dateSeance',array($dateDebut,$dateFin))->where('matricule', ''.$request->matricule.'')->update(['payee'=>'oui']);



      $demandePaiements = DB::table('demande_paiements')
      ->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
      ->select('employes.nom_prenoms', 'demande_paiements.*')
      ->get();
      
      return view('secretaire_comptable.listeDemandesPaiements', compact('demandePaiements'))->with('toast_success', 'Nouvelle demande de paiement ajoutée avec succès ');
  

        }


      public function verifierSeances(Request $request)
    {

      if (isset( $request->periode )) {
      
      $periodeExploded = explode(" ", $request->periode);
    
      $dateDebut = $periodeExploded[0];
      $dateFin = $periodeExploded[2];

      // echo "Date debut ". strtotime($dateDebut)."<br>"; 
      // echo "Date fin ".strtotime($dateFin);

    

      $pointages = Pointage::whereBetween('dateSeance',array($dateDebut,$dateFin))->where('matricule',$request->matricule )->where('payee','non' )->get();

// FIXME ne calcule pas bien le nombre de seances quand on selectionne des periodes differentes

      $nbSeances = count($pointages);
      // echo "Nb Seances ".$nbSeances."<br>";

      if(count($pointages) > 0) {

        $employes = DB::table('employes')->where('matricule', ''.$request->matricule.'')->get();
        $periode = $request->periode ;

        return view('secretaire_comptable.nouvelleDemandePaiement', compact('employes'))->withDetails($pointages)->withPeriodes($periode);

      } else {
        $employes = DB::table('employes')->where('matricule', ''.$request->matricule.'')->get();
        return view ('secretaire_comptable.nouvelleDemandePaiement', compact('employes'))->withMessage('Aucune correspondance trouvée !')->withErrors(__('Aucune séance non payée durant cette période'));;
      }
     
        
      } else {
        $employes = DB::table('employes')->get();
        return view('secretaire_comptable.index', compact('employes'));
        
      }
      
     
    }

    public function listeDemandesPaiements()
    {
      // $demandePaiements = DemandePaiement::all();

      $demandePaiements = DB::table('demande_paiements')
        ->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
        ->select('employes.nom_prenoms', 'demande_paiements.*')
        ->get();
        
        return view('secretaire_comptable.listeDemandesPaiements', compact('demandePaiements'))->with('toast_success', 'Nouvelle demande de paiement ajoutée avec succès ');
    }

}
