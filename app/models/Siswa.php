<?php

class Siswa extends Eloquent {
	protected $fillable = array("nis", "tanggal", "status", "nama", "panggilan", "tempat_lahir", "tanggal_lahir", "agama", "jenis_kelamin", "asal_sekolah", "nama_ayah", "pekerjaan_ayah", "nama_ibu", "pekerjaan_ibu", "alamat", "kota", "kode_pos", "telp_siswa", "telp_ortu", "telp_rumah", "id_program", "aktivasi", "penerima");
	protected $table = 'siswa';
    protected $primaryKey = 'nis';

	public function kelas(){
        return $this->hasOne('Programs', 'id', 'id_program');
    }

    public function pembayaran(){
        return $this->hasMany('Pembayaran', 'nis', 'nis');
    }

    public static $rules = array(
			'nama'=> 'required',
			'panggilan'=> 'required',
			'tempat_lahir'=> 'required',
			'tanggal_lahir'=> 'required',
			'agama'=> 'required',
			'jenis_kelamin'=> 'required',
			'asal_sekolah'=> 'required',
			'nama_ayah'=> 'required',
			'pekerjaan_ayah'=> 'required',
			'nama_ibu'=> 'required',
			'pekerjaan_ibu'=> 'required',
			'alamat'=> 'required',
			'kota'=> 'required',
			'kode_pos'=> 'numeric',
			'telp_siswa'=> 'numeric|required',
			'telp_ortu'=> 'required|numeric',
			'telp_rumah'=> 'required|required',
			'id_program'=> 'required',
			'pendaftaran'=> 'required',
			'status'=> 'required',
		);
}