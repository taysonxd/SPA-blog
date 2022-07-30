<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon as DateTime;
use App\Models\Category;
use App\Models\Tag;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $title = $this->faker->sentence(),
          'slug' => Str::slug($title),
          'author' => $this->faker->firstName(),
          'body' => $this->faker->paragraph(3, true),
          'category_id' => Category::factory(),
          'tag_id' => Tag::factory(),
          'published_at' => DateTime::now()->subDays(rand(0, 365))
        ];
    }
}
