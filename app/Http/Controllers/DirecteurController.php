<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Employe;
class DirecteurController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {

         $employes = Employe::all();
        return view('directeur.index', compact('employes'));
      }

      public function listeDemandesPaiementsDirecteur()
      {
        // $demandePaiements = DemandePaiement::all();
  
        $demandePaiements = DB::table('demande_paiements')
          ->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
          ->select('employes.nom_prenoms', 'demande_paiements.*')
          ->get();
          
          return view('directeur.listeDemandesPaiements', compact('demandePaiements'));
      }

      public function payerDemandePaiement($id)
      {

        DB::table('demande_paiements')->where('id',$id)->update(['paye'=>'oui']);
        

        return back()->withStatus(__('Demande de paiement payée avec succès'));


        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }
      public function rejeterDemandePaiement($id)
      {

        DB::table('demande_paiements')->where('id',$id)->update(['valide'=>'oui']);
        

        return back()->withStatus(__('Demande de paiement validée avec succès'));


        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }
}
