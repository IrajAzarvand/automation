<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $letterTypes = [
            'عادی', //1
            'محرمانه', //2
            'سری', //3
        ];

        foreach ($letterTypes as $letterType) {
            DB::table('letter_types')->insert([
                'letterType' => $letterType,
            ]);
        }

    }
}
