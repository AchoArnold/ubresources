<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTimetablesTableAddVenueChangeCourseCode extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('timetables', function(Blueprint $table){
			$table->string('venue')->after('end_at');
			$table->renameColumn('course_code', 'course_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropColumn('venue');
		Schema::table('timetables', function(Blueprint $table){
			$table->renameColumn('course_id', 'course_code');
		});
	}

}
