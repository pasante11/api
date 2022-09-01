<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TerrenosController;
use App\Http\Controllers\PHPGetListadoController;
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
Route::post('serviciobusquedadinspeccions','App\Http\Controllers\PHPSearchServiceInspeccionsController@searchInspeccions');    
Route::post('updateInspeccions','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccions');    

Route::post('login','App\Http\Controllers\PHPUpdateInspecionsServiceController@loginInspeccion');    
Route::post('updateInspeccionsdatosgenerales','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosGenerales');    
Route::post('updateInspeccionsdatosOcupacionTerreno','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosOcupacionTerreno');    
Route::post('updateInspeccionsdatosOcupacionTerrenoDos','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosOcupacionTerrenoPageDos');    
Route::post('updateInspeccionsdatosActividadEconimica','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosActividadEconomicaIndustrial');    
Route::post('updateInspeccionsdatosActividadEconimicaDos','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosActividadEconomicaIndustrialPageDos');    
Route::post('updateInspeccionsDatosInfraestructura','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosInfraestructuraIndustria'); 
Route::post('updateInspeccionsDatosInfraestructuraDos','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosInfraestructuraIndustriaPageDos'); 
Route::post('updateInspeccionsDatosInfraestructuraTres','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosInfraestructuraIndustriaPageTres'); 
Route::post('updateInspeccionsDatosInfraestructuraCuatro','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsDatosInfraestructuraIndustriaPageCuatro'); 
Route::post('updateInspeccionsEliminarResiduos','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsEliminarResiduos'); 
Route::post('updateInspeccionsEliminarResiduosPageDos','App\Http\Controllers\PHPUpdateInspecionsServiceController@updateInspeccionsEliminarResiduosPageDos'); 


Route::post('phpgetInspeccions','App\Http\Controllers\PHPGetInspeccionsServiceController@getInspeccions');   
Route::post('phpgetListaDeInspeccions','App\Http\Controllers\PHPGetInspeccionsServiceController@getListaDeInspeccions');   
Route::post('phpgetDatosHomePage','App\Http\Controllers\PHPGetInspeccionsServiceController@getDatosHomePage');   

Route::get('phpgetPI','App\Http\Controllers\PHPGetListadoController@getPI');    
Route::post('phpgetListado','App\Http\Controllers\PHPGetListadoController@getListado');    
Route::post('phpgetListadoFecha','App\Http\Controllers\PHPGetListadoController@getListadoPorFecha');    
Route::get('phpgetListadoTodasPI','App\Http\Controllers\PHPGetListadoController@getListadoTodasPI');    