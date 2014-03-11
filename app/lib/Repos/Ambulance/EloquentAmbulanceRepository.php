<?php 

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		13/02/2014
*	Updated:	
*   Purpose:	This class provides an implementation for the appointment repository interface
**/


namespace AAMedical\Repos\Ambulance;

use Ambulance;

class EloquentAmbulanceRepository implements AmbulanceRepository
{


	/**
	 * A method which use eloquent ORM to retrieve all appointments
	 *
	 * @return Collection of Appointments
	 */

	public function all()
	{
		return Ambulance::all();
	}


	/**
	 * Finds an appointment using appointment ID
	 *
	 * @return a model (or possibly a laravel collection )
	 */

	public function find($id)
	{
		return Ambulance::find($id);
	}


	/**
	 * Creates new appointment
	 *
	 * @return boolean
	 */

	public function create($input)
	{
		return Ambulance::create($input);
	}

}