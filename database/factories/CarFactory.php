<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;


class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $make = ['audi','BMW','Fiat','Ford','Honda','ford'];
        return [
			'type'              => $make[$this->faker->numberBetween(0,5)] ,
			'brand'             => $this->faker->sentence(4),
			'model'             => $this->faker->sentence(4),
			'year'              => $this->faker->numberBetween(2000, 2021),
			'color'             => $this->faker->colorName(),
			'price_day'         => $this->faker->numberBetween(50, 100),
			'kilo'              => $this->faker->numberBetween(20000, 30021),
			'insurance'         => $this->faker->boolean() ? "شامل" : "ضد الغير",
			'insurance_expiry'  => $this->faker->dateTimeBetween('2000-01-01', '2010-01-01'),
			'description'       => null,
			'status'            => $this->faker->boolean() ? 1 : 0,
        ];
    }
}
