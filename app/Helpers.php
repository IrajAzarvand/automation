<?php

use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

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
// {{ User()['Full_Name'] }}
{

    $User = [
        'Id' => Auth::user()->id,
        'First_Name' => Auth::user()->fName,
        'Last_Name' => Auth::user()->lName,
        'Full_Name' => Auth::user()->fName . ' ' . Auth::user()->lName,
        'Post' => Auth::user()->post->postName,
        'email' => Auth::user()->email,
        'Mobile' => Auth::user()->mobileNumber,
        'Telegram' => Auth::user()->telegramNumber,
        'Whatsapp' => Auth::user()->whatsappNumber,
        'Menus' => UserMenus(Auth::user()->post->AdminMenus),
        'Profile_Photo'=>asset('storage/Data/' . Auth::user()->id . '/profile/profile.jpg'),
        'user_sign'=>asset('storage/Data/' . Auth::user()->id . '/sign/sign.png'),
    ];

    return $User;
}


//set loggedin user menus
function UserMenus($Menus)
{
    if (!count($Menus)) {
        //this means the user is not admin and regular menus for all users should be loaded.
        $Menus = Menu::whereNull('post_id')->get();
    }
    $MENUS = [];
    foreach ($Menus as $key => $menu) {
        if (!$menu->parentMenuId) { //create parent menu
            $MENUS[$menu->id]['title'] = $menu->menuItem;
            $MENUS[$menu->id]['menuIcon'] = $menu->menuIcon;
        } else { //create submenu for an existing parent
            $MENUS[$menu->parentMenuId]['menus'][$key]['menuItem'] = $menu->menuItem;
            $MENUS[$menu->parentMenuId]['menus'][$key]['menuLink'] = $menu->menuLink;
        }
    }

    return $MENUS;
}

function SetUserStatusOnline($UserId)
{
    $user = User::find($UserId);
    $user->update(['status' => true]);
}
function SetUserStatusOffline($UserId)
{
    $user = User::find($UserId);
    $user->update(['status' => false]);
}

