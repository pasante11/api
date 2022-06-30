<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerrenosController;
use App\Models\Terrenos;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('terrenos','App\Http\Controllers\TerrenosController');
// Route::get('terrenos',[TerrenosController::class,'terrenos']);
// Terrenos
// Route::get('terrenos', 'App\Http\Controllers\TerrenosController@index');
// Route::post('terrenos', 'App\Http\Controllers\TerrenosController@store');
// Route::put('terrenos', 'App\Http\Controllers\TerrenosController@update');
// // Route::get('terrenos/{id}', 'App\Http\Controllers\TerrenosController@show');
// Route::get('terrenos/{id}', 'App\Http\Controllers\TerrenosController@show');
// Route::delete('terrenos', 'App\Http\Controllers\TerrenosController@destroy');
// Route::get('terrenos', 'App\Http\Controllers\TerrenosController@search');

// Inspeccions
Route::apiResource('inspeccions','App\Http\Controllers\InspeccionsController');
// Route::get('inspeccions', 'App\Http\Controllers\InspeccionsController@index');
// Route::post('inspeccions', 'App\Http\Controllers\InspeccionsController@store');
//Users
Route::apiResource('users','App\Http\Controllers\UserController');
// Route::get('users', 'App\Http\Controllers\UserController@index');
// Route::post('users', 'App\Http\Controllers\UserController@store');

//BUSQUEDAD
Route::post('serviciobusquedad','App\Http\Controllers\SearchServiceController@search');    