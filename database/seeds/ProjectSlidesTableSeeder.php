<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectSlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_slides')->insert( [
            [
                'title' => 'Single Portfolio Slide 1',
                'image' => 'img/bg-img/26.jpg',
                'project_id' => '1',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 2',
                'image' => 'img/bg-img/27.jpg',
                'project_id' => '1',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 3',
                'image' => 'img/bg-img/28.jpg',
                'project_id' => '1',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], 
            [
                'title' => 'Single Portfolio Slide 1',
                'image' => 'img/bg-img/26.jpg',
                'project_id' => '2',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 2',
                'image' => 'img/bg-img/27.jpg',
                'project_id' => '2',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 3',
                'image' => 'img/bg-img/28.jpg',
                'project_id' => '2',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], 
            [
                'title' => 'Single Portfolio Slide 1',
                'image' => 'img/bg-img/26.jpg',
                'project_id' => '3',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 2',
                'image' => 'img/bg-img/27.jpg',
                'project_id' => '3',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Single Portfolio Slide 3',
                'image' => 'img/bg-img/28.jpg',
                'project_id' => '3',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],      
        ]);
    }
}
