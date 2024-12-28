<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    protected $model = Transaction::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'bank_account_id'       => $this->faker->numberBetween(1, 10),
			'driver_bank_account_id'=> $this->faker->numberBetween(2, 10),
			'driver_id'             => $this->faker->numberBetween(1, 10),
			'amount'                => $this->faker->randomNumber(4),
			'fees'                  => 5,
			'description'           => $this->faker->sentence(4),
			'date'                  => $this->faker->date(),
        ];
    }
}
