<?php

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
})->name('index');

Auth::routes();

/*
 * Роуты были немного не по CRUD. Нет смысла добавлять в URL store, destroy, show
 * когда мы уже используемые разные типы запросов GET, POST, DELETE, PUT
 *
 * + эти же роуты можно создать одной строкой :)
 * Route::resource('articles', 'ArticlesController');
 * */

Route::get('home', 'HomeController@index')->name('home');
Route::get('articles', 'ArticlesController@index')->name('articles');
Route::get('articles/{article}', 'ArticlesController@article')->name('article');
Route::delete('articles/{article}', 'ArticlesController@destroy')->name('articles.destroy');

Route::resource('users', 'UsersController');
// Route::get('users', 'UsersController@index')->name('users.index');
// Route::get('users/create', 'UsersController@create')->name('users.create');
// Route::post('users/store', 'UsersController@store')->name('users.store');
// Route::get('users/{id}/edit', 'UsersController@edit')->name('users.edit');
// Route::put('users/{id}/update', 'UsersController@update')->name('users.update');
// Route::get('users/{id}/show', 'UsersController@show')->name('users.show');
// Route::delete('users/{id}/destroy', 'UsersController@destroy')->name('users.destroy');