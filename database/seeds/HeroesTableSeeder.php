<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HeroesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert( [
            [
                'image' => 'img/bg-img/1.jpg',
                'header' => 'WEB DEVELOPMENT',
                'paragraph' => 'Create web projects with PHP / Laravel / JS / Vue.js / JQuery / HTML / CSS / Bootstrap',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/2.jpg',
                'header' => 'IT Outsourcing',
                'paragraph' => 'Technical Support /  Install & Setup OS Windows / Repair computers',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
        
    }
}
