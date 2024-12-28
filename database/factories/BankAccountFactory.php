<?php

namespace Database\Factories;

use App\Models\bankAccount;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class BankAccountFactory extends Factory
{
    protected $model = BankAccount::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
			'bank_account_name_id'      => $this->faker->numberBetween(2, 10),
			'user_id'                   => $this->faker->numberBetween(2, 10),
			'account_number'    => $this->faker->randomNumber(4),
			'iban'              => $this->faker->randomNumber(4),
			'disc'              => $this->faker->sentence(4),
			'is_default'        => $this->faker->boolean,
        ];
    }
}
