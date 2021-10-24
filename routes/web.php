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


Route::resource('uhtaylwinoos', App\Http\Controllers\UhtaylwinooController::class);

Route::resource('uhtaylwinooFootnotes', App\Http\Controllers\UhtaylwinooFootnoteController::class);

Route::resource('utinmyints', App\Http\Controllers\UtinmyintController::class);

Route::resource('utinmyintFootnotes', App\Http\Controllers\UtinmyintFootnoteController::class);

Route::resource('arabics', App\Http\Controllers\ArabicController::class);

Route::resource('arabicFootnotes', App\Http\Controllers\ArabicFootnoteController::class);