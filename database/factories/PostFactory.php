<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // de su dung Faker
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = \App\Models\Post::class;
    public function definition()
    {
        return [
            //
            'title' => $this->faker->title,
            'body' => $this->faker->paragraph,
            'created_at' => now(),
        ];
    }
}
