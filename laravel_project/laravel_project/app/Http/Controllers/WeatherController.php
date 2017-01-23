<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// controller for weather task
class WeatherController extends Controller {
    
    public function weatherPage(Request $request, $land, $fylke, $kommune, $stedsnavn) {
        $url = ('http://www.yr.no/sted/'.$land.'/'.$fylke.'/'.$kommune.'/'.$stedsnavn);
        return redirect($url);
    }
}