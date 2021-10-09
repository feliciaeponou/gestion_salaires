<?php

namespace App\Http\Controllers;
use App\Models\Employe;
// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;

class RHController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        // $employes = DB::table('users')->where('role', 'employe')->get();
        $employes = Employe::all();
        return view('rh.index', compact('employes'));
      }

      public function searchEmployerh(Request $request) {
        
        $employe = Employe::where('nom_prenoms','LIKE','%'.$request->q.'%')->get();
        if(count($employe) > 0)
            return view('rh.index')->withDetails($employe)->withQuery ( $request->q );
        else return view ('rh.index')->withMessage('Aucune correspondance trouvée !');
      }


      public function detailsEmployerh($matricule)
      {
        $pointages = Pointage::where('matricule',''.$matricule.'')->get();
        return view('rh.detailsEmploye', compact('pointages'));
        
      }
      public function nouvelEmploye()
      {
        return view('rh.nouvelEmploye');
      }

      public function enregistrerEmploye(Request $request)
      {
            $request->validate([
              // 'matricule' => ['required', 'string', 'max:255'],
                'nom_prenoms' => ['required', 'string', 'max:255'],
                'date_naissance' => ['required', 'string', 'max:255'],
                'genre' => ['required', 'string', 'max:255'],
                'service' => ['required', 'string', 'max:255'],
                'categorie' => ['required', 'string', 'max:255'],
                'salaire_par_heure' => ['required', 'string', 'max:255'],
                'date_debut_service' => ['required', 'string', 'max:255'],
                'volume_horaire' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'max:255'],
                'password' => ['required', 'string', 'max:255'],
            ]);

            $matricule = mt_rand(1000,9999);

          

          $employe = Employe::create([
              'matricule' => $matricule,
              'nom_prenoms' => $request->nom_prenoms,
              'date_naissance' => $request->date_naissance,
              'genre' => $request->genre,
              'service' => $request->service,
              'categorie' => $request->categorie,
              'salaire_par_heure' => $request->salaire_par_heure,
              'date_debut_service' => $request->date_debut_service,
              'volume_horaire' => $request->volume_horaire,
              'email' => $request->email,
              'password' => Hash::make($request->password) ,
          ]);
          
          $user = User::create([
            'name' => $request->nom_prenoms,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'employe',
            'matricule' => $matricule,

            
        ]);

        $employes = Employe::all();
        return view('rh.index', compact('employes'))->withStatus(__('Nouvel employé ajouté'));
        
      }


}
