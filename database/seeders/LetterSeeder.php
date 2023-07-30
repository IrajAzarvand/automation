<?php

namespace Database\Seeders;

use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 1000000; $i++) {

            DB::table('letters')->insert([
                'id' => UuidBinSwap(uuid_create()),
                'subject' => $faker->text(15),
                'abstract' => $faker->text($maxNbChars = 100),
                'letterBody' => $faker->text($maxNbChars = 500),
                'letterNumber' => $faker->randomNumber(5),
                'createDate' => $faker->randomDigit,
//                'createdUser' => $faker->numberBetween(0, 20),
//                'signedUser' => $faker->numberBetween(0, 20),
                'letter_type_id' => $faker->numberBetween(1, 3),
                'letter_force_id' => $faker->numberBetween(1, 3),
            ]);
        }

    }
}
