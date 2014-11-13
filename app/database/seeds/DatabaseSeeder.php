<?php
/**
*
*	Author:			Abdul AL-Faraj
*	Date Created:	10/02/2013
*	Date Updated:	12/02/2013
*	Purpose:		A Seeder Class which seeds tables with data used for quick admin testing/modifying
**/
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('PatientsTableSeeder');	
		//$this->call('UsersTableSeeder');
		//$this->call('MedicsTableSeeder');
		//$this->call('AppointmentsTableSeeder');
		//$this->call('AmbulancesTableSeeder');
		$this->call('AppsPerMonthSeeder');


	}

}

class AppsPerMonthSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();

		DB::table('appsPerMonth')->delete();

		AppsPerMonth::create(array(
			'month' => '1',
			'apps' => '0',
		));

		AppsPerMonth::create(array(
			'month' => '2',
			'apps' => '0',
		));

		AppsPerMonth::create(array(
			'month' => '3',
			'apps' => '0',
		));

		AppsPerMonth::create(array(
			'month' => '4',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '5',
			'apps' => '0',
		));



		AppsPerMonth::create(array(
			'month' => '6',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '7',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '8',
			'apps' => '0',
		));

		AppsPerMonth::create(array(
			'month' => '9',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '10',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '11',
			'apps' => '0',
		));


		AppsPerMonth::create(array(
			'month' => '12',
			'apps' => '0',
		));
	}
}


class AmbulancesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();

		DB::table('ambulances')->delete();

		Ambulance::create(array(
			'plate_number' => '100140041',
			'enrollment' => '2012/02/11',
			'type' => '1',

		));

	}
}

 
class AppointmentsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();

		Appointment::create(array(
			//'medic1_id' => '1',
			//'medic2_id' => '2',
			'patient_id' => '1',
			'ambulance_id' => '1',
			'from_add_1' => 'somehwere close',
			'from_add_2' => 'somehwere close',
			'from_zip_code' => '221231',

			'to_add_1' => 'somehwere close',
			'to_add_2' => 'somehwere close',
			'to_zip_code' => '221asdas1',

			'date' => '2014/02/15',
			'time' => '12:00:00',
			'notes' => 'no medical attention needed',

		));

	}
}

class MedicsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();

		//DB::table('medics')->delete();

		Medic::create(array(
			'SSN' => '1212DSD121S',
			'first_name' => 'Abdul',
			'last_name' => 'alfaraj',

			'line_add1' => '84 whitethor',
			'line_add2' => 'jesmond',
			'zip_code' => '32322',
			'contact' => '01912224443',

			'dob'=>'1991/01/05',
			'enrollment_date' => '2013/01/06',
		));

	}
}

class PatientsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard();

		DB::table('patients')->delete();

		Patient::create(array(
			'SSN' => '1212DSD121S',
			'first_name' => 'Abdul',
			'last_name' => 'alfaraj',

			'line_add1' => '84 whitethor',
			'line_add2' => 'jesmond',
			'zip_code' => '32322',
			'contact' => '01912224443',

			'doctor_name' => 'Dr Ja Ma',
			'hline_add1' => 'Grrendale Clinic',
			'hline_add2' => 'South New York',
			'hzip_code' => '66677',

			'dob'=>'1991/01/05',
			'weight' => '89',
			'height' => '162',
			'KFP' => '50',
			'transfer_type' => '2',
			'schedule_type' => '1',

		));

	}
}


class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//$this->call('UserTableSeeder');

		DB::table('users')->delete();
		User::create(array(
			'email' => 'admin@aa.com',
			'first_name' => 'Abdul',
			'last_name' => 'alfaraj',
			'dob'=>'1991/01/05',
			'password'=>'password',
			'admin' => '1',
		));

	}

}

