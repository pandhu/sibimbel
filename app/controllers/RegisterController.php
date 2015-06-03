<?php

use Carbon\Carbon;
class RegisterController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showForm(){
		$today = Carbon::now()->toDateString();
		$programs = Programs::lists('nama', 'id');
		return View::make('register/form', array('programs'=>$programs, 'today'=>$today));
	}

	public function submit(){
		var_dump(Input::all());
	}

	public function showDetil($id){
		$siswa = Siswa::find($id);
		return View::make('register/success', array('siswa'=>$siswa));
	}

	public function showSuccess($id){
		$siswa = Siswa::find($id);
		return View::make('register/success', array('siswa'=>$siswa));
	}

}
