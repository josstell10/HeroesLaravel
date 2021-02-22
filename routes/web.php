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
    return view('welcome');
});

//rutas agrupadas
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', 'AdminController@index')->name('admin');
	Route::get('heroes', 'HeroesController@index')->name('admin.heroes');
	Route::get('items', 'ItemController@index')->name('admin.items');
	Route::get('enemigos', 'EnemigosController@index')->name('admin.enemigos');
});

//rutas sencillas
/*Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/heroes', 'HeroesController@index')->name('admin.heroes');
Route::get('/items', 'ItemController@index')->name('admin.items');
Route::get('/enemigos', 'EnemigosController@index')->name('admin.enemigos');*/


/*Route::get('/home/{name}', function($name){
	return view('home', ['name'=>$name]);
})->where('name','[A-Za-z]+');*/