<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});	

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::get('dashboard', 'UserController@showDashboard');


Route::group(array('prefix' => 'register'), function()
{

    Route::get('/', 'RegisterController@showForm');
    Route::post('submit', 'RegisterController@submit');
    Route::get('success/{id}', 'RegisterController@showSuccess');

});

Route::group(array('prefix' => 'programs'), function()
{

    Route::get('/', 'ProgramsController@show');
    Route::get('edit/{id}', 'ProgramsController@showEdit');
    Route::post('edit/{id}', 'ProgramsController@submitEdit');
    Route::post('add', 'ProgramsController@submitAdd');
    
    Route::get('delete/{id}', 'ProgramsController@showDelete');
    Route::post('delete/{id}', 'ProgramsController@doDelete');

    Route::get('getinfo/{id}', 'ProgramsController@showInfo');

});

Route::group(array('prefix' => 'siswa'), function()
{

    Route::get('/', 'SiswaController@show');
    Route::get('edit/{id}', 'SiswaController@showEdit');
    Route::post('edit/{id}', 'SiswaController@submitEdit');
   
    Route::post('add', 'SiswaController@submitAdd');
    
    Route::get('delete/{id}', 'SiswaController@showDelete');
    Route::post('delete/{id}', 'SiswaController@doDelete');

    Route::get('detil/{id}', 'SiswaController@showDetil');
});