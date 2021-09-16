<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);
        $role = Auth::user()->role; 
        switch ($role) {
            case 'admin':
                return redirect('admin_dashboard');
                break;
              case 'comptable':
                return redirect('comptable_dashboard');
                break; 
                case 'employe':
                  return redirect('employe_dashboard');
                    break; 
                case 'directeur':
                  return redirect('directeur_dashboard');
                    break; 
                case 'informaticien':
                  return redirect('informaticien_dashboard');
                    break; 
                //       default:
          // default:
          //   return '/dashboard'; 
          break;
        }
         
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    // public function redirectTo() {
    //     $role = Auth::user()->role; 
    //     switch ($role) {
    //       case 'admin':
    //         return '/admin_dashboard';
    //         break;
    //       case 'comptable':
    //         return '/comptable_dashboard';
    //         break; 
    //         case 'employe':
    //             return '/employe_dashboard';
    //             break; 
    //         case 'directeur':
    //             return '/directeur_dashboard';
    //             break; 
    //         case 'informaticien':
    //             return '/informaticien_dashboard';
    //             break; 
    //       default:
    //         return '/dashboard'; 
    //       break;
    //     }
    //   }
}
