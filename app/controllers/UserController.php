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

	public function showGantiPassword(){
		return View::make('inner/ganti_password/ganti_password');
	}

	public function doGantiPassword(){
		$user = Auth::user();

		$rules = array(
				'old_password'=>'required',
				'new_password'=>'required',
				'confirm_password'=>'required|same:new_password'
			);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('ganti_password')
       							->withErrors($validator);
		}
		if(Hash::check(Input::get('old_password'), $user->password)){
			$user->password = Hash::make(Input::get('new_password'));
			$user->save();
			$alert = array('type'=>'success', 'message'=>'Password berhasil diubah!');
			Session::flash('alert', $alert);
			return Redirect::to('ganti_password');
		} else {
			$alert = array('type'=>'danger', 'message'=>'Password Lama salah');
			Session::flash('alert', $alert);
			return Redirect::to('ganti_password');
		}

	}

	public function showUsers(){
		$users = User::all();
		return View::make('inner/users/users', array('users'=>$users));

	}

	public function submitAdd(){
		$rules = array(
				'username'=>array('required','regex:/[a-z|0-9|.]*/'),
				'password'=>'required',
				'confirm_password'=>'required|same:password',
				'jabatan'=>'required|'
			);
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('users')
       							->withErrors($validator)
       							->withInput();
		}

		$user = new User;
		$user->username = Input::get('username');
		$user->nama = Input::get('nama');
		$user->password = Hash::make(Input::get('password'));
		$user->jabatan = Input::get('jabatan');
		$user->role = 1;

		$user->save();
		$alert = array('type'=>'success', 'message'=>'User berhasil ditambah!');
		Session::flash('alert', $alert);
		return Redirect::to('users');
	}

	public function showDelete($id){
		$user = User::find($id);
		
		return View::make('inner/users/_delete', array('user'=>$user));
	}

	public function doDelete($id){
		$user = User::find($id);
		$user->delete();
		$alert = array('type'=>'success', 'message'=>'User berhasil dihapus!');
		Session::flash('alert', $alert);
		return Redirect::to('users');
	}
}
