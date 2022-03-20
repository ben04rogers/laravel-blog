<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Clear tables
        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'title' => 'My family post',
            'body' => '<p>This is my family post</p>',
            'user_id' => $user->id,
            'category_id' => $family->id,
            'slug' => 'my-family-post',
            'excerpt' => '<p>This is my family post</p>'
        ]);

        Post::create([
            'title' => 'My Work post',
            'body' => '<p>This is my work post</p>',
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-work-post',
            'excerpt' => '<p>This is my work post</p>'
        ]);
    }
}
