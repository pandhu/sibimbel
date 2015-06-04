<?php

class UserController extends BaseController {
	public function __construct(){
        $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('csrf', ['on' => 'post']);
    }
	public function showDashboard(){
		$programs = Programs::where('deleted', 0)->get();
		$siswa = Siswa::where('deleted',0)->get();
		return View::make('inner/dashboard', array('programs'=>$programs, 'siswa'=>$siswa));
	}
}
