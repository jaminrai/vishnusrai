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
    return view('frontend/index');
});

/*Route::get('/login', function () {
    return view('backend/index');
});*/

Route::get('/posts', 'CreatesController@home' );

Route::get('/create', function(){
	return view('backend/create');
} );


Route::post('/insert', 'CreatesController@add' );