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
Route::get('/test', function () {
  echo "helloo";
});

Route::get('/welcome', function(){
  return view('welcome');
});

Route::get('/form', function(){
  return view('form', ['name' => 'James']);
});
Route::post('create','StudentController@insert');
Route::get('/view','StudentController@view');
Route::get('/delete/{id}','StudentController@delete');
Route::get('/update/{id}','StudentController@update');
Route::post('modify','StudentController@modify');
