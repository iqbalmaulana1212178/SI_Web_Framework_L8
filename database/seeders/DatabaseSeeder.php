<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // User::factory(5)->create();
        // User::create([
        //     'name' => 'iqbal',
        //     'email' => 'sdjgf@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Riski',
        //     'email' => 'rsiki@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Music',
            'slug' => 'music'
        ]);
        Category::create([
            'name' => 'Love',
            'slug' => 'love'
        ]);
        Category::create([
            'name' => 'Zodiac',
            'slug' => 'zodiac'
        ]);
        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);
        Category::create([
            'name' => 'Love Education',
            'slug' => 'love-education'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Firsto Bampusu',
        //     'slug'=> 'firsto-bampusu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima, doloribus debitis molestiae deserunt nostrum amet nihil natus mollitia cupiditate!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos, aperiam facere quasi eaque ducimus mollitia minus laudantium distinctio ab tempore neque error quidem id pariatur unde corrupti, vel saepe, iure nisi. Laudantium eligendi itaque, in atque quisquam excepturi officiis labore ab ipsa porro nostrum, nisi neque quas, esse sapiente.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Secondo Bampusu',
        //     'slug'=> 'secondo-bampusu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima, doloribus debitis molestiae deserunt nostrum amet nihil natus mollitia cupiditate!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos, aperiam facere quasi eaque ducimus mollitia minus laudantium distinctio ab tempore neque error quidem id pariatur unde corrupti, vel saepe, iure nisi. Laudantium eligendi itaque, in atque quisquam excepturi officiis labore ab ipsa porro nostrum, nisi neque quas, esse sapiente.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);Post::create([
        //     'title' => 'Coding  With Hey',
        //     'slug'=> 'coding-with-hey',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima, doloribus debitis molestiae deserunt nostrum amet nihil natus mollitia cupiditate!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos, aperiam facere quasi eaque ducimus mollitia minus laudantium distinctio ab tempore neque error quidem id pariatur unde corrupti, vel saepe, iure nisi. Laudantium eligendi itaque, in atque quisquam excepturi officiis labore ab ipsa porro nostrum, nisi neque quas, esse sapiente.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Riski Bikin Naga',
        //     'slug'=> 'riski-bikin-naga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima, doloribus debitis molestiae deserunt nostrum amet nihil natus mollitia cupiditate!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eos, aperiam facere quasi eaque ducimus mollitia minus laudantium distinctio ab tempore neque error quidem id pariatur unde corrupti, vel saepe, iure nisi. Laudantium eligendi itaque, in atque quisquam excepturi officiis labore ab ipsa porro nostrum, nisi neque quas, esse sapiente.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
