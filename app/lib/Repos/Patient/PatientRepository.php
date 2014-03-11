<?php namespace AAMedical\Repos\Patient;

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering
*	Date:		12/02/2014
*	Updated:	
*   Purpose:	This is an interface which will abstract the controller from the database layer
**/



interface PatientRepository 
{
	public function all();

	public function find($id);

	public function create($id);
}