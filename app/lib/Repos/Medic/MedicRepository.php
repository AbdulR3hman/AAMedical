<?php namespace AAMedical\Repos\Medic;

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering
*	Date:		12/02/2014
*	Updated:	
*   Purpose:	This is an interface which will abstract the controller from the database layer
**/



interface MedicRepository 
{


	/**
	 * 
	 * All functions which are MUST be implemented
	 * 
	 */

	public function all();

	public function find($id);

	public function create($id);
}