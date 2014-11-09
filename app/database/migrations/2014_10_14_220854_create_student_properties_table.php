<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentPropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('studentProperties', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('level');
			$table->string('option');
			$table->integer('section')->unsigned();
			$table->integer('group')->unsigned();
			$table->integer('subGroup')->unsigned();
			$table->integer('student_id');
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
		Schema::drop('studentProperties');
	}

}
