<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\CommentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            UserSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
