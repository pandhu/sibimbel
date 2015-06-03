<?php

class UserController extends BaseController {

	public function showDashboard(){
		return View::make('inner/dashboard');
	}
}
