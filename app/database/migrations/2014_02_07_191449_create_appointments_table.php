<?php

/**
*
*	Author:		Abdul Al-faraj
*	Date:		10/02/2013
*	Purpose:	schema description of the users appointments table
**/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration {

	/**
	 * Schema description to create appointments table!!!
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function($table){
			
			$table->increments('id');

			//relations id to other tables -- It is important to notice that the relation between the appointments and medics are provided in a pivot table
			$table->integer('patient_id');
			$table->integer('ambulance_id');

			//appointments details:
			{	
				//address of patient pickups			
				$table->string('from_add_1');
				$table->string('from_add_2');
				$table->string('from_zip_code');

				//address of patient drop off point
				$table->string('to_add_1');
				$table->string('to_add_2');
				$table->string('to_zip_code');

				//appointment date and time
				$table->date('date');
				$table->time('time');

				//extra
				$table->text('notes');
				$table->timestamps();
			}	
		});
	}

	/**
	 * Schema description to drop appointments table!!! [in case of rollback]
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('appointments');
	}

}
