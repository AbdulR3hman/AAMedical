<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		12/02/2014
*	Updated:	12/02/2014
*   Purpose:	This class provides the schema for the pivot table which relates both appointment and a medic.... 
**/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotAppointmentMedicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointment_medic', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('appointment_id')->unsigned()->index();
			$table->integer('medic_id')->unsigned()->index();
			$table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
			$table->foreign('medic_id')->references('id')->on('medics')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('appointment_medic');
	}

}
