 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
 
//App::bind('MedicRepository', 'EloquentMedicRepository');



//Ambulances Routes:----------------------------------------------------------------------------------------------------------------------
Route::get('ambs/all', array('before' => 'auth', 'uses' => 'AmbulancesController@Index'));
Route::get('ambs/add', array('before' => 'auth', 'uses' => 'AmbulancesController@create'));
Route::get('ambs/store', array('before' => 'auth', 'uses' => 'AmbulancesController@store'));
Route::get('ambs/show/{id}', array('before' => 'auth', 'uses' => 'AmbulancesController@show'));
Route::get('ambs/edit/{id}', array('before' => 'auth', 'uses' => 'AmbulancesController@edit'));
Route::get('ambs/remove/{id}', array('before' => 'auth', 'uses' => 'AmbulancesController@destroy'));
Route::get('ambs/now', array('before' => 'auth', 'uses' => 'AmbulancesController@now'));




//Medics Routes:---------------------------------------------------------------------------------------------------------------------------
Route::get('medics/all', array('before' => 'auth', 'uses' => 'MedicsController@index'));
Route::get('medics/show/{id}', array('before' => 'auth', 'uses' => 'MedicsController@show'));
Route::get('medics/edit/{id}', array('before' => 'auth', 'uses' => 'MedicsController@edit'));
Route::get('medics/store', array('before' => 'auth', 'uses' => 'MedicsController@store'));
Route::get('medics/add', array('before' => 'auth', 'uses' => 'MedicsController@create'));
Route::get('medics/remove/{id}', array('before' => 'auth', 'uses' => 'MedicsController@destroy'));
Route::get('medics/now', array('before' => 'auth', 'uses' => 'MedicsController@now'));





//Patients Routes:-------------------------------------------------------------------------------------------------------------------------
Route::get('patients/all', array('before' => 'auth', 'uses' => 'PatientsController@index'));
Route::get('patients/add', array('before' => 'auth', 'uses' => 'PatientsController@create'));
Route::get('patients/store', array('before' => 'auth', 'uses' => 'PatientsController@store'));
Route::get('patients/show/{id}', array('before' => 'auth', 'uses' => 'PatientsController@show'));
Route::get('patients/edit/{id}', array('before' => 'auth', 'uses' => 'PatientsController@edit'));
Route::get('patients/remove/{id}', array('before' => 'auth', 'uses' => 'PatientsController@destroy'));



//Appointments Routes:----------------------------------------------------------------------------------------------------------------------
Route::get('/appointments/add/{userID}', array('before' => 'auth', 'uses' =>  'AppointmentsController@appTime'));
Route::get('/appointments/add', array('before' => 'auth', 'uses' =>  'AppointmentsController@create'));
Route::get('/appointments/store', array('before' => 'auth', 'uses' =>  'AppointmentsController@store'));
Route::get('/appointments/show/{id}', array('before' => 'auth', 'uses' =>  'AppointmentsController@showPatient'));
Route::get('/appointments/showAmb/{id}', array('before' => 'auth', 'uses' =>  'AppointmentsController@showAmb'));
Route::get('/appointments/showMedic/{id}', array('before' => 'auth', 'uses' =>  'AppointmentsController@showMedic'));	
	//calendar Routes
	Route::get('/Calender/{when}', array('before' => 'auth', 'uses' =>  'AppointmentsController@calander'));


//User Routes: 


//Main Routes:
//Route::get('/', array('before' => 'auth.user', 'uses' => 'HomeController@checkuser'));
Route::get('dashboard', array('before' => 'auth', 'uses' => 'HomeController@dashboard'));
Route::get('/', 'HomeController@loginPage');

//Log users in and keep session
Route::post('checkuser', 'HomeController@logUserIn');

//log users out and delete session
Route::get('/logout', 'HomeController@logUserOut');
 



// Route::get('/', function()
// 	{
// 		// $medics = Patient::find(2);
// 		//  return dd($medics->appointments->toJson());

// 		$app = new Appointment();
// 		$app->patient_id = 2;
// 		$app->ambulance_id = 2;
// 		$app->from_add_1 = "FSOME ROAD";
// 		$app->from_add_2 = '';
// 		$app->from_zip_code = 222223;
// 		$app->to_zip_code = 322222;
// 		$app->to_add_1 = "Idiot street";
// 		$app->to_add_2 = "Idiot state";
// 		$app->date = '2014-02-09';
// 		$app->time = '12:00';
// 		$app->notes = 'No notes your idiot';

// 		$app->save();

// 		$m = Medic::find(2);
// 		$m->appointments()->attach($app);
// 	});


//Extra Routes :: (for temp use and quick access)


// Route::get('/', function()
// { 
// 	$user = new User;
// 	$user->email = 'admin@aam.com';
// 	$user->first_name = 'Ahlam';
// 	$user->last_name = 'AbuFaraj';
// 	$user->dob = '1982/05/18';
// 	$user->password = Hash::make('password');
// 	$user->activated = '1';
// 	$user->admin = '1';

// 	 $user->save();
// });




  
Route::get('/about', function()
{
	//return View::make('home.about');
});

//Route::resource('ambulances', 'AmbulanceController');

 

