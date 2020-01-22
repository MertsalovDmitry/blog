<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            HeroesTableSeeder::class,
            TestimonialsTableSeeder::class,
            MembersTableSeeder::class,
            FactsTableSeeder::class,
            ContactsTableSeeder::class,
            UsersTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,
            CommentsTableSeeder::class,
            TagsPostsTableSeeder::class,
            ProjectCategoriesTableSeeder::class,           
            ProjectTableSeeder::class,
            ProjectCategoryTableSeeder::class,
        ]);
    }
}
