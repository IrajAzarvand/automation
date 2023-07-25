<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use HasFactory;
        $Users = [
            [
                'fName' => 'مدیر',
                'lName' => 'سیستم',
                'personnelCode' => '0000',
                // 'password' => Hash::make('123456'),
                'branch_id' => '1',
                'unit_id' => '3',
                'post_id' => '1',
            ],
            [
                'fName' => 'ایرج',
                'lName' => 'آذروند',
                'personnelCode' => '6105',
                // 'password' => Hash::make('123456'),
                'branch_id' => '1', //ستاد
                'unit_id' => '3', //انفورماتیک
                'post_id' => '5', //کارشناس
            ],
            [
                'fName' => 'محمد',
                'lName' => 'نصرالهی',
                'personnelCode' => '1234',
                // 'password' => Hash::make('123456'),
                'branch_id' => '1',
                'unit_id' => '3',
                'post_id' => '4',
            ],
        ];
        foreach ($Users as $user) {
            DB::table('users')->insert([
                'fName' => $user['fName'],
                'lName' => $user['lName'],
                'personnelCode' => $user['personnelCode'],
                // 'password' => $user['password'],
                'branch_id' => $user['branch_id'],
                'unit_id' => $user['unit_id'],
                'post_id' => $user['post_id'],
            ]);

        }

        $faker = Faker::create();

        for ($i = 1; $i <= 250; $i++) {

            DB::table('users')->insert([
                'fname' => $faker->firstName(),
                'lname' => $faker->lastName(),
                'email' => $faker->email(),
                'mobileNumber' => $faker->randomNumber(5),
                'telegramNumber' => $faker->randomNumber(5),
                'whatsappNumber' => $faker->randomNumber(5),
                'localNumber' => $faker->randomNumber(3),
                'personnelCode' => $faker->randomNumber(4),
                'gender' => $faker->numberBetween(0, 1),
                'branch_id' => $faker->numberBetween(1, 6),
                'unit_id' => $faker->numberBetween(1, 5),
                'post_id' => $faker->numberBetween(1, 11),
            ]);
        }

    }
}
