<?php namespace AAMedical\Repos\Medic;


/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		13/02/2014
*	Updated:	
*   Purpose:	This class provides an implementation for the medic repository 
**/


use Medic;

class EloquentMedicRepository implements MedicRepository
{


	/**
	 * Finds all Medics in the DB
	 *
	 * @return Collection
	 */

	public function all()
	{
		return Medic::all();
	}


	/**
	 * 	find a medic by his/her ID
	 * @param $id
	 * @return A Medic
	 */

	public function find($id)
	{
		return Medic::find($id);
	}


	/**
	 * Creates a new medic
	 * @param  A medic model
	 * @return Confirmation
	 */

	public function create($input)
	{
		return Medic::create($input);
	}

}