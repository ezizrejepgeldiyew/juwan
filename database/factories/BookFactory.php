<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo' => fake()->imageUrl($width=100, $height=100),
            'name' => fake()->name,
            'category_id' => random_int(1,10),
            'author_id' => random_int(1,10),
            'ganre_id' => random_int(1,10),
            'audio' => 'audio//2023-05-27/1684866758_aydayozin-goyber-meni-2023.mp3',
            'file' => 'file/books/2023-05-31/Jumageldi Mülkiýew~Seljuklar-2010`Türkmen döwlet neşirýat gullugy.pdf',
            'description' => fake()->realText(120,2)
        ];
    }
}
