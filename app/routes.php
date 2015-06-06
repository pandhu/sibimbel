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
	return Redirect::to('dashboard');
});	

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

Route::get('dashboard', 'UserController@showDashboard');

Route::get('ganti_password', 'UserController@showGantiPassword');
Route::post('ganti_password', 'UserController@doGantiPassword');


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
   
    Route::get('getinfo/{id}', 'SiswaController@showInfo');
    Route::get('topdf/{id}', 'SiswaController@showPDF');
});


Route::group(array('prefix' => 'pembayaran'), function()
{

    Route::get('/', 'PembayaranController@show');
    Route::get('edit/{id}', 'PembayaranController@showEdit');
    Route::post('edit/{id}', 'PembayaranController@submitEdit');
   
    Route::get('add', 'PembayaranController@showAdd');
    Route::post('add', 'PembayaranController@submitAdd');
    
    Route::get('delete/{id}', 'PembayaranController@showDelete');
    Route::post('delete/{id}', 'PembayaranController@doDelete');

    Route::get('detil/{id}', 'PembayaranController@showDetil');

    Route::get('topdf/{id}','PembayaranController@showPDF');
});

Route::group(array('prefix' => 'users'), function()
{

    Route::get('/', 'UserController@showUsers');
    Route::post('add', 'UserController@submitAdd');
    Route::get('delete/{id}', 'UserController@showDelete');
    Route::post('delete/{id}', 'UserController@doDelete');

});

Route::group(array('prefix' => 'setting'), function()
{

    Route::get('/', 'SettingController@showGeneral');
    Route::post('change', 'SettingController@submitChange');

});
