<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Pointage;
use DB;

class EmployeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {
        $matricule = Auth::user()->matricule; 

        $seances = DB::table('pointages')->where('matricule', $matricule)->get();

        return view('employe.index', compact('seances'));
      }
}
