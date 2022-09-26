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
            'title' => $this->faker->sentence(4, 6),
            'slug' => $this->faker->unique()->slug(3),
            'excerpt' => $this->faker->sentence(20, 30),
            // 'body' => '<p>'. implode('<p></p>',$this->faker->paragraphs(mt_rand(5,10))).'</p>'
            'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode('')
        ];
    }
}
