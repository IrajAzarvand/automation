<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // branch_id=>unitname
        $units = [
            'مدیریت',
            'خرید',
            'انفورماتیک',
            'فروش',
            'صادرات',
        ];

        foreach ($units as  $unit) {
            DB::table('units')->insert([
                'unitName' => $unit,
            ]);
        }
    }
}