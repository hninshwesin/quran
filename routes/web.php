<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormCreateController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/create', [FormCreateController::class, 'index']);
Route::post('/home', [FormCreateController::class, 'create']);

Route::resource('qurans', App\Http\Controllers\quranController::class);

Route::resource('shweSins', App\Http\Controllers\ShweSinController::class);

Route::resource('htayLwinOos', App\Http\Controllers\HtayLwinOoController::class);

Route::resource('testings', App\Http\Controllers\testingController::class);

Route::resource('tests', App\Http\Controllers\testController::class);