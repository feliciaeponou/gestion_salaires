<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pointage;

class EmployeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
      }
      public function index() {

        $seances = Pointage::all();
        return view('employe.index', compact('seances'));
      }
}
