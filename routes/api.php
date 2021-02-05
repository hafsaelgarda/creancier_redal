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
Route::post('generatefacture/{user_id}', 'App\Http\Controllers\API\FactureController@generate');
Route::get('userfactures/{user_id}', 'App\Http\Controllers\API\FactureController@userfactures');
Route::put('payfacture', 'App\Http\Controllers\API\FactureController@payfacture');
