<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timetables', function(Blueprint $table){
			$table->increments('id');
			$table->integer('department_id');
			$table->integer('level');
			$table->char('course_code', 5);
			$table->integer('day');
			$table->time('start_at');
			$table->time('end_at');
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
		Schema::drop('timetables');
	}

}
