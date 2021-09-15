<?php
namespace App\Http\Controllers\Comptable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employe;
use App\DataTables\EmployesDataTable;



class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  // public function index() {
  //   // $employes = DB::table('users')->where('role', 'employe')->get();
  //   $employes = Employe::all();
    
  //   return view('comptable.index', compact('employes'));

    
  // }

  public function index(EmployesDataTable $dataTable)
    {
        return $dataTable->render('comptable.index');
    }
}