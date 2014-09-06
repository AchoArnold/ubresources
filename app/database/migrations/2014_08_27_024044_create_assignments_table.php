<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('content');
			$table->integer('author_id');
			$table->foreign('author_id')->references('id')->on('users');
			$table->integer('course_id');
			$table->foreign('course_id')->references('id')->on('courses');
			$table->string('level');
			$table->datetime('given_at');
			$table->string('uri');
			$table->datetime('due_at')->nullable();
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
		Schema::drop('assignments');
	}

}
