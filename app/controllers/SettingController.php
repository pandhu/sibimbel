<?php

use Carbon\Carbon;
class SettingController extends BaseController {

	public function __construct(){
        $this->beforeFilter('auth', ['except' => 'login']);
        $this->beforeFilter('csrf', ['on' => 'post']);
    }

	public function showGeneral(){
		$setting = Setting::lists('value','key');
		$tahun_ajaran_option = array(
			'1415'=>'2014/2015',
			'1516'=>'2015/2016',
			'1617'=>'2016/2017',
			'1718'=>'2017/2018',
			'1819'=>'2018/2019',
			'1920'=>'2019/2020',
			'2021'=>'2020/2021',
		);
		return View::make('inner/setting/general', array('setting'=>$setting, 'tahun_ajaran_option'=>$tahun_ajaran_option));
	}

	public function submitChange(){
		
		$inputs = Input::all();
		foreach ($inputs as $key => $value) {

			if($key == '_token') continue;
			$setting = Setting::find($key);
			$setting->value = $value;
			$setting->save();
		}
			$alert = array('type'=>'success', 'message'=>'Setting berhasil diubah!');
			Session::flash('alert', $alert);
			return Redirect::to('setting');
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
