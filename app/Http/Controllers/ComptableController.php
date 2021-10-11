<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Models\Pointage;
use DB;

class ComptableController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        // $employes = DB::table('users')->where('role', 'employe')->get();
        $employes = Employe::all();
        return view('comptable.index', compact('employes'));
      }

      public function searchEmployeComptable(Request $request) {
        $q = $request->q;
        $employe = Employe::where('nom_prenoms','LIKE','%'.$q.'%')->get();
        if(count($employe) > 0)
            return view('comptable.index')->withDetails($employe)->withQuery ( $q );
        else return view ('comptable.index')->withMessage('Aucune correspondance trouvée !');
      }


      public function detailsEmployeComptable($matricule)
      {
        $pointages = Pointage::where('matricule',''.$matricule.'')->get();


        return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

      public function listeDemandesPaiementsComptable()
      {
        // $demandePaiements = DemandePaiement::all();
  
        $demandePaiements = DB::table('demande_paiements')
          ->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
          ->select('employes.nom_prenoms', 'demande_paiements.*')
          ->get();
          
          return view('comptable.listeDemandesPaiements', compact('demandePaiements'))->withStatus(__('Nouvelle demande de paiement ajoutée avec succès'));
      }

      public function validerDemandePaiement($id)
      {

        DB::table('demande_paiements')->where('id',$id)->update(['valide'=>'oui']);
        

        return back()->withStatus(__('Demande de paiement validée avec succès'));


        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

}
