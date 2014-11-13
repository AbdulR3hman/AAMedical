<?php

use AAMedical\Repos\Medic\MedicRepository as Medics;

class MedicsController extends BaseController {

	protected $medics;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */ 
	public function index()
	{
        $allMedics = Medic::paginate(10);
		return View::make('medics.manage')->with('medics' , $allMedics);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('medics.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$medic = new Medic();
		$medic->first_name = Input::get('firstname');
		$medic->last_name = Input::get('lastname');
		$medic->SSN = Input::get('SSN');
		$medic->contact = Input::get('contact');
		$medic->line_add1 = Input::get('add1');
		$medic->line_add2 = Input::get('add2');
		$medic->zip_code = Input::get('pcode');
		$medic->enrollment_type = Input::get('enrotype');
		$medic->enrollment_date = input::get('enrodate');
		$medic->available = input::get('aval');
		$medic->notes=Input::get('notes');
		$medic->save();

		return Redirect::intended('/medics/all');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $medic = Medic::find($id);
		return View::make('medics.show')->with('medic', $medic);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $medic = Medic::find($id);
		$medic->first_name = Input::get('firstname');
		$medic->last_name = Input::get('lastname');
		$medic->SSN = Input::get('SSN');
		$medic->contact = Input::get('contact');
		$medic->line_add1 = Input::get('add1');
		$medic->line_add2 = Input::get('add2');
		$medic->zip_code = Input::get('pcode');
		$medic->enrollment_type = Input::get('enrotype');
		$medic->enrollment_date = input::get('enrodate');
		$medic->available = input::get('aval');
		$medic->notes=Input::get('notes');
		$medic->save();

		return Redirect::intended('/medics/all');

	}

	/**
	 * Returns the medics who are free now
	 *
	 * @param 
	 * @return Response
	 */
	public function now()
	{
		$now = new Carbon\Carbon('now');
		$avalMedic = Medic::getFreeMedics($now, '');

		return View::make('medics.now')->with('medics', $avalMedic);
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
		$d = Medic::find($id);
		$d->delete();

		return Redirect::intended('/medics/all');
	}


	public function __construct(Medic $medics)
	{
		$this->medics = $medics;
	}

}
