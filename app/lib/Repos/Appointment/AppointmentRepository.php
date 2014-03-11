<?php namespace AAMedical\Repos\Appointment;

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering
*	Date:		12/02/2014
*	Updated:	
*   Purpose:	An interface repository which will force implementation to follow certain functions...
**/



interface AppointmentRepository 
{


	/**
	 * 
	 * All the functions which are required to be implemented by any class which implement this interface
	 * 
	 */

	public function all();

	public function find($id);

	public function create($id);
}