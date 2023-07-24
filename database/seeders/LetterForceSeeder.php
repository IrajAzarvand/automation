<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterForceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ForceTypes = [
            'عادی', //1
            'فوری', //2
            'آنی', //3
        ];

        foreach ($ForceTypes as $ForceType) {
            DB::table('letter_forces')->insert([
                'forceType' => $ForceType,
            ]);
        }

    }
}
