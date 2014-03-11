<?php

/**
*
*	Author:		Abdul Al-faraj
*	Date:		10/02/2013
*	Purpose:	schema description of the uers personal table
**/

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Schema describtion to create users table!!!
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($table){

			$table->increments('id');
			$table->string('email');
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->date('dob');
			$table->string('password');
			$table->boolean('activated')->default(0);
			$table->smallInteger('admin')->default(0);
			$table->timestamps();
		});

	}

	/**
	 * Schema describtion to drop users table!!! [in case of rollback]
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
