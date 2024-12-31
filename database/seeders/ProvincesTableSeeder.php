<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name_ar' => 'الحدود الشمالية',
                'name_en' => 'Northern Frontier',
            ),
            1 =>
            array (
                'id' => 2,
                'name_ar' => 'الجوف',
                'name_en' => 'Al Jawf',
            ),
            2 =>
            array (
                'id' => 3,
                'name_ar' => 'تبوك',
                'name_en' => 'Tabuk',
            ),
            3 =>
            array (
                'id' => 4,
                'name_ar' => 'حائل',
                'name_en' => 'Hail',
            ),
            4 =>
            array (
                'id' => 5,
                'name_ar' => 'القصيم',
                'name_en' => 'Al Qassim',
            ),
            5 =>
            array (
                'id' => 6,
                'name_ar' => 'الرياض',
                'name_en' => 'Ar Riyadh',
            ),
            6 =>
            array (
                'id' => 7,
                'name_ar' => 'المدينة المنورة',
                'name_en' => 'Al Madinah Al Munawwarah',
            ),
            7 =>
            array (
                'id' => 8,
                'name_ar' => 'عسير',
                'name_en' => 'Asir',
            ),
            8 =>
            array (
                'id' => 9,
                'name_ar' => 'الباحة',
                'name_en' => 'Al Baha',
            ),
            9 =>
            array (
                'id' => 10,
                'name_ar' => 'جازان',
                'name_en' => 'Jazan',
            ),
            10 =>
            array (
                'id' => 11,
                'name_ar' => 'مكة المكرمة',
                'name_en' => 'Makkah Al Mukarramah',
            ),
            11 =>
            array (
                'id' => 12,
                'name_ar' => 'نجران',
                'name_en' => 'Najran',
            ),
            12 =>
            array (
                'id' => 13,
                'name_ar' => 'الشرقية',
                'name_en' => 'Eastern',
            ),
        ));


    }
}
