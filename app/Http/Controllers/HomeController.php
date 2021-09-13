<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('dashboard');
        $role = Auth::user()->role; 
        switch ($role) {
          case 'admin':
            return redirect('/admin_dashboard') ;
            break;
          case 'comptable':
            return redirect('/comptable_dashboard');
            break; 
            case 'employe':
                return redirect('/employe_dashboard');
                break; 
            case 'directeur':
                return redirect('/directeur_dashboard');
                break; 
            case 'informaticien':
                return redirect('/informaticien_dashboard');
                break; 
          // default:
          //   return '/dashboard'; 
          break;
        }
    }
}
