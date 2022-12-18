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
                'menuLink' => 'editPost',
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
                'menuLink' => 'users',
            ],
            //6
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'editPost',
            ],
            //7
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'حذف سمت',
                'menuIcon' => null,
                'menuLink' => 'removePost',
            ],
            //8
            [
                'post_id' => 1,
                'parentMenuId' => 4,
                'menuItem' => 'ویرایش اطلاعات سمت ها',
                'menuIcon' => null,
                'menuLink' => 'editPost',
            ],
            //9
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی سوم',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => 'editPost',
            ],
            //10
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'مدیریت سمت ها',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'editPost',
            ],
            //11
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'افزودن سمت جدید',
                'menuIcon' => null,
                'menuLink' => 'newPost',
            ],
            //12
            [
                'post_id' => 1,
                'parentMenuId' => 9,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'editPost',
            ],
            //13
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی چهارم',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'removePost',
            ],
            //14
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'ویرایش اطلاعات سمت ها',
                'menuIcon' => null,
                'menuLink' => 'editPost',
            ],
            //15
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'گزینه دوم منوی اول',
                'menuIcon' => null,
                'menuLink' => 'removePost',
            ],
            //16
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'گزینه دوم منوی دوم',
                'menuIcon' => null,
                'menuLink' => 'editPost',
            ],



            //17
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'منوی سوم',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => 'editPost',
            ],
            //10
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'مدیریت سمت ها',
                'menuIcon' => 'flaticon-381-id-card-5',
                'menuLink' => 'editPost',
            ],
            //11
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'افزودن سمت جدید',
                'menuIcon' => null,
                'menuLink' => 'newPost',
            ],
            //12
            [
                'post_id' => 1,
                'parentMenuId' => 17,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => null,
                'menuLink' => 'editPost',
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