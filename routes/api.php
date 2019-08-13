<?php

use Illuminate\Http\Request;

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
Route::resource('anuncios', 'AnunciosController');
Route::resource('bandas', 'BandasController');
Route::resource('bandaseventos', 'BandasEventosController');
Route::resource('canciones', 'CancionesController');
Route::resource('cancionesvotacion', 'CancionesVotacionController');
Route::resource('eventos', 'EventosController');
Route::resource('eventosimgs', 'EventosImgsController');
Route::resource('eventosvotacion', 'EventosVotacionController');
Route::resource('roles', 'RolesController');
Route::resource('users', 'UsersController');

Route::get('filter/{id}/anuncios/{state}', "AnunciosController@getThisByFilter");
Route::get('filter/{id}/bandas/{state}', "BandasController@getThisByFilter");
Route::get('filter/{id}/bandaseventos/{state}', "BandasEventosController@getThisByFilter");
Route::get('filter/{id}/canciones/{state}', "CancionesController@getThisByFilter");
Route::get('filter/{id}/cancionesvotacion/{state}', "CancionesVotacionController@getThisByFilter");
Route::get('filter/{id}/eventos/{state}', "EventosController@getThisByFilter");
Route::get('filter/{id}/eventosimgs/{state}', "EventosImgsController@getThisByFilter");
Route::get('filter/{id}/eventosvotacion/{state}', "EventosVotacionController@getThisByFilter");
Route::get('filter/{id}/users/{state}', "UsersController@getThisByFilter");

Route::get('rol/{id}/users', "Users@getUsersByRol");

Route::post('users/password/reset', 'UsersController@recoveryPassword');
Route::post('users/{id}/changepassword', "UsersController@changePassword");

Route::post('login', 'AuthenticateController@login');
Route::post('upload', 'AuthenticateController@uploadAvatar');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');