<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genero' => $this->faker->randomElements($array = array ('Terror', 'Drama', 'Literatura', 'Juvenil', 'Cuentos', 'Acción'), $count = 1),
            //'genero' => $this->faker->sentence($nbWords = 2),
        ];
    }
}
