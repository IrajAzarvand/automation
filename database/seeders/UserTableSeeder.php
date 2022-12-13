<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = [
            [
                'fName' => 'مدیر',
                'lName' => 'سیستم',
                'personnelCode' => '0000',
                'password' => Hash::make('12345678'),
                'branch_id' => '1',
                'unit_id' => '3',
                'post_id' => '1',
            ],
            [
                'fName' => 'ایرج',
                'lName' => 'آذروند',
                'personnelCode' => '6105',
                'password' => Hash::make('12345678'),
                'branch_id' => '1',
                'unit_id' => '3',
                'post_id' => '1',
            ],
            [
                'fName' => 'محمد',
                'lName' => 'نصرالهی',
                'personnelCode' => '1234',
                'password' => Hash::make('12345678'),
                'branch_id' => '1',
                'unit_id' => '3',
                'post_id' => '3',
            ],
        ];
        foreach ($Users as $user) {
            DB::table('users')->insert([
                'fName' => $user['fName'],
                'lName' => $user['lName'],
                'personnelCode' => $user['personnelCode'],
                'password' => $user['password'],
                'branch_id' => $user['branch_id'],
                'unit_id' => $user['unit_id'],
                'post_id' => $user['post_id'],
            ]);
        }
    }
}