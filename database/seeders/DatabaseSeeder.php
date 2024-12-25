<?php

namespace Database\Seeders;

use App\Models\bankAccount;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'role' => ADMIN_ROLE,
            'password' => ('secret')
        ]);
        $this->call([
             UserSeeder::class,
             DriverSeeder::class,
             carSeeder::class,
             bankAccountSeeder::class,
             transactionSeeder::class,
         ]);
    }
}
