<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	00/02/2014
*   Purpose:	This class provides a controlling mechanism for the Patient's model... It passes the information to the  view layer 
*				Hence, abstracting the view from the database and from any models!!!
**/

use AAMedical\Repos\Patient\PatientRepository as Patients;


class PatientsController extends \BaseController {


	private $patients;
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$allPatients = Patient::paginate(10);
		return View::make('patients.manage')->with('patients' , $allPatients);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('patients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
			$patient = new Patient;
			$patient->first_name = Input::get('firstname');
			$patient->last_name = Input::get('lastname');
			$patient->SSN = Input::get('SSN');
			$patient->contact = Input::get('contact');
			$patient->line_add1 = Input::get('add1');
			$patient->line_add2 = Input::get('add2');
			$patient->zip_code = Input::get('zcode');
			$patient->doctor_name = Input::get('clinic');
			$patient->hline_add1 = Input::get('cadd1');
			$patient->hline_add2 = Input::get('cadd2');
			$patient->hzip_code = Input::get('cliniczipcode');
			$patient->weight=Input::get('weight');
			$patient->height=Input::get('height');
			$patient->dob = Input::get('dob');
			$patient->KFP = Input::get('failure');
			$patient->transfer_type = input::get('transport');
			$patient->schedule_type = input::get('schedule');
			$patient->notes=Input::get('notes');
			$patient->save();

			return Redirect::intended('/patients/all');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$patient = Patient::find($id);
	
		return View::make('patients.show')->with('patient', $patient);


	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$patient = Patient::find($id);
		$patient->first_name = Input::get('firstname');
		$patient->last_name = Input::get('lastname');
		$patient->SSN = Input::get('SSN');
		$patient->contact = Input::get('contact');
		$patient->line_add1 = Input::get('add1');
		$patient->line_add2 = Input::get('add2');
		$patient->zip_code = Input::get('zcode');
		$patient->doctor_name = Input::get('clinic');
		$patient->hline_add1 = Input::get('cadd1');
		$patient->hline_add2 = Input::get('cadd2');
		$patient->hzip_code = Input::get('cliniczipcode');
		$patient->transfer_type = input::get('transport');
		$patient->schedule_type = input::get('schedule');
		$patient->notes=Input::get('notes');
		$patient->save();

		return Redirect::intended('/patients/all');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$d = Patient::find($id);
		$d->delete();

		return Redirect::intended('/patients/all');
	}


	/**
	 * A constructor for the Patients controller
	 *	
	 * @return 
	 */
	public function __construct(Patients $patients)
	{
		$this->patients = $patients;
	}


}
