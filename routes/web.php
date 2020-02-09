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
Route::get('/meetings/attendances', 'PagesController@getAttendances');
Route::get('/contactus', 'PagesController@contactus');

Route::resource('minutes','MinutesController');
Route::get('/registry/new-user','RegistryController@index');
Route::get('/registry/users','RegistryController@getUsers');

Route::post('/add-agenda', 'minutesController@addAgenda');
Route::post('/upload-minutes', 'minutesController@upload');
Route::put('/edit-agenda/{id}', 'MinutesController@editAgenda');
Route::delete('/delete-agenda/{id}', 'MinutesController@deleteAgenda');
Route::delete('/delete-minutes/{id}', 'MinutesController@deleteMinutes');
