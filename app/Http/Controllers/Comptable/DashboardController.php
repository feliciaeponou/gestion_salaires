<?php
namespace App\Http\Controllers\Comptable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
    return view('comptable.dashboard');
  }
}