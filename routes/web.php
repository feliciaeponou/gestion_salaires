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
            case 'secretaire_comptable':
              return redirect('secretaire_comptable_dashboard');
                break; 
                case 'rh':
                  return redirect('rh_dashboard');
                    break; 
          // default:
            // return 'dashboard'; 
            // return view('informaticien.dashboard');
          // break;
        }
})->middleware(['auth'])->name('dashboard');



// ROUTES COMPTABLE 
Route::get('comptable_dashboard', 'App\Http\Controllers\ComptableController@index')->middleware('role:comptable')->name('comptable_dashboard');;
Route::any('searchEmployeComptable',[App\Http\Controllers\ComptableController::class, 'searchEmployeComptable'])->middleware('role:comptable')->name('searchEmployeComptable');
Route::get('/detailsEmployeComptable/{matricule}',[App\Http\Controllers\ComptableController::class, 'detailsEmployeComptable'])->middleware('role:comptable')->name('detailsEmployeComptable');
Route::get('listeDemandesPaiementsComptable', 'App\Http\Controllers\ComptableController@listeDemandesPaiementsComptable')->middleware('role:comptable')->name('listeDemandesPaiementsComptable');
Route::get('listePaiementsValides', 'App\Http\Controllers\ComptableController@listePaiementsValides')->middleware('role:comptable')->name('listePaiementsValides');
Route::get('/validerDemandePaiement/{id}',[App\Http\Controllers\ComptableController::class, 'validerDemandePaiement'])->middleware('role:comptable')->name('validerDemandePaiement');
Route::get('/imprimerBulletin/{id}',[App\Http\Controllers\ComptableController::class, 'imprimerBulletin'])->middleware('role:comptable')->name('imprimerBulletin');
Route::get('statisiques', 'App\Http\Controllers\ComptableController@statistiques')->middleware('role:comptable')->name('statistiques');;


// ROUTES INFORMATICIEN 
Route::get('informaticien_dashboard', 'App\Http\Controllers\InformaticienController@index')->middleware('role:informaticien')->name('informaticien_dashboard');;
Route::any('searchEmployeInformaticien',[App\Http\Controllers\InformaticienController::class, 'searchEmployeInformaticien'])->middleware('role:informaticien')->name('searchEmployeInformaticien');
Route::get('nouveauPointage/{matricule}', 'App\Http\Controllers\InformaticienController@nouveauPointage')->middleware('role:informaticien')->name('nouveauPointage');;
Route::any('enregistrerPointage', 'App\Http\Controllers\InformaticienController@enregistrerPointage')->middleware('role:informaticien')->name('enregistrerPointage');;



// ROUTES DIRECTEUR 
Route::get('directeur_dashboard', 'App\Http\Controllers\DirecteurController@index')->middleware('role:directeur')->name('directeur_dashboard');;
Route::get('listeDemandesPaiementsDirecteur', 'App\Http\Controllers\DirecteurController@listeDemandesPaiementsDirecteur')->middleware('role:directeur')->name('listeDemandesPaiementsDirecteur');
Route::get('/payerDemandePaiement/{id}',[App\Http\Controllers\DirecteurController::class, 'payerDemandePaiement'])->middleware('role:directeur')->name('payerDemandePaiement');
Route::get('bulletinsPaiementsDirecteur', 'App\Http\Controllers\DirecteurController@bulletinsPaiementsDirecteur')->middleware('role:directeur')->name('bulletinsPaiementsDirecteur');



// ROUTES EMPLOYE 

Route::get('employe_dashboard', 'App\Http\Controllers\EmployeController@index')->middleware('role:employe')->name('employe_dashboard');;
// Route::get('seancesEmploye', 'App\Http\Controllers\EmployeController@index')->middleware('role:employe')->name('seancesEmploye');;


// ROUTES ADMIN 

Route::get('admin_dashboard', 'App\Http\Controllers\AdminController@index')->middleware('role:admin')->name('admin_dashboard');;
Route::get('/detailsUserAdmin/{matricule}',[App\Http\Controllers\AdminController::class, 'detailsUserAdmin'])->middleware('role:admin')->name('detailsUserAdmin');
Route::any('editInfosUser', 'App\Http\Controllers\AdminController@editInfosUser')->middleware('role:admin')->name('editInfosUser');;


// ROUTES SECRETAIRE COMPTABLE 

Route::get('secretaire_comptable_dashboard', 'App\Http\Controllers\SecretaireComptableController@index')->middleware('role:secretaire_comptable')->name('secretaire_comptable_dashboard');;
Route::get('nouvelleDemandePaiement/{matricule}', 'App\Http\Controllers\SecretaireComptableController@nouvelleDemandePaiement')->middleware('role:secretaire_comptable')->name('nouvelleDemandePaiement');;
Route::any('enregistrerDemandePaiement', 'App\Http\Controllers\SecretaireComptableController@enregistrerDemandePaiement')->middleware('role:secretaire_comptable')->name('enregistrerDemandePaiement');;
Route::any('verifierSeances', 'App\Http\Controllers\SecretaireComptableController@verifierSeances')->middleware('role:secretaire_comptable')->name('verifierSeances');;
Route::get('listeDemandesPaiements', 'App\Http\Controllers\SecretaireComptableController@listeDemandesPaiements')->name('listeDemandesPaiements');
Route::any('searchEmployeSecretaireComptable', 'App\Http\Controllers\SecretaireComptableController@searchEmployeSecretaireComptable')->middleware('role:secretaire_comptable')->name('searchEmployeSecretaireComptable');;


// ROUTES RH

Route::get('rh_dashboard', 'App\Http\Controllers\RHController@index')->middleware('role:rh')->name('rh_dashboard');;
Route::get('/nouvelEmploye', 'App\Http\Controllers\RHController@nouvelEmploye')->middleware('role:rh')->name('nouvelEmploye');;
Route::any('enregistrerEmploye', 'App\Http\Controllers\RHController@enregistrerEmploye')->middleware('role:rh')->name('enregistrerEmploye');;
Route::any('searchEmployeRH', 'App\Http\Controllers\RHController@searchEmployeRH')->middleware('role:rh')->name('searchEmployeRH');
Route::get('/detailsEmployerh/{matricule}',[App\Http\Controllers\RHController::class, 'detailsEmployerh'])->middleware('role:rh')->name('detailsEmployerh');
Route::any('editInfosEmploye', 'App\Http\Controllers\RHController@editInfosEmploye')->middleware('role:rh')->name('editInfosEmploye');;
Route::any('suppressionEmploye/{matricule}', 'App\Http\Controllers\RHController@suppressionEmploye')->middleware('role:rh')->name('suppressionEmploye');;
Route::any('suspendreEmploye/{matricule}', 'App\Http\Controllers\RHController@suspendreEmploye')->middleware('role:rh')->name('suspendreEmploye');;
Route::any('retablirEmploye/{matricule}', 'App\Http\Controllers\RHController@retablirEmploye')->middleware('role:rh')->name('retablirEmploye');;



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

