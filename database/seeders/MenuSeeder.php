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
        $Menus = [
            //1
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'داشبورد',
                'menuIcon' => 'flaticon-381-user-9',
                'menuLink' => null,
            ],
            //2
            [
                'post_id' => 1,
                'parentMenuId' => 1,
                'menuItem' => 'ناحیه کاربری',
                'menuIcon' => null,
                'menuLink' => 'dashboard',
            ],
            //3
            [
                'post_id' => null,
                'parentMenuId' => null,
                'menuItem' => 'مکاتبات',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => 'test',
            ],
            //4
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت کاربران',
                'menuIcon' => 'flaticon-381-user-9',
                'menuLink' => null,
            ],
            //5
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'ویرایش کاربران سیستم',
                'menuIcon' => null,
                'menuLink' => 'userManagement',
            ],
            //6
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //7
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'حذف سمت',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //8
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'ویرایش اطلاعات سمت ها',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //9
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی سوم',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => 'test',
            ],
            //10
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'مدیریت سمت ها',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'test',
            ],
            //11
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'افزودن سمت جدید',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //12
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //13
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی چهارم',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'test',
            ],
            //14
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'ویرایش اطلاعات سمت ها',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //15
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'گزینه دوم منوی اول',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //16
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'گزینه دوم منوی دوم',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],



            //17
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی سوم',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => 'test',
            ],
            //10
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'مدیریت سمت ها',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'test',
            ],
            //11
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'افزودن سمت جدید',
                'menuIcon' => null,
                'menuLink' => 'test',
            ],
            //12
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'test',
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