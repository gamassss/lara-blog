<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //title, category_id, slug, author, excerpt, body
        return [
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1, 3),
            'title' => fake()->sentence(4, 6),
            'slug' => fake()->unique()->slug(3),
            'excerpt' => fake()->sentence(20, 30),
            'body' => fake()->paragraphs(5, 10)
        ];
    }
}
