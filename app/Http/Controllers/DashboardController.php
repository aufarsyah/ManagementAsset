<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_page()
    {
    	return view('institution_sensors_map');
    }
}
