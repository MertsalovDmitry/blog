<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert( [
            [
                'tag_id' => '1',
                'post_id' => '1',
            ],
            [
                'tag_id' => '3',
                'post_id' => '1',
            ],
        ]);
    }
}
