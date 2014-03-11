<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	10/02/2014
*   Purpose:	This class provides a skeleton model for all patients within the patients table;
**/


class Patient extends Eloquent {

	//Connect the model to the patients table;
	protected $table = 'patients';
	
	//All guarded properties that needs protection are listed here
	protected $guarded = array();

	//Validation rules for any patient model
	public static $rules = array();


	/**
	 * Defines the patient relations to the appointments.
	 *
	 * @return string
	 */
	public function appointments()
	{
		return $this->HasMany('Appointment');
	}

	

}
