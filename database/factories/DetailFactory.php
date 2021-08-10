<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->buildingNumber(),
            'delivery_date' => $this->faker->dateTime(),
            'delivery_time' => $this->faker->time(),
            'value' => $this->faker->buildingNumber(),

        ];
    }
}
