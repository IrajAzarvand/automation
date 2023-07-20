<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserPanelController extends Controller
{

    /**
     * load user letters page
     *
     * @return \Illuminate\Http\Response
     */
    public function letters()
    {
        return view('User.letters');
    }
}