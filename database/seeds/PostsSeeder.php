<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog\Post::class, 20)->create();
        factory(Blog\Tag::class, 15)->create();
    }
}
