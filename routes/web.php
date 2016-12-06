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

Route::post('/login', 'UsersController@login');
Route::get('/logout', 'UsersController@logout');


// private routes
Route::group(['middleware' => ['auth']], function () {

     Route::post('/user/login', 'UsersController@postUser');
     Route::post('/user/logout', 'UsersController@postUser');

     Route::get('/users', 'UsersController@getUsers');
     Route::get('/user/new', 'UsersController@storeUser');
     Route::post('/user/update', 'UsersController@postUser');
     Route::post('/user/delete', 'UsersController@destroyUser');

     Route::match(['get', 'post'], '/fibonacci', 'BackendController@Fibonacci');
     Route::match(['get', 'post'], '/palindrome','BackendController@Palindrome');
     Route::match(['get', 'post'], '/anagram','BackendController@Anagram');
     Route::match(['get', 'post'], '/number-sort','BackendController@NumberSort');    
});