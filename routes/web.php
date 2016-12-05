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

Route::get('/login', function () {
    return view('welcome');
});

// private routes
// Route::group(['middleware' => ['auth']], function () {

     Route::get('/users', 'UsersController@getUsers');
     Route::post('/user/delete', 'UsersController@destroyUser');
     Route::match(['get', 'post'], '/user/new', 'UsersController@storeUser');
     Route::match(['get', 'post'], '/user/update/{id}', 'UsersController@postUser');

     Route::match(['get', 'post'], '/fibonacci', 'BackendController@Fibonacci');
     Route::match(['get', 'post'], '/palindrome','BackendController@Palindrome');
     Route::match(['get', 'post'], '/anagram','BackendController@Anagram');
     Route::match(['get', 'post'], '/number-sort','BackendController@NumberSort');    
// });
