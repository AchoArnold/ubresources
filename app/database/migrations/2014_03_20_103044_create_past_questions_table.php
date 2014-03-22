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
			$table->char('course_code',5);
			$table->boolean('type');
			$table->date('date');
			$table->string('link');
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