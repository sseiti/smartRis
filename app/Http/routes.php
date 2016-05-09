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

Route::group([
    'middleware' => 'cors',
], function () {
    Route::group([
        'prefix' => 'api',
        //'middleware' => 'jwt.basic',
    ], function () {
        Route::get('patients/all', 'PatientsController@all');
        Route::post('patients/create', 'PatientsController@create');
        Route::get('patients/edit/{id}', 'PatientsController@edit');
        Route::get('patients/delete/{id}', 'PatientsController@delete');

        Route::get('guias/all', 'GuiasController@all');
        Route::post('guias/create', 'GuiasController@create');
        Route::get('guias/edit/{id}', 'GuiasController@edit');

        Route::post('lote/generate', 'GuiasController@generateLote');
    });
});
