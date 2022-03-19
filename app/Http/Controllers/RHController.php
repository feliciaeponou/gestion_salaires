<?php

namespace App\Http\Controllers;
use App\Models\Employe;
// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

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
        $employes = Employe::where('matricule',''.$matricule.'')->get();
        return view('rh.detailsEmploye', compact('employes'));
        
      }

      public function nouvelEmploye()
      {
        return view('rh.nouvelEmploye');
      }

      public function enregistrerEmploye(Request $request)
      {
            $request->validate([
                'nom_prenoms' => ['required', 'string', 'max:255'],
                'date_naissance' => ['required', 'string', 'max:255'],
                'genre' => ['required', 'string', 'max:255'],
                'service' => ['required', 'string', 'max:255'],
                'categorie' => ['required', 'string', 'max:255'],
                'intitule_poste' => ['required', 'string', 'max:255'],
                'salaire_base' => ['required', 'string', 'max:255'],
                'sursalaire' => ['required', 'string', 'max:255'],
                'prime_transport' => ['required', 'string', 'max:255'],
                'numero_cnps' => ['required', 'string', 'max:255'],
                'date_embauche' => ['required', 'string', 'max:255'],
                'date_entree' => ['required', 'string', 'max:255'],
                'email' => ['required','unique:employes', 'string', 'max:255'],
                'password' => ['required', 'string', 'max:255'],
            ]);

            $matricule = mt_rand(1000,9999);

            while (Employe::where('matricule', '=', $matricule)->exists()) {
              // user found

              $matricule = mt_rand(1000,9999);

            } 
             

                $employe = Employe::create([
                    'matricule' => $matricule,
                    'nom_prenoms' => $request->nom_prenoms,
                    'date_naissance' => $request->date_naissance,
                    'genre' => $request->genre,
                    'service' => $request->service,
                    'categorie' => $request->categorie,
                    'intitule_poste' => $request->intitule_poste,
                    'salaire_base' => $request->salaire_base,
                    'sursalaire' => $request->sursalaire,
                    'prime_transport' => $request->prime_transport,
                    'numero_cnps' => $request->numero_cnps,
                    'date_embauche' => $request->date_embauche,
                    'date_entree' => $request->date_entree,
                    'email' => $request->email,
                    'password' => Hash::make($request->password) ,
                    'suspendu' => 'non' 
                ]);

                
                $user = User::create([
                  'name' => $request->nom_prenoms,
                  'email' => $request->email,
                  'password' => Hash::make($request->password),
                  'role' => 'employe',
                  'matricule' => $matricule,
                ]);

              $employes = Employe::all();
              return view('rh.index', compact('employes'))->with('toast_success', 'Nouvel employé ajouté');
        
      }

      public function editInfosEmploye(Request $request)
      {

        DB::table('employes')->where('matricule',$request->matricule)->update(request()->except(['_token','_method']));
        

        return back()->with('toast_success', 'Informations modifiées avec succès');

        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

      public function suspendreEmploye(Request $request)
      {

        DB::table('employes')->where('matricule',$request->matricule)->update(['suspendu'=>'oui']);
        

        return back()->with('toast_success', 'Employé suspendu');
        // Alert::success('Suspension employé', 'Employé suspendu avec succès');

        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }
      public function retablirEmploye(Request $request)
      {

        DB::table('employes')->where('matricule',$request->matricule)->update(['suspendu'=>'non']);

        return back()->with('toast_success', 'Employé rétabli');

        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

      public function suppressionEmploye($matricule)
      {

        DB::table('employes')->where('matricule',$matricule)->delete();
        

        return back()->with('toast_success', 'Employé supprimé avec succès');

        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }



}
