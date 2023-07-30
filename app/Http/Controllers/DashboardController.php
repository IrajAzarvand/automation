<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function loadDashboard()
    {


        if (Auth::user()->id == '1') //user is admin
        {
            return redirect()->route("adminDashboard");
        } else //user us regular system user
        {
            return redirect()->route("userDashboard");
        }
    }
}
