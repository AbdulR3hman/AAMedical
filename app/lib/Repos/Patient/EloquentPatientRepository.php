<?php namespace AAMedical\Repos\Patient;


/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		13/02/2014
*	Updated:	
*   Purpose:	This class provides an implementation for the Patient repository 
**/


use Patient;

class EloquentPatientRepository implements PatientRepository
{


	/**
	 * 	Finds all patinets in DB
	 *
	 * @return Collection
	 */

	public function all()
	{
		return Patient::all();
	}


	/**
	 * Finds a patient based on thier ID
	 * @param $ID
	 * @return Patient Model
	 */

	public function find($id)
	{
		return Patient::find($id);
	}


	/**
	 * 	creates new patient
	 * @param A patinet Model
	 * @return Confimration (in different form)
	 */

	public function create($input)
	{
		return Patient::create($input);
	}

}