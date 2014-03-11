<?php 

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		13/02/2014
*	Updated:	
*   Purpose:	This class provides an implementation for the medic repository 
**/


namespace AAMedical\Repos\Appointment;

use Appointment;

class EloquentAppointmentRepository implements AppointmentRepository
{



	/**
	 * 	This method finds all appointment within database
	 *
	 * @return A laravel Collection 
	 */

	public function all()
	{
		return Appointment::all();
	}


	/**
	 * 	Finds the an appointment by it's ID
	 * @param $id
	 * @return A model
	 */

	public function find($id)
	{
		return Appointment::find($id);
	}

	/**
	 * 	creates new appointment
	 * @param $model
	 * @return confirmation
	 */
	public function create($input)
	{
		return Appointment::create($input);
	}

}