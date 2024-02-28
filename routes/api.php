<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/news', [NewsController::class,'index']);
Route::get('/news/{country}/{language}/{topic}', [NewsController::class,'countryLanguage']);
Route::post('/news', 'NewsController@store');
Route::put('/news/{news}', 'NewsController@update');
Route::delete('/news/{news}', 'NewsController@destroy');
Route::post('/media', 'MediaController@store');
Route::delete('/media/{media}', 'MediaController@destroy');
Route::get('/media/{news}', 'MediaController@show');
Route::get('/media/{news}/{media}', 'MediaController@show');
