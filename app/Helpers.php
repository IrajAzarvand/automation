<?php

use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

function Titles()
// {{ Titles()['App_Name'] }}
{
    return
        [
            'App_Name' => 'سیستم یکپارچه بستنی اطمینان',
            'Dashboard_Name' => 'ناحیه کاربری',
            'Dashboard_copyright' => 'تمام حقوق محفوظ است، طراحی و اجرا توسط واحد انفورماتیک',

        ];
}

function User()
// {{ user()['Full_Name'] }}
{
    return [
        'First_Name' => Auth::user()->fName,
        'Last_Name' => Auth::user()->lName,
        'Full_Name' => Auth::user()->fName . ' ' . Auth::user()->lName,
        'Post' => Auth::user()->post->postName,
        'Menus' => Auth::user()->post->menus,

    ];
}

//set loggedin user menus
function UserMenus($Menus)
{

    // $MenuItems = [];
    // foreach ($Menus as $key => $item) {
    //     if (!$item['parentMenuId']) {
    //         $MenuItems[$item['id']] = $item['menuItem']; //collect main menus
    //     } else {
    //         $MenuItems[$item['parentMenuId']][$item['id']] = $item['menuItem'];
    //     }
    // }

    // dd();
}