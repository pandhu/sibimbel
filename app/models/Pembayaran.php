<?php

class Pembayaran extends \Eloquent {
	protected $fillable = array('tanggal', 'nis', 'pembayaran', 'jumlah', 'terbilang', 'penerima');
	protected $table = 'pembayaran';

	public function siswa(){
        return $this->belongsTo('Siswa', 'nis', 'nis');
    }

    public function staff(){
        return $this->belongsTo('Staff', 'penerima', 'id');
    }
}