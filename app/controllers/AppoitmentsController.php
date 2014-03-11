<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	00/02/2014
*   Purpose:	This class provides a controlling mechanism for the appointments model... It passes the information to the  view layer 
*				Hence, abstracting the view from the database and from any models!!!
**/

use AAMedical\Repos\Appointment\AppointmentRepository as Appointments;
use Carbon\Carbon; 

class AppointmentsController extends \BaseController {

	
	private $appointments;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		echo $this->appointments->all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$userID = Cache::get('userID');
		$date = Input::get('date');
		$time = Input::get('time');


		//create a cache for data and time to be accessed by the store method
		Cache::put('date', $date, 10);
		Cache::put('time', $time, 10);


		$patient = Patient::find($userID);
		if ($patient == null)
		{
		 	App::abort(403, 'Unauthorized action.');
		}


		$medics = Medic::getFreeMedics($date, $time);
		$ambulances = Ambulance::getFreeAmbs($date, $time);
		$name = strtoupper($patient->first_name.' '.$patient->last_name);

		return View::make('appointments.create')
					->with('pname', $name)
					->with('ambs', $ambulances)
					->with('medics', $medics);

			
		// $view->pname = $name;
		// $view->pID = $patient->id;
		// $view->ambs = $Ambs;
		// $view->medics = $medics;

	}

	public function appTime($userID)
	{
		Cache::put('userID', $userID, 10);	//expires after 10 minutes
		return View::make('appointments.time');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$patient = Patient::find(Cache::get('userID'));
		$newApp = new Appointment();
		$newApp->patient_id =$patient->id;
		$newApp->ambulance_id = Input::get('amb');
		$newApp->from_add_1 = Input::get('padd1');
		$newApp->from_add_2 = Input::get('padd2');
		$newApp->to_add_1 = Input::get('dadd1');
		$newApp->to_add_2 = Input::get('dadd2');
		$newApp->from_zip_code = Input::get('pcode');
		$newApp->to_zip_code = Input::get('dcode');
		$newApp->date = Cache::get('date');
		$newApp->time = Cache::get('time');

		$newApp->save();


		$m1 = Medic::find(Input::get('medic1'));
		$m2 = Medic::find(Input::get('medic2'));
		
		$m1->appointments()->attach($newApp);
		$m2->appointments()->attach($newApp);		//attach both medics to the pivot table
		

		//for now return to medics, but remember to redirect to the page of appoitnments for that certain user
		return Redirect::intended('/medics');

	}

	/**
	 * Display the specified appointments for a patient.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showPatient($id)
	{
		//

		$patient = Patient::find($id);

		if($patient == null)
		{
			App::abort(403, 'Patient is not Found!!!! Noughty, WHAT ARE YOU DOING?');
		}
		$apps = $patient->appointments;
		$medics = Appointment::findMedics($apps);
		$name = $patient->first_name.' '.$patient->last_name;
		return View::make('appointments.patient')
			->with('apps', $apps)
			->with('patient', $name)
			->with('medics', $medics);
	}	

	public function showAmb($id)
	{
		//

		$amb = Ambulance::find($id);

		if($amb == null)
		{
			App::abort(403, 'Ambulance is not Found!!!! Noughty, WHAT ARE YOU DOING?');
		}
		$apps = $amb->appointments;
		$medics = Appointment::findMedics($apps);
		$amb = $amb->plate_number;
		return View::make('appointments.ambs')
			->with('apps', $apps)
			->with('amb', $amb)
			->with('medics', $medics);
	}	

	public function showMedic($id)
	{
		//

		$medic = Medic::find($id);

		if($medic == null)
		{
			App::abort(403, 'Medic is not Found!!!! Noughty, WHAT ARE YOU DOING?');
		}

		$apps = $medic->appointments;
		// $medics = Appointment::findMedics($apps);
		 $name = $medic->first_name.' '.$medic->last_name;
		return View::make('appointments.medic')
			->with('apps', $apps)
			 ->with('medic', $name);
			// ->with('medics', $medics);
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
	}

	/**
	*
	*	Looks for all appointments within this current month 
	*
	* @return AppointmentsCollection
	**/
	public function calander($when)
	{
		$now = new Carbon();
		$apps = Appointment::findAppointments($when, $now);
		$medics = Appointment::findMedics($apps);


		return View::make('appointments.calendar.mastercalendar')
				->with('apps', $apps)
				->with('medics', $medics);
	}

	public function __construct(Appointments $appointments)
	{
		$this->appointments = $appointments;
	}
}