<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{

    public function StoreSign(Request $request)
    {
        if ($request->hasFile('file')) {
            $uploaded = $request->file('file');
            $uploaded->storeAs('public/Data/', 'sign.png');
            return true;
        }
    }


}
