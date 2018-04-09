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

Route::get('/api/index', 'IndexController@index');
Route::get('/api/add_job', 'IndexController@addJobs');
Route::get('/api/iLoveErrors', 'IndexController@iLoveErrors');
