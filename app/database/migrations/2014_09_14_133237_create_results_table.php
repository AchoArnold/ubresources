<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('semester');
			$table->integer('user_id');
			$table->integer('course_id');
			$table->integer('ca');
			$table->integer('exam');
			$table->string('grade',2);
			$table->integer('year');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('course_id')->references('id')->on('courses');
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
		Schema::drop('results');
	}

}
