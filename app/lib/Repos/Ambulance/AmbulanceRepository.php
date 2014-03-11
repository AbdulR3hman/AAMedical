<?php namespace AAMedical\Repos\Ambulance;

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering
*	Date:		13/02/2014
*	Updated:	
*   Purpose:	This is an interface which will abstract the controller from the database layer the implementation is in a different class
**/



interface AmbulanceRepository 
{


	/**
	 * All the methods which are required to be implemented for all appointments
	 *
	 * 
	 */

	public function all();

	public function find($id);

	public function create($id);
}