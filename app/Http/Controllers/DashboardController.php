<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\User;
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


//            $lazyCollection = Letter::lazy();
//            dd(($lazyCollection->all()));

//            foreach ($letters as $letter) {
//                $letter->id=UuidBinSwap(str_pad($letter->id,16))[1];
//
//            }
//                dd($letters);


            return redirect()->route("adminDashboard");
        } else //user us regular system user
        {
            return redirect()->route("userDashboard");
        }
    }
}
