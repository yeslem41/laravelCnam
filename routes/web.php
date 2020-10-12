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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('histoire', 'MaloginController');

Route::post('users/{id}', 'MaloginController@update')->name('statusupdate');
Route::get('month/{id}','MaloginController@month')->name('month');
Route::get('year/{id}','MaloginController@year')->name('year');
Route::get('monthspecif/{id}', 'MaloginController@monthSpecifique');

 Route::get('reclamations','ReclamationController@index');
 
Route::get('reclamations/{type}','ReclamationController@affiliationRebourser');
Route::get('reclamations/affiliation/{etat}','ReclamationController@affiliation');
Route::get('reclamations/rembourser/{etat}', 'ReclamationController@rembourser');
Route::get('reclamations/etat/{etat}','ReclamationController@etat');

Route::get('reclamations/search/{NNI}','ReclamationController@getRecla');

Route::post('ReponseController/post', 'ReponseController@store')->name('reponse');
