<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
            return view('admin.index') ;
            break;
          case 'comptable':
            return redirect('/comptable_dashboard');
            break; 
            case 'employe':
                return view('employe.index');
                break; 
            case 'directeur':
                return view('directeur.index');
                break; 
            case 'informaticien':
                return view('informaticien.index');
                break; 
          // default:
            // return 'dashboard'; 
            // return view('informaticien.dashboard');
          // break;
        }
})->middleware(['auth'])->name('dashboard');

Route::get('/admin_dashboard', 'App\Http\Controllers\Admin\DashboardController@index')->middleware('role:admin');;
Route::get('/employe_dashboard', 'App\Http\Controllers\Employe\DashboardController@index')->middleware('role:employe');;
Route::get('/comptable_dashboard', 'App\Http\Controllers\Comptable\DashboardController@index')->middleware('role:comptable')->name('comptable_dashboard');;
Route::get('/informaticien', 'App\Http\Controllers\Informaticien\DashboardController@index')->middleware('role:informaticien');;
Route::get('/directeur_dashboard', 'App\Http\Controllers\Directeur\DashboardController@index')->middleware('role:directeur');;

require __DIR__.'/auth.php';



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});
Route::get('/liste_employes', 'App\Http\Controllers\Comptable\ListeEmployes@index')->middleware('role:comptable')->name('liste_employes');;;
