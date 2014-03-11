<?php

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	12/02/2014
*   Purpose:	This class provides model skeleton to the appointments table
**/

use Illuminate\Support\Collection;
use Carbon\Carbon; 


class Appointment extends Eloquent {

	//links the model to the appointments table
	protected $table = "appointments";
	
	//guarded properties of an appointment
	protected $guarded = array();

	//rules that are applied upon any appointment -- used for validations!
	public static $rules = array();


	/**
	 * Defines the relationship of the appointment towards it's patients
	 *
	 * @return 
	 */

	public function patients()
	{
		return $this->belongsTo('Patient');
	}

	

	/**
	*
	* Find list of medics for a collection of appointments;
	*
	* @param $apps (Appointments Collection)
	* @return Medics Collection
	*
	**/ 
	public static function findMedics($apps)
	{
		$medics = new Collection();

		foreach ($apps as $app) {
			$medics->push($app->medics);
		}

		return $medics->toArray(); //[0]['id'];
	}


	public static function findAppointments($type, $date)
	{
		$me = new static;
		switch ($type) 
		{
			case 'NM':
				return $me->nextMonth($date);
				break;
			case 'NW':
				return $me->nextWeek($date);
				break;
			case 'PM':
				return $me->prevMonth($date);
				break;
			case 'PW':
				return $me->prevWeek($date);
				break;
			case 'CM':
				return $me->currentMonth($date);
				break;
			case 'CW':
				return $me->currentWeek($date);
				break;
			default:
				return $me->nextMonth($date);
				break;
		}
	}

	private function nextMonth($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == ($date->month+1) && $temp->year == $date->year )
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}

	private function nextWeek($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == $date->month && $temp->year == $date->year && $temp->weekOfYear == ($date->weekOfYear+1))
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}

	private function prevMonth($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == ($date->month-1) && $temp->year == $date->year )
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}


	private function prevWeek($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == $date->month && $temp->year == $date->year && $temp->weekOfYear == ($date->weekOfYear-1))
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}

	private function currentMonth($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == $date->month && $temp->year == $date->year)
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}

	private function currentWeek($date)
	{
		$apps = $this->all();
		$appsFound = new Collection();

		foreach ($apps as $app) {
			$temp = new Carbon($app->date);
			if ($temp->month == $date->month && $temp->year == $date->year)
			{
				$appsFound->push($app);
			}
		}

		return $appsFound;
	}

	/**
	* defines the relationship between  medics and appointments;
	*
	* @return Medics;
	**/
	public function medics()
	{
		return $this->belongsToMany('Medic');
	}


	/**
	 * Defines the relations of the appointment towards it's Ambulances
	 *
	 * @return 
	 */

	public function ambulances()
	{
		return $this->belongsTo('Ambulance');
	}

}
