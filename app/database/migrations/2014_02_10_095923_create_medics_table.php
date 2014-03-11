<?php

/**
*
*	Author:		Abdul Al-faraj
*	Date:		10/02/2013
*	Purpose:	schema description of the medical personal table
**/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicsTable extends Migration {

	/**
	 * Schema description to create medics table!!!
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medics', function($table){
			
			//medics's info
			$table->increments('id');
			$table->string('SSN');

			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('line_add1');
			$table->string('line_add2');
			$table->string('zip_code');
			$table->integer('contact');
			$table->date('dob');

			//enrollment
			$table->date('enrollment_date');
			$table->integer('available')->default(0); 	//0 available, 1 not
			$table->string('enrollment_type',50)->default('full time');


			//extra information
			$table->text('notes');
			$table->timestamps();
		});
	}

	/**
	 * Schema description to drop medics table!!! [in case of rollback]
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('medics');

	}

}
