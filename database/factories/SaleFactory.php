<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            /*
            Creo que no debemos de poblar este
            'cantidad' => $this->faker->randomNumber($nbDigits = 1, $strict = false), 
            'monto' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 200),, 
            'fecha',*/
        ];
    }
}
