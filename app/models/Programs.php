<?php

class Programs extends Eloquent {
	protected $fillable = array("nama", "hari", "jam", "harga_tunai", "uang_pangkal", "spp");
	protected $table = 'programs';
	
	public function siswa_kelas(){
        return $this->belongsTo('Siswa', 'id', 'id_program');
    }
}