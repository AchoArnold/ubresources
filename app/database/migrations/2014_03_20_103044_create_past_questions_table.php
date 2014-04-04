<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('past_questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('department_id');
			$table->integer('level');
			$table->integer('semester');
			$table->integer('course_code');
			$table->integer('type');
			$table->date('date');
			$table->string('file_path');
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
		Schema::drop('past_questions');
	}

}