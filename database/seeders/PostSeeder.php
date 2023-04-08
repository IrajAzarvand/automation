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
            'مدیر سامانه',  //1
            'مدیر عامل',    //2
            'مسئول دفتر',   //3
            'مسئول واحد',   //4
            'کارشناس',      //5
            'مسئول شعبه',   //6
            'حسابدار',      //7
            'منشی فروش',    //8
            'صدور فاکتور',  //9
            'کمک حسابدار',  //10
            'صندوقدار',     //11
        ];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'postName' => $post,
            ]);
        }
    }
}
