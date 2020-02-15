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
Route::get('/contactus', 'PagesController@contactus');

Route::get('/registry/new-user','RegistryController@index');
Route::post('/registry/handle-register','RegistryController@handleRegister');
Route::get('/registry/users','RegistryController@getUsers');
Route::put('/registry/users/approve/{userId}','RegistryController@approveUser');
Route::put('/registry/users/disapprove/{userId}','RegistryController@disapproveUser');
Route::delete('/registry/users/delete','RegistryController@deleteDisapprovedUsers');

Route::get('/meetings/minutes','MinutesController@index');
Route::post('meetings/add-agenda', 'MinutesController@addAgenda');
Route::post('/meetings/upload-minutes', 'MinutesController@upload');
Route::put('/meetings/edit-agenda/{id}', 'MinutesController@editAgenda');
Route::delete('/meetings/delete-agenda/{id}', 'MinutesController@deleteAgenda');
Route::delete('/meetings/delete-minutes/{id}', 'MinutesController@deleteMinutes');

Route::get('/meetings/attendances', 'AttendancesController@getAttendances');
Route::post('/meetings/attendances', 'AttendancesController@postAttendance');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
