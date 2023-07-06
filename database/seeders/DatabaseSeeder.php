<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        \App\Models\Book::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        \App\Models\Author::factory(10)->create();
        \App\Models\Genre::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            BookFactory::class
=======
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
>>>>>>> 67235890e50a68e654dd1b0542e2f12b7fc23700
        ]);
    }
}
