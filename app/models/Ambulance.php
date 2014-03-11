<?php
/**
*
*	Author: 	Abdul Al-Faraj
*	Degree:		Electronic And Computer Engineering	
*	Date:		10/02/2014
*	Updated:	10/02/2014
*   Purpose:	This class provides
**/

use Carbon\Carbon;
// use Illuminate\Support\Collection;


class Ambulance extends Eloquent {

	//Connect the the model to the amulances table within the database;
	protected $table = "ambulances";

	//All guraded proterties of the amblunaces that needs to be protected
	protected $guarded = array();

	//validation rules for all amblunce's models
	public static $rules = array();



	/**
	 * Defines the relationship between appointments and the ambulance model
	 *
	 * @return collection of appointmnets that belongs to the ambluances
	 */

	public function appointments()
	{
		return $this->hasMany('Appointment');
	}



	public  static function getFreeAmbs($date , $time)
	{
		$ambs = Ambulance::all();
		$appWanted = new Carbon($date.$time);
		$appCompared;
		$freeAmbs = New Collection();

		foreach ($ambs as $amb) 
		{
			
			$apps = $amb->appointments;
			
			if ($apps->count() == 0 )
			{
			 	$freeAmbs->push($amb);
			} 
			 else
			{
				foreach ($apps as $app)
				{
					$appCompared = new Carbon($app->date.$app->time);
					if(!($appWanted->eq($appCompared)))
					{
						$freeAmbs->push($amb);
						break;
					}			
				}
			}
		}

		return $freeAmbs;
	
	}
}
