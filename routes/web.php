<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use App\Models\Employe;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    // return view('welcome');
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
          // default:
            // return 'dashboard'; 
            // return view('informaticien.dashboard');
          // break;
        }
})->middleware(['auth'])->name('dashboard');



// ROUTES COMPTABLE 
Route::get('comptable_dashboard', 'App\Http\Controllers\ComptableController@index')->middleware('role:comptable')->name('comptable_dashboard');;
Route::any('/searchEmployeComptable',[App\Http\Controllers\ComptableController::class, 'searchEmployeComptable'])->middleware('role:comptable')->name('searchEmployeComptable');
Route::get('/detailsEmployeComptable/{matricule}',[App\Http\Controllers\ComptableController::class, 'detailsEmployeComptable'])->middleware('role:comptable')->name('detailsEmployeComptable');


// ROUTES INFORMATICIEN 
Route::get('informaticien_dashboard', 'App\Http\Controllers\InformaticienController@index')->middleware('role:informaticien')->name('informaticien_dashboard');;
Route::any('/searchEmployeInformaticien',[App\Http\Controllers\InformaticienController::class, 'searchEmployeInformaticien'])->middleware('role:informaticien')->name('searchEmployeInformaticien');
Route::get('nouveauPointage/{matricule}', 'App\Http\Controllers\InformaticienController@nouveauPointage')->middleware('role:informaticien')->name('nouveauPointage');;
Route::any('enregistrerPointage', 'App\Http\Controllers\InformaticienController@enregistrerPointage')->middleware('role:informaticien')->name('enregistrerPointage');;



// ROUTES DIRECTEUR 
Route::get('directeur_dashboard', 'App\Http\Controllers\DirecteurController@index')->middleware('role:directeur')->name('directeur_dashboard');;




// ROUTES EMPLOYE 

Route::get('employe_dashboard', 'App\Http\Controllers\EmployeController@index')->middleware('role:employe')->name('employe_dashboard');;



// ROUTES ADMIN 

Route::get('admin_dashboard', 'App\Http\Controllers\AdminController@index')->middleware('role:admin')->name('admin_dashboard');;





// ROUTES AUTH


require __DIR__.'/auth.php';

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

