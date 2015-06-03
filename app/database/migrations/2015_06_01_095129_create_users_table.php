// app/database/migrations/####_##_##_######_create_users_table.php

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('users', function(Blueprint $table)
      {
          $table->increments('id');

          $table->string('username', 32);
          $table->string('password', 64);
                      // required for Laravel 4.1.26
          $table->string('remember_token', 100)->nullable();
          $table->string('nama');
	      $table->string('jabatan');
	      $table->integer('role');
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
      Schema::drop('users');
  }

}