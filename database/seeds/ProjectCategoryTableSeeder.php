<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProjectCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_project_category')->insert( [
            [
                'project_category_id' => '1',
                'project_id' => '1',
            ],
            [
                'project_category_id' => '3',
                'project_id' => '1',
            ],
            [
                'project_category_id' => '4',
                'project_id' => '2',
            ],
            [
                'project_category_id' => '3',
                'project_id' => '2',
            ],
            [
                'project_category_id' => '2',
                'project_id' => '2',
            ],
            [
                'project_category_id' => '3',
                'project_id' => '3',
            ],
            [
                'project_category_id' => '1',
                'project_id' => '4',
            ],
            [
                'project_category_id' => '1',
                'project_id' => '5',
            ],
            [
                'project_category_id' => '1',
                'project_id' => '6',
            ],
            [
                'project_category_id' => '2',
                'project_id' => '7',
            ],
            [
                'project_category_id' => '4',
                'project_id' => '5',
            ],
            [
                'project_category_id' => '2',
                'project_id' => '6',
            ],
        ]);
    }
}
