<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert( [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'about' => 'admin',
                'role' => 'admin',
                'position' => 'admin',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alan Jackson',
                'email' => 'alan@gmail.com',
                'about' => 'I’m the editor for houseplants &amp; garden design articles on social, and I like to put each of those articles in the topic.',
                'role' => 'author',
                'position' => 'Secretar',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Christina Aguilera',
                'email' => 'christina@gmail.com',
                'about' => 'I’m the editor for houseplants &amp; garden design articles on social, and I like to put each of those articles in the topic.',
                'role' => 'author',
                'position' => 'Singer',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Mason Jenkins',
                'email' => 'mason@gmail.com',
                'about' => 'I’m the editor for houseplants &amp; garden design articles on social, and I like to put each of those articles in the topic.',
                'role' => 'author',
                'position' => 'Support',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Simona Halep',
                'email' => 'halep@gmail.com',
                'about' => 'I’m the editor for houseplants',
                'role' => 'author',
                'position' => 'Actress',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Rafael Nadal',
                'email' => 'nadal@gmail.com',
                'about' => 'I’m the editor for houseplants',
                'role' => 'author',
                'position' => 'TennisMan',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Maria Sharapova',
                'email' => 'sharapova@gmail.com',
                'about' => 'I’m the editor for houseplants',
                'role' => 'author',
                'position' => 'TennisWoman',
                'image' => 'img/bg-img/29.jpg',
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'remember_token' => str_random(10),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
