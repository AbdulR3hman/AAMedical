<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	00/02/2014
*   Purpose:	This class provides a controlling mechanism for the ambulance model... It passes the information to the  view layer 
*				Hence, abstracting the view from the database and from any models!!!
**/

use AAMedical\Repos\Ambulance\AmbulanceRepository as Ambulances;


class AmbulancesController extends \BaseController {

	private $ambulances;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$allAmbs = Ambulance::paginate(10);
		return View::make('ambulances.manage')->with('ambs' , $allAmbs);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ambulances.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$amb = new Ambulance();
		$amb->plate_number = Input::get('plate');
		$amb->enrollment = Input::get('enro');
		$amb->type = Input::get('type');

		$amb->save();
		return Redirect::intended('/ambs');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$amb = Ambulance::find($id);
		return View::make('ambulances.show')->with('amb', $amb);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$amb = Ambulance::find($id);
		$amb->plate_number = Input::get('plate');
		$amb->enrollment = Input::get('enro');
		$amb->type = Input::get('type');

		$amb->save();

		return Redirect::intended('/ambs');

	}

	/**
	 * Returns ambulances which are free now
	 *
	 * @param  
	 * @return Response
	 */
	public function now()
	{
		
		$now = new Carbon\Carbon('now');
		$avalAmbs = Ambulance::getFreeAmbs($now, '');

		return View::make('ambulances.now')->with('ambs', $avalAmbs);

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$d = Ambulance::find($id);
		$d->delete();

		return Redirect::intended('/ambs');
	}


	/**
	 * 
	 *
	 * @return 
	 */
	public function __construct(Ambulances $ambulances)
	{
		$this->ambulances = $ambulances;
	}


}