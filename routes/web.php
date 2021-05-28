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



Route::resource('shwes', App\Http\Controllers\ShweController::class);

Route::resource('shweFootnotes', App\Http\Controllers\ShweFootnoteController::class);