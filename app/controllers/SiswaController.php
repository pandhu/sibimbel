<?php
use Carbon\Carbon;
class SiswaController extends BaseController {

	public function show(){

		$siswas = Siswa::with('kelas')->where('deleted', 0)->orderBy('id_program', 'desc')->get();
		
		return View::make('inner/siswa/main', array('siswas'=>$siswas));
	}

	public function showEdit($id){
		$siswa = Siswa::find($id);
		$today = Carbon::now()->toDateString();
		$programs = Programs::lists('nama', 'id');
		return View::make('inner/siswa/edit', array('siswa'=>$siswa, 'programs'=>$programs, 'today'=>$today));
	}

	public function showDetil($id){
		$siswa = Siswa::find($id);

		return View::make('inner/siswa/_detil', array('siswa'=>$siswa));
	}

	public function submitEdit($id){
		$siswa = Siswa::find($id);

		$validator = Validator::make(Input::all(), Siswa::$rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('siswa/edit/'.$id)
       							->withErrors($validator)
       							->withInput();
		}

		$siswa->nama = Input::get('nama');
		$siswa->panggilan = Input::get('panggilan');
		$siswa->tempat_lahir = Input::get('tempat_lahir');
		$siswa->tanggal_lahir = Input::get('tanggal_lahir');
		$siswa->agama = Input::get('agama');
		$siswa->jenis_kelamin = Input::get('jenis_kelamin');
		$siswa->asal_sekolah = Input::get('asal_sekolah');
		$siswa->nama_ayah = Input::get('nama_ayah');
		$siswa->pekerjaan_ayah = Input::get('pekerjaan_ayah');
		$siswa->nama_ibu = Input::get('nama_ibu');
		$siswa->pekerjaan_ibu = Input::get('pekerjaan_ibu');
		$siswa->alamat = Input::get('alamat');
		$siswa->kota = Input::get('kota');
		$siswa->kode_pos = Input::get('kode_pos');
		$siswa->telp_siswa = Input::get('telp_siswa');
		$siswa->telp_ortu = Input::get('telp_ortu');
		$siswa->telp_rumah = Input::get('telp_rumah');
		$siswa->id_program = Input::get('id_program');
		$siswa->status = Input::get('status');

		if($siswa->save()){
			$alert = array('type'=>'success', 'message'=>'Data siswa berhasil diubah!');
			Session::flash('alert', $alert);
			return Redirect::to('siswa/edit/'.$id);
	 	}
	}
	public function submitAdd(){
		$siswa = new Siswa;
		$tahun_ajaran = DB::table('setting')->where('key', 'tahun_ajaran')->first()->value;
		$last_siswa = Siswa::where('nis', 'like', $tahun_ajaran.'%')->orderby('nis', 'desc')->get()->first();
		

		if($last_siswa == NULL){
			$siswa->nis = $tahun_ajaran.'0001';
		} else 
			$siswa->nis = (string)((int)$last_siswa->nis + 1);
		
	

		$validator = Validator::make(Input::all(), Siswa::$rules);
		if ($validator->fails()) {
       		$messages = $validator->messages();
       		return Redirect::to('register')
       							->withErrors($validator)
       							->withInput();
		}

		$siswa->tanggal = date("Y-m-d", strtotime(Input::get('tanggal')));
		$siswa->nama = Input::get('nama');
		$siswa->panggilan = Input::get('panggilan');
		$siswa->tempat_lahir = Input::get('tempat_lahir');
		$siswa->tanggal_lahir = date("Y-m-d", strtotime(Input::get('tanggal_lahir')));
		$siswa->agama = Input::get('agama');
		$siswa->jenis_kelamin = Input::get('jenis_kelamin');
		$siswa->asal_sekolah = Input::get('asal_sekolah');
		$siswa->nama_ayah = Input::get('nama_ayah');
		$siswa->pekerjaan_ayah = Input::get('pekerjaan_ayah');
		$siswa->nama_ibu = Input::get('nama_ibu');
		$siswa->pekerjaan_ibu = Input::get('pekerjaan_ibu');
		$siswa->alamat = Input::get('alamat');
		$siswa->kota = Input::get('kota');
		$siswa->kode_pos = Input::get('kode_pos');
		$siswa->telp_siswa = Input::get('telp_siswa');
		$siswa->telp_ortu = Input::get('telp_ortu');
		$siswa->telp_rumah = Input::get('telp_rumah');
		$siswa->id_program = Input::get('id_program');
		$siswa->pendaftaran = Input::get('pendaftaran');
		$siswa->penerima = Auth::user()->nama;
		$siswa->status = Input::get('status');
		$siswa->aktivasi = Input::get('aktivasi');

		$nis = $siswa->nis;
		if($siswa->save()){
			$alert = array('type'=>'success', 'message'=>'Program berhasil ditambah!');
			Session::flash('alert', $alert);
			return Redirect::to('register/success/'.$nis);
		}
	}
	public function showDelete($id){
		$siswa = Siswa::find($id);
		return View::make('inner/siswa/_delete', array('siswa'=>$siswa));
	}

	public function doDelete($id){
		$siswa = Siswa::find($id);
		$siswa->deleted = 1;

		if($siswa->save()){
			$alert = array('type'=>'success', 'message'=>'Siswa berhasil dihapus!');
			Session::flash('alert', $alert);
		}
		return Redirect::to('siswa');
	}
	
}
