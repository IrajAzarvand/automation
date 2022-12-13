<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            'مدیر سامانه',
            'مدیر عامل',
            'مسئول دفتر',
            'مسئول واحد',
            'کارشناس',
            'مسئول شعبه',
            'حسابدار',
            'منشی فروش',
            'صدور فاکتور',
            'کمک حسابدار',
            'صندوقدار',
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'postName' => $post,
            ]);
        }
    }
}