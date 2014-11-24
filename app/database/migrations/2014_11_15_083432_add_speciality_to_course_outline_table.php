<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSpecialityToCourseOutlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('course_outlines', function(Blueprint $table)
		{
			$table->string('specialty')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('course_outlines', function(Blueprint $table)
		{
			$table->dropColumn('specialty');
		});
	}

}
