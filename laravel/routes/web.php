<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnnonceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ConnexionController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/freeads', function () {
    // return view("index");
   return IndexController::ShowIndex();
});
Route::post('/freeads', function () {
    return 'Votre email est ' . $_POST['email'].'Votre password est ' . $_POST['password'];
});
// Route::post('/annonce', function () {
//     AnnonceController::create();
// });
Route::post('/annonce', [AnnonceController::class, "create"]);
// Route::resource('annonce', AnnonceController::class);
Route::get('/show',[AnnonceController::class, "show"])->name('show');
Route::get('/Updatepage/{id}',[AnnonceController::class, "Updatepage"])->name('Updatepage');
Route::get('/Delete/{id}',[AnnonceController::class, "Delete"])->name('Delete');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
