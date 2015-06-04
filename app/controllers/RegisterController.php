<?php

use Carbon\Carbon;
class RegisterController extends BaseController {

	public function __construct(){
        $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

	public function showForm(){
		$today = Carbon::now()->toDateString();
		$programs = Programs::where('deleted', 0)->lists('nama', 'id');
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
