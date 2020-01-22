<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_categories')->insert( [
            [
                'title' => 'Coffee Design',
                'filter' => '.design',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Garden Design',
                'filter' => '.garden',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Home Design',
                'filter' => '.home-design',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'title' => 'Office Design',
                'filter' => '.office-design',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],      
        ]);
    }
}
