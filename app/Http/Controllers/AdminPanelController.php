<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPanelController extends Controller
{
    function UserManagement()
    {
        return view('Admin.userManagement');

    }


    function AddUser()
    {
        return view('Admin.addUser');

    }

    public function StoreSign(Request $request)
    {
        if($request->hasFile('file'))
        {
            $uploaded = $request->file('file');
            $uploaded->storeAs('public/Data/','sign.png');
            return true;
        }
    }

    public function bupManagement(Request $request)
    {
        return view('Admin.bupManagement');
    }
}
