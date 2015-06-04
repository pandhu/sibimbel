<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('siswa', function($table){
	        $table->string('nis');
	        $table->date('tanggal');
	        $table->string('status');
	        $table->string('nama');
	        $table->string('panggilan');
	        $table->string('tempat_lahir');
	        $table->date('tanggal_lahir');
	        $table->string('agama');
	        $table->string('jenis_kelamin');
	        $table->string('asal_sekolah');
	        $table->string('nama_ayah');
	        $table->string('pekerjaan_ayah');
	        $table->string('nama_ibu');
	        $table->string('pekerjaan_ibu');
	        $table->string('alamat');
	        $table->string('kota');
	        $table->string('kode_pos');
	        $table->string('telp_siswa');
	        $table->string('telp_ortu');
	        $table->string('telp_rumah');
	        $table->integer('id_program');
	        $table->integer('pendaftaran');
	        $table->string('aktivasi');
	        $table->string('penerima');
	        $table->integer('deleted')->default(0);
	        $table->timestamps();

	    });	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('siswa');
	}

}
