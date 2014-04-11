<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table){
			$table->increments('id');
			$table->string('name')->nullable();
			$table->string('telephone')->nullable();
			$table->integer('faculty_id')->nullable();
			$table->integer('department_id')->nullable();
			$table->integer('level')->nullable();
			$table->integer('sex')->nullable();
			$table->string('location')->nullable();
			$table->integer('user_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
