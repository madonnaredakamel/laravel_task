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
//add user
Route::resource('user','userController');
//index
Route::resource('user','userController');
//edit
Route::resource('user/{id}/edit','userController');
//remove user
Route::resource('user/destroy','userController');

//login
Route::get('Login','userController@login');

Route::post('doLogin','userController@logicLogin');

//log out
Route::get('Logout','userController@logout');

//product routing
//display
Route::resource('user','productController');
//edit
Route::resource('user/{id}/edit','productController');
//add
Route::resource('user/create','productController');
//remove
Route::resource('user/destroy','productController');
