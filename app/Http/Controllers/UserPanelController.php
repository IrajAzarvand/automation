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
    public function profileSetting($selectedUser = null)
    {

        // if $selectedUser is null, this means the user himself wants to edit the profile
        // but if $selectedUser has some id, this means the admin selected a user to edit his profile
        if (User()['Id'] <> '1') {
            //if this user is not admin, we clear the  and can edit other users profile
            $selectedUser = null;
        }


        return view('User.profileSetting', compact('selectedUser'));
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
