<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Book::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Author::factory(10)->create();
        \App\Models\Genre::factory(10)->create();
        // BookFactory::factory(10)->create();
        // $this->call([
        //     // RoleSeeder::class,
        //     // AdminSeeder::class,
        //     BookFactory::class
        // ]);
    }
}
