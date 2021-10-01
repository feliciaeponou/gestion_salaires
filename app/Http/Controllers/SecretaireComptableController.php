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


      public function ajaxRequestPost(Request $request)
    {


      $pointages = Pointage::whereBetween('dateSeance',$request->date_debut,$request->date_fin)->where('matricule',$request->matricule )->get();

      $nbSeances = count($pointages);
      // $volumeHoraireTotal =
      

      // if(count($pointages) > 0)
      //       return view('secretaire_comptable.nouvelleDemandePaiement')->withDetails($pointages);
      //   else return view ('secretaire_comptable.nouvelleDemandePaiement')->withMessage('Aucune correspondance trouvée !');
     
    }
}
