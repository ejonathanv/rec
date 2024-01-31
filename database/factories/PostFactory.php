<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $cover = 'https://picsum.photos/1200/' . rand(700, 1200);
        $category = Category::inRandomOrder()->first();
        $type = $this->faker->randomElement(['post', 'pdf']);
        if($type == 'pdf'){
            $cover = null;
        }else{
            $pdfPath = 'pdfs/' . $this->faker->word() . '.pdf';
        }

        return [
            'user_id' => User::factory(),
            'category_id' => $category ? $category->id : null, 
            'title' => $title,
            'resume' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'cover' => $cover ?? null,
            'slug' => Str::slug($title),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'type' => $type,
            'pdfPath' => $pdfPath ?? null,
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
