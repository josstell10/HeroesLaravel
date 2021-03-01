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
	Route::get('/', 'AdminController@index')->name('admin.index');
	//ruta optimizada
    //Route::resource('heroes','HeroesController');

	//rutas agrupadas
	Route::group(['prefix'=>'heroes'], function(){
		Route::get('/', 'HeroesController@index')->name('admin.heroes.index');
		Route::get('create', 'HeroesController@create')->name('admin.heroes.create');
		Route::post('store', 'HeroesController@store')->name('admin.heroes.store');
        Route::get('edit/{id}', 'HeroesController@edit')->name('admin.heroes.edit');
        Route::post('update/{id}', 'HeroesController@update')->name('admin.heroes.update');
        Route::delete('destroy/{id}', 'HeroesController@destroy')->name('admin.heroes.destroy');
	});
	Route::resource('items', 'ItemsController');
    Route::resource('enemys', 'EnemysController');
});

//rutas sencillas
/*Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/heroes', 'HeroesController@index')->name('admin.heroes');
Route::get('/items', 'ItemController@index')->name('admin.items');
Route::get('/enemigos', 'EnemigosController@index')->name('admin.enemigos');*/


/*Route::get('/home/{name}', function($name){
	return view('home', ['name'=>$name]);
})->where('name','[A-Za-z]+');*/
