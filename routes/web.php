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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/signin', 'PagesController@signIn');
Route::get('/minutes', 'PagesController@getMinutes');
Route::get('/contactus', 'PagesController@contactus');

Route::resource('minutes','MinutesController');
Route::resource('registry','RegistryController');

Route::get('/add-agenda', 'PagesController@addAgenda');
Route::post('/add-agenda', 'minutesController@addAgenda');

