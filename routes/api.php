<?php

use App\Http\Controllers\API\TranslatorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('translator', [TranslatorController::class, 'translator']);

Route::get('translate_details', [TranslatorController::class, 'translate_details']);

Route::get('footnotes', [TranslatorController::class, 'footnotes']);

Route::get('all_translation', [TranslatorController::class, 'all_translation']);
