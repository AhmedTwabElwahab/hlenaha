<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankAccountNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bank_account_names')->insert([
            [
                'name' => 'البنك الأهلي السعودي'
            ],
            [
                'name' => 'مصرف الراجحي'
            ],
            [
                'name' => 'بنك الرياض'
            ],
            [
                'name' => 'بنك ساب'
            ],
            [
                'name' => 'البنك العربي الوطني'
            ],
            [
                'name' => 'مصرف الإنماء'
            ],
            [
                'name' => 'البنك السعودي الفرنسي'
            ],
            [
                'name' => 'البنك السعود للاستثمار'
            ],
            [
                'name' => 'بنك الجزيرة'
            ],
            [
                'name' => 'بنك البلاد'
            ],
            [
                'name' => 'بنك الخليج الدولي'
            ],
        ]);
    }
}
