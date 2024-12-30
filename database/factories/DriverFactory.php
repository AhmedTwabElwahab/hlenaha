<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;


class DriverFactory extends Factory
{
    protected $model = Driver::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'name'              => $this->faker->name(),
			'id_number'         => $this->faker->randomNumber(4),
			'country'           => $this->faker->country(),
			'city'              => $this->faker->city(),
			'district'          => $this->faker->country,
			'street'            => $this->faker->streetAddress(),
			'building_number'   => $this->faker->buildingNumber(),
			'postal_code'       => $this->faker->randomNumber(5),
			'status'            => $this->faker->boolean(),
			'balance'           => $this->faker->randomNumber(4),
			'user_id'           => $this->faker->numberBetween(3,9),
        ];
    }
}
