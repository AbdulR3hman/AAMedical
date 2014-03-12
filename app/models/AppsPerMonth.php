<?php

class AppsPerMonth extends \Eloquent {
    protected $fillable = [];

    protected $table = 'appsPerMonth';


    /*
    |
    \
    |	Updates the statistical info about appointments per month
    /
    |
    */
    public static function data($date)
    {
    	$me = new static;
    	$updatedMonth = $date->month;
    	$month = $me::find($updatedMonth);
   		$month->apps = $month->apps + 1;     	
    	$month->save();
    }

}