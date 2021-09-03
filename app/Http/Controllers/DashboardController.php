<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //================ DASHBORD ARE HERE =================

    public function Dashboard(){

        return view('backend.dashboard');
    }
}
