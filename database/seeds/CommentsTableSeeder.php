<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert( [
            [
                'commentable_id' => '1',
                'commentable_type' => 'App\Post',
                'user_id' => '5',
                'parent_id' => '0',
                'active' => 1,
                'body' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        DB::table('comments')->insert( [
            [
                'commentable_id' => '1',
                'commentable_type' => 'App\Post',
                'user_id' => '6',
                'parent_id' => '1',
                'active' => 1,
                'body' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'commentable_id' => '1',
                'commentable_type' => 'App\Post',
                'user_id' => '7',
                'active' => 1,
                'parent_id' => '0',
                'body' => 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
