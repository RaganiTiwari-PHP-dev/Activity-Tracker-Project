<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index() //User
    {

        return view('dashboard.main'); //main for user
    }

    public function admin() //admin
    {

        return view('dashboard.admin'); //admin for admin
    }

    

}