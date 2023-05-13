<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Livewire\Admin\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

class DashboardController extends Controller
{
    public function loadDashboard()
    {
        if(Auth::user()->id=='1') //user is admin
        {
            return redirect()->route("adminDashboard");

        }
        else //user us regular system user
        {
            return redirect()->route("userDashboard");


        }
    }
}
