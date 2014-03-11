<?php

/**
*
*	Author:		Abdul Al-faraj
*	Date:		10/02/2013
*	Purpose:	schema description of the patients table
**/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Schema describtion to create patients table!!!
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function($table){
			
			//patient's info
			$table->increments('id');
			$table->string('SSN');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('line_add1');
			$table->string('line_add2');
			$table->string('zip_code');
			$table->integer('contact');


			//patient's hospital info
			$table->string('doctor_name');
			$table->string('hline_add1');
			$table->string('hline_add2');
			$table->string('hzip_code');

			//patient's personal data (includes health)
			$table->date('dob');
			$table->integer('weight');
			$table->integer('height');
			$table->integer('KFP');	//kidney failuer precentage

			//patient's transfer type and schedule types (can be added at later stage)
			$table->smallInteger('transfer_type');
			$table->smallInteger('schedule_type');


			//extra infomraiton
			$table->text('notes');
			$table->timestamps();
		});
	}

	/**
	 * Schema describtion to drop patients table!!! [in case of rollback]
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('patients');
	}

}
