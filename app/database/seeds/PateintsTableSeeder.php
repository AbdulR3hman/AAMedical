<?php

class PateintsTableSeeder extends Seeder {

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
			'schedual_type' => '1',

		));

		$this->command->info('Patients Table Seeded!!');
	}
}
