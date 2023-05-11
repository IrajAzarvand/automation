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

    public function storeSign(Request $request)
    {
        if($request->hasFile('file'))
        {
            $uploaded = $request->file('file');
            $uploaded->storeAs('public/Data/','sign.png');
            return true;
        }


    }
}
