<?php

namespace App\Http\Controllers\Comptable;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employe;

class ListeEmployes extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $employes = DB::table('users')->where('role', 'employe')->get();
        
      //   foreach (Employe::all() as $employe) {
      //     echo $employe->name;
      // }
        
        return view('comptable.liste_employes');
      }
}
