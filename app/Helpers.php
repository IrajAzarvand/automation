<?php

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
        'Menus' => UserMenus(Auth::user()->post->menus),

    ];
}

//set loggedin user menus
function UserMenus($Menus)
{
    $MENUS = [];
    foreach ($Menus as $key => $menu) {
        if (!$menu->parentMenuId) { //create parent menu
            $MENUS[$menu->id]['title'] = $menu->menuItem;
            $MENUS[$menu->id]['menuIcon'] = $menu->menuIcon;
        } else { //create sunmenu for an existing parent
            $MENUS[$menu->parentMenuId]['menus'][$key]['menuItem'] = $menu->menuItem;
            $MENUS[$menu->parentMenuId]['menus'][$key]['menuLink'] = $menu->menuLink;
        }
    }
    // dd($Menus, $MENUS);

    return $MENUS;
}
