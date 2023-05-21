<?php

namespace App\Http\Controllers;

use App\Models\UserPanel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPanelController extends Controller
{
    /**
     * load user profile setting
     *
     * @return \Illuminate\Http\Response
     */
    public function profileSetting()
    {
        return view('User.profileSetting');

    }


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
