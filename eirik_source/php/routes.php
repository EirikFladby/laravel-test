<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// STEP 3
Route::get('/date', 'DateController@date'); // load this controller for date, "@date" means get date function in DateController

// STEP 4
// (using double.blade.php, doubleresult.blade.php and layout.blade.php).
// Using layout so I don't have to define new views and controller because this simulates a real work environment.
// Had to include this:  protected $except = [
//       '/*'
//   ];
// in VerifyCsrfToken.php to make the request to /double/result work, due to an error: TokenMismatchException in VerifyCsrfToken.php Line 67
Route::get('/double', 'DoubleController@double');

// post result to /double/result by using calculateDouble function in the controller which returns new view
Route::post('/double/result', 'DoubleController@calculateDouble');



// STEP 5
// Assuming "input from request" is the parameters. Not sure what is intended with the XML link in the task. I display it as described in the task.
// I don't use the XML link since it doesn't look very well and the details are unclear. If I add varsel.xml at the end of the URL, I get the XML link.
// If I don't, I get the latest weather forecast. I could also have created a Route::post and send the parts of the URL as variables to the view 
// and display the XML file in a prettier way. Weather.blade.php was intended for this, but is currently not used and/or done.
Route::get ('/weather/{land}/{fylke}/{kommune}/{stedsnavn}', 'WeatherController@weatherPage');


//STEP 6
// Can't find App\Console\Commands\Faker\Factory in Faker.php, so the command doesn't work when: 
//$faker = Faker\Factory::create();
// and
// $this->info($faker->name);
// is used in Faker.php. Works in routes.php for some reason with the code below.


// testing Faker\Factory
Route::get('/customers',function(){
    $faker = Faker\Factory::create();

    $items = array();
    $limit = 10;

    for ($i = 0; $i < $limit; $i++) {
        
        $items[] = $faker->name . ', ';
    }
    return $items;
});