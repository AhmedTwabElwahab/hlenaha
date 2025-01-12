<?php

namespace Database\Seeders;

use App\Models\bankAccount;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            'email' => 'admin@admin.com',
            'role' => ADMIN_ROLE,
            'password' => Hash::make(123456)
        ]);
        $this->call([
             UserSeeder::class,
             //DriverSeeder::class,
             BankAccountNameSeeder::class,
             CarSeeder::class,
             ProvincesTableSeeder::class,
             CitiesTableSeeder::class,
             NeighborhoodsTableSeeder::class,
             //bankAccountSeeder::class,
             //transactionSeeder::class,
         ]);
    }
}
