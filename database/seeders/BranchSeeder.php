<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            'ستاد',
            'دفتر تبریز',
            'دفتر تهران شرق',
            'دفتر تهران غرب',
            'دفتر سلیمی',
            'دفتر قم',
        ];

        foreach ($branches as $value) {
            DB::table('branches')->insert([
                'branchName' => $value,
            ]);
        }
    }
}