<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programs', function($table){
	        $table->increments('id');
	        $table->string('nama')->unique();
	        $table->string('hari');
	        $table->string('jam');
	        $table->string('harga_tunai');
	        $table->string('uang_pangkal');
	        $table->string('spp');
            $table->timestamps();

	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('programs');
	}

}
