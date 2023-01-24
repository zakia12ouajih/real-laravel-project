<?php

// use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\RegisterPeopleController;
use Illuminate\Support\Facades\Route;

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
Route::get('/register', function () {
    return view('RegisterPage');
});
Route::controller(RegisterPeopleController::class)->group(function(){
    Route::post('/add','Insert_people');
    Route::get('/viewDatabase','viewDatabaseFunction');
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
