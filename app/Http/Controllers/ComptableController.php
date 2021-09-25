<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Models\Pointage;

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

      public function searchEmployeComptable() {
        $q = Request::get ( 'q' );
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
}
