<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		//Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		//Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


/* Vistas de prueba (usualmente estaticas)*/
Route::get('/catalogo_prueba', 'HomeController@catalogo1')->name('catalogo_prueba');
Route::get('/catalogo_prueba/create', 'HomeController@catalogo2')->name('catalogo_prueba_create');
Route::get('/formulas', 'HomeController@formulas')->name('formulas');
Route::get('/analisis_de_sector', 'HomeController@analisis_sector')->name('analisis');
Route::get('/analisis_individual', 'HomeController@empresa_individual')->name('analisis_empresa');
Route::get('/estado_resultados_index', 'HomeController@estado_resultado_index')->name('estado_resultado_index');
Route::get('/estado_resultados_create', 'HomeController@estado_resultado_create')->name('estado_resultado_create');
Route::get('/balance_general_index', 'HomeController@balance_general_index')->name('balance_general_index');
Route::get('/balance_general_create', 'HomeController@balance_general_create')->name('balance_general_create');
