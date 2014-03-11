<?php namespace AAMedical\Repos;

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		12/03/2014
*	Updated:	13/03/2014
*   Purpose:	This class binds all repositories interfaces with their implementation...
**/
  

use Illuminate\Support\ServiceProvider;

class ReposServiceProvider extends ServiceProvider
{


	/**
	 * 	
	 *	This function which is used to bind each interface with it's implementation so that when a controller 
	 * (or any other class) class the implementation the autoloader would know where to find it
	 * @return nothing
	 */

	public function register()
	{
		$this->app->bind(
			'AAMedical\Repos\Medic\MedicRepository',
			'AAMedical\Repos\Medic\EloquentMedicRepository'
		);

		$this->app->bind(
			'AAMedical\Repos\Ambulance\AmbulanceRepository',
			'AAMedical\Repos\Ambulance\EloquentAmbulanceRepository'
		);

		$this->app->bind(
			'AAMedical\Repos\Patient\PatientRepository',
			'AAMedical\Repos\Patient\EloquentPatientRepository'
		);

		$this->app->bind(
			'AAMedical\Repos\Appointment\AppointmentRepository',
			'AAMedical\Repos\Appointment\EloquentAppointmentRepository'
		);
		$this->app->bind(
			'AAMedical\Repos\User\UserRepository',
			'AAMedical\Repos\User\EloquentUserRepository'
		);
	}
}