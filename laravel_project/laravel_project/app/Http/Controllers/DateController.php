<?php

namespace App\Http\Controllers;

// controller for route date
class DateController extends Controller {
    public function date() {
        $ldate = date('Y-m-d H:i:s');
        return view('/date', ['variable' => $ldate]);
    }
}