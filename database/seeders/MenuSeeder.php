<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //post_id =1 for admin panel menu
        //post_id=null for regular user

        $Menus = [
            // MAIN MENUS START

            //1
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'داشبورد',
                'menuIcon' => 'flaticon-381-app',
                'menuLink' => null,
            ],
            //2
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت کاربران',
                'menuIcon' => 'flaticon-381-user-8',
                'menuLink' => null,
            ],
            //3
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت دفاتر',
                'menuIcon' => 'flaticon-381-networking-1',
                'menuLink' => null,
            ],
            //4
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت پست ها',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => null,
            ],
            //5
            [
                'post_id' => null,
                'parentMenuId' => null,
                'menuItem' => 'کارتابل نامه ها',
                'menuIcon' => 'flaticon-381-folder-6',
                'menuLink' => 'test',
            ],
            //6
            [
                'post_id' => null,
                'parentMenuId' => null,
                'menuItem' => 'تنظیمات',
                'menuIcon' => 'flaticon-381-settings-4',
                'menuLink' => 'test',
            ],

            // !MAIN MENUS END

            // SUB MENUS START


            //==FOR SYSTEM MANAGER
            //IF POST_ID = 1, THE USER IS ADMIN
            [
                'post_id' => 1,
                'parentMenuId' => 1,
                'menuItem' => 'ناحیه کاربری',
                'menuIcon' => null,
                'menuLink' => 'dashboard',
            ],


            [
                'post_id' => 1,
                'parentMenuId' => 2,
                'menuItem' => 'مدیریت کاربران سیستم',
                'menuIcon' => null,
                'menuLink' => 'userManagement',
            ],

            [
                'post_id' => 1,
                'parentMenuId' => 2,
                'menuItem' => 'افزودن کاربران سیستم',
                'menuIcon' => null,
                'menuLink' => 'addUser',
            ],

            [
                'post_id' => 1,
                'parentMenuId' => 3,
                'menuItem' => 'مدیریت ستاد و دفاتر',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //7
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'مدیریت پست و ارتباطات درون سازمانی',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //==END OF  SYSTEM MANAGER SUB MENU

            //==FOR REGULAR USERS

            [
                'post_id' => null,
                'parentMenuId' => 5,
                'menuItem' => 'نامه های من',
                'menuIcon' => null,
                'menuLink' => 'letters',
            ],

            [
                'post_id' => null,
                'parentMenuId' => 6,
                'menuItem' => 'تنظیمات پروفایل کاربر',
                'menuIcon' => null,
                'menuLink' => 'userProfileSetting',
            ],





        ];


        foreach ($Menus as $Item) {
            DB::table('menus')->insert([
                'post_id' => $Item['post_id'],
                'parentMenuId' => $Item['parentMenuId'],
                'menuItem' => $Item['menuItem'],
                'menuIcon' => $Item['menuIcon'],
                'menuLink' => $Item['menuLink'],
            ]);
        }
    }
}
