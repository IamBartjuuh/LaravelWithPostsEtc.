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

Auth::routes();

#Supportpages
Route::get('/aanvraag', 'HelpdeskController@getaanvraag')->middleware('userdenypages');
Route::post('/aanvraag', 'HelpdeskController@postaanvraag')->middleware('userdenypages');
Route::get('/aanvragen/{user_id}', 'HelpdeskController@aangevraagd')->middleware('userdenypages');
Route::get('/hulppagina/{id}', 'HelpdeskController@supportpage')->middleware('userdenypages');
Route::post('/hulppagina/{id}', 'HelpdeskController@reactie')->middleware('userdenypages');
Route::post('/verwijder/reactie/{id}', 'HelpdeskController@reactiedelete')->middleware('userdenypages');

#Userchanges
Route::get('/user/{user_id}/aanpassen', 'UserController@getaanpassen');
Route::post('/user/{user_id}/aanpassen', 'UserController@postaanpassen');

#Pages
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/tarieven', 'PagesController@tarieven')->name('tarieven');
Route::get('/bart', 'PagesController@ppbart')->name('bart');
Route::get('/rowen', 'PagesController@pprowen')->name('rowen');
Route::get('/home', 'HomeController@index')->name('home');

#Administator
Route::get('/admin/aanvragen', 'AdminController@aanvragen')->middleware('userdenypages','adminperms');
