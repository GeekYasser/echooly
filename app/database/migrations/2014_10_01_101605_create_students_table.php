<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('lastName');
			$table->date('dob');
            $table->string('pob');
            $table->string('gender');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('level');
			$table->string('option');
			$table->integer('section')->unsigned();
			$table->integer('group')->unsigned();
			$table->integer('subGroup')->unsigned();
            $table->string('remember_token',100)->nullable();
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
		Schema::drop('students');
	}

}
