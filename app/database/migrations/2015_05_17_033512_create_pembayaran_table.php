<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pembayaran', function($table){
	        $table->string('no_kuitansi');
	        $table->date('tanggal');
	        $table->string('nis');
	        $table->string('pembayaran');
	        $table->integer('jumlah');
	        $table->string('terbilang');
	        $table->string('penerima');
	        $table->primary('no_kuitansi');
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pembayaran');
	}

}
