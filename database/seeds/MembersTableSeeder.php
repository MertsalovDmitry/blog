<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert( [
            [
                'image' => 'img/bg-img/team1.png',
                'name' => 'Joseph Corbin',
                'position' => 'CEO &amp; Founder',
                'vk' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'telegram' => '#',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/team2.png',
                'name' => 'Tasha Deserio',
                'position' => 'Garden Designer',
                'vk' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'telegram' => '#',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/team3.png',
                'name' => 'Cody Baker',
                'position' => 'Plan Manager',
                'vk' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'telegram' => '#',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/team4.png',
                'name' => 'Pearl Kansas',
                'position' => 'Marketer',
                'vk' => '#',
                'facebook' => '#',
                'linkedin' => '#',
                'telegram' => '#',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
        ]);
    }
}
