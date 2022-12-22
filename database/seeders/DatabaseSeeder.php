<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(3)->create();   
        // \App\Models\Category::factory(2)->create();   
        \App\Models\Post::factory(20)->create();     

        \App\Models\Category::factory(1)->create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        \App\Models\Category::factory(1)->create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        
        \App\Models\Category::factory(1)->create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
    }
}
