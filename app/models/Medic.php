<?php

/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	12/02/2014
*   Purpose:	This class provides skeleton model for all medics within the mdeics table
**/

use Carbon\Carbon;
// use Illuminate\Support\Collection;


class Medic extends Eloquent {
	

	//Guarded properties of a Medic
	protected $guarded = array();

	//Rules used to validate medics
	public static $rules = array();


	//point to the right table within MySQL
	protected $table = 'medics';


	/**
	 * Defines the relationship between any medic and the appointments
	 *
	 * @return collections of appointments that belongs to this medic
	 */

	public function appointments(){
		return $this->belongsToMany('Appointment');
	}
	

	public  static function getFreeMedics($date , $time)
	{
		$medics = Medic::all();
		$appWanted = new Carbon($date.$time);
		$appCompared;
		$freeMedics = New Collection();

		foreach ($medics as $medic) 
		{
			
			
			$apps = $medic->appointments;
			 if ($apps->count() == 0 )
			{
			 	$freeMedics->push($medic);
			} 
			 else
			{
				foreach ($apps as $app)
				{
					$appCompared = new Carbon($app->date.$app->time);
					if(!($appWanted->eq($appCompared)))
					{
						$freeMedics->push($medic);
						break;	//if we find one time where medic is free, add him/her and break out
					}

				}
			}
		}

		return $freeMedics;
	}
}
