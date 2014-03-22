<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpDesksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('help_desks', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 20)->nullable();
			$table->string('email', 32);
			$table->integer('telephone')->nullable();
			$table->string('content');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('supports');
	}

}
