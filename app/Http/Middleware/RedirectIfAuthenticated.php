<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */

    // public function handle(Request $request, Closure $next, ...$guards)
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {
    //             // return redirect(RouteServiceProvider::HOME);

    //             $role = Auth::user()->role; 
    //     switch ($role) {
    //       case 'admin':
    //         return redirect('/admin_dashboard') ;
    //         break;
    //       case 'comptable':
    //         return redirect('/comptable_dashboard');
    //         break; 
    //         case 'employe':
    //             return redirect('/employe_dashboard');
    //             break; 
    //         case 'directeur':
    //             return redirect('/directeur_dashboard');
    //             break; 
    //         case 'informaticien':
    //             return redirect('/informaticien_dashboard');
    //             break; 
    //       // default:
    //       //   return '/dashboard'; 
    //       break;
    //     }



    //         }
    //     }

    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
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
            default:
              return '/home'; 
            break;
          }
        }
        return $next($request);
      }



}
