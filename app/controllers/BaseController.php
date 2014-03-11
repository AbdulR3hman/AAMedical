<?php
/**
*
*	Author: 	Abdul Al-Faraj 
*	Degree:		Electronic And Computer Engineering	
*	Date:		00/00/0000
*	Updated:	00/02/2014
*   Purpose:	TThis is the base control for the main page
**/


class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}