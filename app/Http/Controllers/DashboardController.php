<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Service;

class DashboardController extends Controller
{
	// function for making the dashboard
    public function index(){

       // to get the total of all entities in the system
    	     $companies = Company::count();
    	     $services  = Service::count();
    	     $subscription = 0;

		     return view('dashboard.index')->with('company_total',$companies)->with('services_total',$services)->with('subscription_total',$subscription);
	}
}
