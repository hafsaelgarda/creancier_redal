<?php

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

Route::get('factures', 'App\Http\Controllers\API\FactureController@index');
Route::get('factures/{reference_id}', 'App\Http\Controllers\API\FactureController@getfacture');
Route::post('payfacture', 'App\Http\Controllers\API\FactureController@payfacture');
Route::post('generatefacture/{reference_id}', 'App\Http\Controllers\API\FactureController@generate');
Route::get('userfactures/{user_id}', 'App\Http\Controllers\API\FactureController@userfactures');
Route::put('payfact', 'App\Http\Controllers\API\FactureController@payfact');
