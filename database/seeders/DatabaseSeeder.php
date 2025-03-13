<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use http\Client\Curl\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
         \App\Models\News::factory(10)->create();
         \App\Models\Category::factory(6)->create();
         \App\Models\Article::factory(100)->create();
        \App\Models\Comments::factory(500)->create();
        \App\Models\NewsComments::factory(100)->create();




        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
