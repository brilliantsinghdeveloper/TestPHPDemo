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

use App\Link;

Route::get('/login', function () {
    return ('hello');
});


Route::get('/register', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home',[
	'as' => 'signup',
	'uses'=>'HomeController@index']);


Route::get('/', function () {
    $links = \App\Link::all();
    return view('welcome')->withLinks($links);
});


Route::get('/submit', function () {
    return view('submit');
});

Route::get('/logout', function () {
    return view('welcome');
});


Route::resource('products','ProductController');

Route::resource('members','MemberController');




