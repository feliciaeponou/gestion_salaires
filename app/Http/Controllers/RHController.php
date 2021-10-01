<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Request;
use App\Models\Pointage;

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

      public function searchEmployerh() {
        $q = Request::get ( 'q' );
        $employe = Employe::where('nom_prenoms','LIKE','%'.$q.'%')->get();
        if(count($employe) > 0)
            return view('rh.index')->withDetails($employe)->withQuery ( $q );
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
}
