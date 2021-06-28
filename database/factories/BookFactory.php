<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' =>  $this->faker->sentence(1),
            'author' => $this->faker->name(),
            'precio' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 200),
            'image' => 'img/' . $this->faker->image('public/img', 200, 250, null, false),
            'stock' => $this->faker->randomNumber($nbDigits = 3, $strict = false),
        ];
    }
}
