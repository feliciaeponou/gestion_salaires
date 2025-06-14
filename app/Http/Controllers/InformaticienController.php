<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use App\Models\Pointage;
// use Request;
use Illuminate\Http\Request;
use DB;
use Alert;
class InformaticienController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {

        $employes = Employe::all();
        
        return view('informaticien.index', compact('employes'));
    
        // return view('informaticien.index');
      }

      public function searchEmployeInformaticien(Request $request) {
        $q = $request->q;
        $employe = Employe::where('nom_prenoms','LIKE','%'.$q.'%')->get();
        if(count($employe) > 0)
            return view('informaticien.index')->withDetails($employe)->withQuery ( $q );
        else return view ('informaticien.index')->withMessage('Aucune correspondance trouvée !');
      }

      public function nouveauPointage($matricule)
      {
        // $matricule = Request::get ( 'matricule' );
        $employes = DB::table('employes')->where('matricule', ''.$matricule.'')->get();

        // if(count($employe) > 0)

        return view('informaticien.nouveauPointage', compact('employes'));
        // else 
        // return view('informaticien.nouveauPointage', compact('employes'));

      }

      public function enregistrerPointage(Request $request)
      {
        // TODO verification pour savoir si le pointage n'a pas été validé pour cette date et possibilité de suppression en cas d'erreur (Après validation du manager)
        // TODO Ajout des minutes dans le calcul du volume horaire

        $debutSeance = strtotime($request->input('debutSeance'));
        $debutPause = strtotime($request->input('debutPause'));
        $finPause = strtotime($request->input('finPause'));
        $finSeance = strtotime($request->input('finSeance'));


        $difference = round(abs($debutPause - $debutSeance) / 3600,2);
        $difference2 = round(abs($finSeance - $finPause) / 3600,2);
        $volumeHoraire = $difference + $difference2;


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
              'volumeHoraire' => $volumeHoraire,
              'payee' => 'non',
          ]);

          // echo "Volume horaire : ". $volumeHoraire;

          return back()->with('toast_success', 'Nouvelle séance ajoutée avec succès ');
      }
}
