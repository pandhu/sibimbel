<?php

class Pembayaran extends \Eloquent {
	protected $fillable = array('tanggal', 'nis', 'pembayaran', 'jumlah', 'terbilang', 'penerima');
	protected $table = 'pembayaran';
	protected $primaryKey = "no_kuitansi";
	public function siswa(){
        return $this->belongsTo('Siswa', 'nis', 'nis');
    }

    public static $rules = array(
    		'tanggal'=>'required',
    		'nis'=>'required',
    		'jumlah'=>'numeric|required',
    		'pembayaran'=>'required',
    );

}	