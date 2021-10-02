<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Employe;
use App\Models\Pointage;
use DB;
use Log;

class SecretaireComptableController extends Controller
{
   
    public function __construct() {
        $this->middleware('auth'); 
      }
      public function index() {

        $employes = Employe::all();
        
        return view('secretaire_comptable.index', compact('employes'));
    
        // return view('secretaire_comptable.index');
      }

      public function searchEmployeSecretaireComptable() {
        $q = Request::get ( 'q' );
        $employe = Employe::where('nom_prenoms','LIKE','%'.$q.'%')->get();
        if(count($employe) > 0)
            return view('secretaire_comptable.index')->withDetails($employe)->withQuery ( $q );
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
              'employe_id' => ['required', 'string', 'max:255'],
                'matricule' => ['required', 'string', 'max:255'],
                'debutSeance' => ['required', 'string', 'max:255'],
                'debutPause' => ['required', 'string', 'max:255'],
                'finPause' => ['required', 'string', 'max:255'],
                'finSeance' => ['required', 'string', 'max:255'],
                'dateSeance' => ['required', 'string', 'max:255'],
            ]);

          $user = Pointage::create([
            'employe_id' => $request->employe_id,
              'matricule' => $request->matricule,
              'debutSeance' => $request->debutSeance,
              'debutPause' => $request->debutPause,
              'finPause' => $request->finPause,
              'finSeance' => $request->finSeance,
              'dateSeance' => $request->dateSeance,
          ]);

          return back()->withStatus(__('Nouvelle séance ajoutée avec succès'));
      }


      public function verifierSeances(Request $request)
    {

      
      $periodeExploded = explode(" ", $request->periode);
      $dateDebut = $periodeExploded[0];
      $dateFin = $periodeExploded[2];

      // echo "Date debut : ". $dateDebut . " Date fin : ". $dateFin . "<br>";
      // echo $request->matricule . "<br>";

      $pointages = Pointage::whereBetween('dateSeance',array(strtotime($dateDebut),strtotime($dateFin)))->where('matricule',$request->matricule )->get();

// FIXME ne calcule pas bien le nombre de seances quand on selectionne des petiodes differentes

      // $pointages = Pointage::where('dateSeance', '>=', strtotime($dateDebut))
      // ->where('dateSeance', '<=', strtotime($dateFin))    
      // ->where('matricule',$request->matricule)
      // ->get();

      $nbSeances = count($pointages);
      

      // echo "Nombre de seances : ". $nbSeances ."<br>";


      // $volumeHoraireTotal = 0;

      // foreach ($pointages as $pointage) {
      //   $volumeHoraireTotal = $volumeHoraireTotal + $pointage->volumeHoraire;
      //   echo "Volume horaire total = ". $volumeHoraireTotal . "<br>";
      //   $salaireTotal = $request->salaire_par_heure * $volumeHoraireTotal;
      //   echo "Salaire toytal à payer = ". $salaireTotal . "<br>";
      // }
      

      if(count($pointages) > 0) {

        $employes = DB::table('employes')->where('matricule', ''.$request->matricule.'')->get();
        return view('secretaire_comptable.nouvelleDemandePaiement', compact('employes'))->withDetails($pointages);

      } else {
        $employes = DB::table('employes')->where('matricule', ''.$request->matricule.'')->get();
        return view ('secretaire_comptable.nouvelleDemandePaiement', compact('employes'))->withMessage('Aucune correspondance trouvée !')->withStatus(__('Aucune séance enregistrée durant cette période'));;
      }
     
     
    }

}
