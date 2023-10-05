<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    use RefreshDatabase;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6),
            'content' => fake()->paragraph(20),
            'slug' => fake()->slug(),
            'user_id' => DB::table('users')->inRandomOrder()->first()->id,
            'category_id' => DB::table('categories')->inRandomOrder()->first()->id
        ];
    }
}
/**
 * userid
 * categoryid
 */