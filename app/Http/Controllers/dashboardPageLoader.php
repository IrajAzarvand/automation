<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardPageLoader extends Controller
{
    function UserManagement()
    {
        return view('Admin.userManagement');
    }

    public function storeSign(Request $request)
    {
        $uploaded = $request->file('file');
        // $uploaded->storeAs('public\Data\newUserSign\\', $uploaded->getClientOriginalName());
        $uploaded->storeAs('public/Data/','tst.jpg');


    }
}
