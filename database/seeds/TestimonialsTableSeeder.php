<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert( [
            [
                'image' => 'img/bg-img/13.jpg',
                'header' => 'TESTIMONIAL',
                'title' => 'Some kind words from clients about Alazea',
                'message' => 'Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!',
                'user_name' => 'Mr. Nick Jonas',
                'user_position' => 'CEO of NAVATECH',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/14.jpg',
                'header' => 'TESTIMONIAL',
                'title' => 'Some kind words from clients about Alazea',
                'message' => 'Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!',
                'user_name' => 'Mr. Nazrul Islam',
                'user_position' => 'CEO of NAVATECH',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
            [
                'image' => 'img/bg-img/15.jpg',
                'header' => 'TESTIMONIAL',
                'title' => 'Some kind words from clients about Alazea',
                'message' => 'Alazea is a pleasure to work with. Their ideas are creative, they came up with imaginative solutions to some tricky issues, their landscaping and planting contacts are equally excellent we have a beautiful but also manageable garden as a result. Thank you!',
                'user_name' => 'Mr. Jonas Nick',
                'user_position' => 'CEO of NAVATECH',
                'active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
        ]);
    }
}