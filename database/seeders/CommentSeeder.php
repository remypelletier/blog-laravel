<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\support\Facades\Hash;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::factory()->count(3)->create();
    }
}
