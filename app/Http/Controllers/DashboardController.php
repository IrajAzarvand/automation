<?php

namespace App\Http\Controllers;

use Livewire\Livewire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Livewire\Admin\Dashboard;

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
