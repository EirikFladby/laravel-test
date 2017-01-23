<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// controller for double
class DoubleController extends Controller {
   
    // method for double page
    public function double() {
        return view('/double');
    }
    
    // method for double result page
    public function calculateDouble(Request $request) {
        // take into account that 'body' can be of double value, using floatval() to get float value
       $val = $request->input('body'); // fetch input 
       $float_value_of_val = floatval($val)*2;
       return view('/doubleresult', ['variable' => $float_value_of_val]); // send variable to view
    }
}