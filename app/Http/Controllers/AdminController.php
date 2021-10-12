<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $users = User::all();
        return view('admin.index', compact('users'));
        // return view('admin.index');
      }

      public function detailsUserAdmin($matricule)
      {

        $users = DB::table('users')->where('matricule',$matricule)->get();
        return view('admin.detailsUser', compact('users'));
        
        return back()->withStatus(__('Demande de paiement payée avec succès'));

        // return view('comptable.detailsEmploye', compact('pointages'));
        
      }

      public function editInfosUser(Request $request)
      {

        DB::table('users')->where('matricule',$request->matricule)->update(request()->except(['_token','_method']));
        

        return back()->withStatus(__('Informations modifiées avec succès'));

        // return view('comptable.detailsEmploye', compact('pointages'));
        
        
      }

} 
