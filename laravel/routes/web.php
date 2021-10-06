<?php

use App\Http\Controllers\IndexController;
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
Route::post('/annonce', function () {
    return 'Votre titre est ' . $_POST['titre'].'Votre description est ' . $_POST['description'];
});

Auth::routes(['verify' => true]);

// Route::get('home', function () {
    
// })->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
