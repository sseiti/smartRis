<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('patients/all', 'PatientseController@all')->middleware(['cors']);
Route::post('patients/create', 'PatientsController@create')->middleware(['cors']);
Route::get('patients/edit/{id}', 'PatientsController@all')->middleware(['cors']);