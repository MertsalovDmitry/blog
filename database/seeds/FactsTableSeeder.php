<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class FactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert( [
            [               
                'image' => 'img/core-img/cf1.png',
                'title' => 'AWARDS',
                'count' => 20,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => 'img/core-img/cf2.png',
                'title' => 'PROJECTS',
                'count' => 70,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => 'img/core-img/cf3.png',
                'title' => 'HAPPY CLIENTS',
                'count' => 30,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'image' => 'img/core-img/cf4.png',
                'title' => 'REVENUE',
                'count' => 80,
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
