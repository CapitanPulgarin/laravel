<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente', function () {
    return view('index');
});
Route::get('login', function () {
    return view('login');
});

// Route::get('/login', 'Auth\loginController@showLoginForm');
// Route::post('/login', 'Auth\loginController@Login');

Route::get('/perf', 'perfController@index')->name('perf');

