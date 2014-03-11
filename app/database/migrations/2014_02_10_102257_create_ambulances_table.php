<?php


/**
*
*	Author:		Abdul Al-faraj
*	Date:		10/02/2013
*	Purpose:	schema description of the Ambulances table
**/


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmbulancesTable extends Migration {

	/**
	 * Schema description to create ambulances table!!!
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ambulances', function($table){

			$table->increments('id');
			$table->integer('plate_number');
			$table->date('enrollment');
			$table->smallInteger('type');
			$table->timestamps();
		});

	}

	/**
	 * Schema description to drop ambulances table!!! [in case of rollback]
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ambulances');
	}

}
