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
});

//资源控制器
/*Route::group([''],function(){
	Route::resource('home/news','home\NewsController');
});*/

//普通控制器
Route::get('/one','home\TwoController@index');

Route::get('/two','home\TwoController@create');

Route::post('/three','home\TwoController@store');

Route::get('/four/{id}','home\TwoController@edit');

Route::post('/five/{id}','home\TwoController@update');

Route::get('/six/{id}','home\TwoController@delete');

