<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPageLoader extends Controller
{
    function UserManagement()
    {
        return view('Admin.userManagement');
    }
}
