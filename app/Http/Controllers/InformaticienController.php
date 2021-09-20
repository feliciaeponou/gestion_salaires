<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use App\Models\Pointage;
use Illuminate\Http\Request;
use DB;
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

      public function searchEmployeInformaticien() {
        $q = Request::get ( 'q' );
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
}
