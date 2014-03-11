<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function dashboard()
	{

		$currentUser = Auth::user()->first_name;
		View::share('name', $currentUser);
		return View::make('hello');
		
	}


	/**
	*
	*	Loginpage function. checks if user is already has a session, if not redirect to login page
	*
	*	@return redirect user
	**/
	public function loginPage()
	{
		if(Auth::check())
		{
			return Redirect::intended('dashboard');
		}
		else 
		{
			return View::make('home.loginPage');
		}
				
	}	


	/**
	*
	*	Check User's Creds
	*
	*	@return direct user
	**/
	public function logUserIn()
	{

		$mail = Input::get('email');
		$pass  = Input::get('password');

		if(Auth::attempt ( array('email' =>  $mail, 'password' => $pass )))
		{

			return Redirect::intended('dashboard');
		}
		else
		{
			return Redirect::to('/')->with('note', 'Email or password used is not valid, please try again');

		}
	}

	/**
	*
	*	Logs user out
	*
	*	@return direct user
	**/
	public function logUserOut()
	{

		Auth::logout();
		return Redirect::to('/');
	}



}