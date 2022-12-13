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
                'menuItem' => 'مدیریت منوها',
                'menuIcon' => 'flaticon-381-menu-1',
                'menuLink' => null,
            ],
            //2
            [
                'post_id' => 1,
                'parentMenuId' => 1,
                'menuItem' => 'افزودن منوی جدید',
                'menuIcon' => 'flaticon-381-controls-3',
                'menuLink' => null,
            ],
            //3
            [
                'post_id' => 1,
                'parentMenuId' => 1,
                'menuItem' => 'ویرایش منوها',
                'menuIcon' => 'flaticon-381-repeat-1',
                'menuLink' => null,
            ],
            //4
            [
                'post_id' => 1,
                'parentMenuId' => 3,
                'menuItem' => 'حذف منوها',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //5
            [
                'post_id' => null,
                'parentMenuId' => null,
                'menuItem' => 'مکاتبات',
                'menuIcon' => 'flaticon-381-notepad-1',
                'menuLink' => null,
            ],
            //6
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت کاربران',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //7
            [
                'post_id' => 1,
                'parentMenuId' => 6,
                'menuItem' => 'افزودن کاربر جدید',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //8
            [
                'post_id' => 1,
                'parentMenuId' => 6,
                'menuItem' => 'ویرایش کاربران',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //9
            [
                'post_id' => 1,
                'parentMenuId' => 8,
                'menuItem' => 'حذف کاربر',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //10
            [
                'post_id' => 1,
                'parentMenuId' => 8,
                'menuItem' => 'ویرایش اطلاعات کاربران',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //11
            [
                'post_id' => 1,
                'parentMenuId' => null,
                'menuItem' => 'مدیریت سمت ها',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //12
            [
                'post_id' => 1,
                'parentMenuId' => 11,
                'menuItem' => 'افزودن سمت جدید',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //13
            [
                'post_id' => 1,
                'parentMenuId' => 11,
                'menuItem' => 'ویرایش سمت ها',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //14
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'حذف سمت',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
            //15
            [
                'post_id' => 1,
                'parentMenuId' => 13,
                'menuItem' => 'ویرایش اطلاعات سمت ها',
                'menuIcon' => 'flaticon-381-trash-1',
                'menuLink' => null,
            ],
        ];


        foreach ($Menus as $Item) {
            DB::table('menus')->insert([
                'post_id' => $Item['post_id'],
                // 'menuLevel' => $Item['menuLevel'],
                'parentMenuId' => $Item['parentMenuId'],
                'menuItem' => $Item['menuItem'],
                'menuIcon' => $Item['menuIcon'],
                'menuLink' => $Item['menuLink'],
            ]);
        }
    }
}