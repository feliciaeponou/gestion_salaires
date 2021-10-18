<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Models\Pointage;
use DB;
use PDF;
use Alert;

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
          
          return view('comptable.listeDemandesPaiements', compact('demandePaiements'))->with('toast_success', 'Nouvelle demande de paiement ajoutée avec succès');
      }

      public function listePaiementsValides()
      {
        // $demandePaiements = DemandePaiement::all();
  
        $demandePaiements = DB::table('demande_paiements')
          ->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
          ->where('demande_paiements.paye','oui')
          ->select('employes.nom_prenoms', 'demande_paiements.*')
          ->get();
          
          return view('comptable.listePaiementsValides', compact('demandePaiements'))->with('toast_success', 'Nouvelle demande de paiement ajoutée avec succès');
      }

      public function validerDemandePaiement($id)
      {

        DB::table('demande_paiements')->where('id',$id)->update(['valide'=>'oui']);
        

        return back()->with('toast_success', 'Demande de paiement validée avec succès');


        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

      public function imprimerBulletin($id)
      {
        // retreive all records from db
      $datas = DB::table('demande_paiements')->join('employes', 'employes.matricule', '=', 'demande_paiements.matricule')
      ->where('demande_paiements.id',$id)
      ->select('employes.*', 'demande_paiements.*')
      ->get();
      // return view('comptable.bulletin', compact('datas'));

      // share datas to view
      view()->share('demande_paiement',$datas);
      $pdf = PDF::loadView('comptable.bulletin', compact('datas'));

      // download PDF file with download method
      // return $pdf->download('pdf_file.pdf');
      return $pdf->stream();
      }

}
