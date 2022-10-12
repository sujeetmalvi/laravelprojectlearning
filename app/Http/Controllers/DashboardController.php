<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(){
        return view('Dashboard/Dashboard');
    }

    public function blank(){
        return view('blank');
    }




}
