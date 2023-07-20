<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

// {{ Titles()['App_Name'] }}
function Titles()
{

    return
        [
        'App_Name' => 'سیستم یکپارچه بستنی اطمینان',
        'Dashboard_Name' => 'ناحیه کاربری',
        'Dashboard_copyright' => 'طراحی و اجرا توسط واحد انفورماتیک',
    ];
}

// {{ User()['Full_Name'] }}
function User()
{

    $User = [
        'Id' => Auth::user()->id,
        'First_Name' => Auth::user()->fName,
        'Last_Name' => Auth::user()->lName,
        'Full_Name' => Auth::user()->fName . ' ' . Auth::user()->lName,
        'Post' => Auth::user()->post->postName,
        'Unit' => Auth::user()->unit->unitName,
        'email' => Auth::user()->email,
        'Mobile' => Auth::user()->mobileNumber,
        'Telegram' => Auth::user()->telegramNumber,
        'Whatsapp' => Auth::user()->whatsappNumber,
        // 'Menus' => UserMenus(Auth::user()->post->AdminMenus),
        // 'Profile_Photo' => asset('storage/Data/' . Auth::user()->id . '/profile/profile.jpg'),
        'user_sign' => asset('storage/Data/' . Auth::user()->id . '/sign/sign.png'),
    ];
    //set profile photo of user
    if (file_exists('storage/Data/' . Auth::user()->id . '/profile/profile.jpg')) {
        $User['Profile_Photo'] = asset('storage/Data/' . Auth::user()->id . '/profile/profile.jpg');
    } else {
        $User['Profile_Photo'] = asset('storage/Data/global/userIcon.png');
    }

    return $User;
}

function Menus()
{
    $adminMenus = [

        'داشبورد' => [
            'menuIcon' => 'bx-home-circle',
            'menuLink' => 'dashboard',
        ],

        'مدیریت کاربران' => [
            'menuIcon' => 'bx-user',
            'subItems' => [
                'مدیریت کاربران سیستم' => 'userManagement',
                'افزودن کاربر سیستم' => 'addUser',
            ],

        ],

        'مدیریت شعب و دفاتر' => [
            'menuIcon' => ' bx-shape-circle',
            'menuLink' => 'bupManagement',
        ],

        'مدیریت ارتباط درون سازمانی' => [
            'menuIcon' => 'bx-analyse',
            'menuLink' => 'test',
        ],

        'تنظیمات' => [
            'menuIcon' => 'bx-cog',
            'menuLink' => 'userProfileSetting',
        ],

    ];

    $userMenus = [

        'کارتابل نامه ها' => [
            'menuIcon' => 'bx-food-menu',
            'subItems' => [
                'نامه های من' => 'letters',
            ],

        ],

        'تنظیمات' => [
            'menuIcon' => 'bx-cog',
            'menuLink' => 'userProfileSetting',
        ],

    ];

    if (Auth::user()->id == 1) {

        return $adminMenus;
    } else {
        return $userMenus;
    }
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