<?php

class ProgramsController extends BaseController {

	public function __construct(){
        $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

	public function show(){

		$programs = Programs::with('siswa_kelas')->where('deleted', 0)->get();
		return View::make('inner/programs/programs', array('programs'=>$programs));
	}

	public function showEdit($id){
		$program = Programs::find($id);
		return View::make('inner/programs/_editForm', array('program'=>$program));
	}

	public function submitEdit($id){
		$program = Programs::find($id);
		$program->nama = Input::get('nama');
		$program->hari = Input::get('hari');
		$program->jam = Input::get('jam');
		$program->harga_tunai = Input::get('harga_tunai');
		$program->uang_pangkal = Input::get('uang_pangkal');
		$program->spp = Input::get('spp');
		if($program->save()){
			$alert = array('type'=>'success', 'message'=>'Program berhasil diubah!');
			Session::flash('alert', $alert);
			return Redirect::to('programs');
	 	}
	}
	public function submitAdd(){
		$program = new Programs;
		$program->nama = Input::get('nama');
		$program->hari = Input::get('hari');
		$program->jam = Input::get('jam');
		$program->harga_tunai = Input::get('harga_tunai');
		$program->uang_pangkal = Input::get('uang_pangkal');
		$program->spp = Input::get('spp');
		if($program->save()){
			$alert = array('type'=>'success', 'message'=>'Program berhasil ditambah!');
			Session::flash('alert', $alert);
		}
		return Redirect::to('programs');
 
	}
	
	public function showDelete($id){
		$program = Programs::find($id);
		return View::make('inner/programs/_delete', array('program'=>$program));
	}

	public function doDelete($id){
		$program = Programs::find($id);
		$program->deleted = 1;

		if($program->save()){
			$alert = array('type'=>'success', 'message'=>'Program berhasil dihapus!');
			Session::flash('alert', $alert);
		}
		return Redirect::to('programs');
	}
	
	public function showInfo($id){
		$program = Programs::find($id);
		return View::make('inner/programs/_info', array('program'=>$program));

	}
}
