<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name_ar' => 'تبوك',
                'name_en' => 'Tabuk',
                'provinceId' => 3,
            ),
            1 =>
            array (
                'id' => 3,
                'name_ar' => 'الرياض',
                'name_en' => 'Riyadh',
                'provinceId' => 6,
            ),
            2 =>
            array (
                'id' => 5,
                'name_ar' => 'الطائف',
                'name_en' => 'At Taif',
                'provinceId' => 11,
            ),
            3 =>
            array (
                'id' => 6,
                'name_ar' => 'مكة المكرمة',
                'name_en' => 'Makkah Al Mukarramah',
                'provinceId' => 11,
            ),
            4 =>
            array (
                'id' => 10,
                'name_ar' => 'حائل',
                'name_en' => 'Hail',
                'provinceId' => 4,
            ),
            5 =>
            array (
                'id' => 11,
                'name_ar' => 'بريدة',
                'name_en' => 'Buraydah',
                'provinceId' => 5,
            ),
            6 =>
            array (
                'id' => 12,
                'name_ar' => 'الهفوف',
                'name_en' => 'Al Hufuf',
                'provinceId' => 13,
            ),
            7 =>
            array (
                'id' => 13,
                'name_ar' => 'الدمام',
                'name_en' => 'Ad Dammam',
                'provinceId' => 13,
            ),
            8 =>
            array (
                'id' => 14,
                'name_ar' => 'المدينة المنورة',
                'name_en' => 'Al Madinah Al Munawwarah',
                'provinceId' => 7,
            ),
            9 =>
            array (
                'id' => 15,
                'name_ar' => 'ابها',
                'name_en' => 'Abha',
                'provinceId' => 8,
            ),
            10 =>
            array (
                'id' => 17,
                'name_ar' => 'جازان',
                'name_en' => 'Jazan',
                'provinceId' => 10,
            ),
            11 =>
            array (
                'id' => 18,
                'name_ar' => 'جدة',
                'name_en' => 'Jeddah',
                'provinceId' => 11,
            ),
            12 =>
            array (
                'id' => 24,
                'name_ar' => 'المجمعة',
                'name_en' => 'Al Majmaah',
                'provinceId' => 6,
            ),
            13 =>
            array (
                'id' => 31,
                'name_ar' => 'الخبر',
                'name_en' => 'Al Khubar',
                'provinceId' => 13,
            ),
            14 =>
            array (
                'id' => 47,
                'name_ar' => 'حفر الباطن',
                'name_en' => 'Hafar Al Batin',
                'provinceId' => 13,
            ),
            15 =>
            array (
                'id' => 62,
                'name_ar' => 'خميس مشيط',
                'name_en' => 'Khamis Mushayt',
                'provinceId' => 8,
            ),
            16 =>
            array (
                'id' => 65,
                'name_ar' => 'احد رفيده',
                'name_en' => 'Ahad Rifaydah',
                'provinceId' => 8,
            ),
            17 =>
            array (
                'id' => 67,
                'name_ar' => 'القطيف',
                'name_en' => 'Al Qatif',
                'provinceId' => 13,
            ),
            18 =>
            array (
                'id' => 80,
                'name_ar' => 'عنيزة',
                'name_en' => 'Unayzah',
                'provinceId' => 5,
            ),
            19 =>
            array (
                'id' => 89,
                'name_ar' => 'قرية العليا',
                'name_en' => 'Qaryat Al Ulya',
                'provinceId' => 13,
            ),
            20 =>
            array (
                'id' => 113,
                'name_ar' => 'الجبيل',
                'name_en' => 'Al Jubail',
                'provinceId' => 13,
            ),
            21 =>
            array (
                'id' => 115,
                'name_ar' => 'النعيرية',
                'name_en' => 'An Nuayriyah',
                'provinceId' => 13,
            ),
            22 =>
            array (
                'id' => 227,
                'name_ar' => 'الظهران',
                'name_en' => 'Dhahran',
                'provinceId' => 13,
            ),
            23 =>
            array (
                'id' => 233,
                'name_ar' => 'الوجه',
                'name_en' => 'Al Wajh',
                'provinceId' => 3,
            ),
            24 =>
            array (
                'id' => 243,
                'name_ar' => 'بقيق',
                'name_en' => 'Buqayq',
                'provinceId' => 13,
            ),
            25 =>
            array (
                'id' => 270,
                'name_ar' => 'الزلفي',
                'name_en' => 'Az Zulfi',
                'provinceId' => 6,
            ),
            26 =>
            array (
                'id' => 288,
                'name_ar' => 'خيبر',
                'name_en' => 'Khaybar',
                'provinceId' => 7,
            ),
            27 =>
            array (
                'id' => 306,
                'name_ar' => 'الغاط',
                'name_en' => 'Al Ghat',
                'provinceId' => 6,
            ),
            28 =>
            array (
                'id' => 323,
                'name_ar' => 'املج',
                'name_en' => 'Umluj',
                'provinceId' => 3,
            ),
            29 =>
            array (
                'id' => 377,
                'name_ar' => 'رابغ',
                'name_en' => 'Rabigh',
                'provinceId' => 11,
            ),
            30 =>
            array (
                'id' => 418,
                'name_ar' => 'عفيف',
                'name_en' => 'Afif',
                'provinceId' => 6,
            ),
            31 =>
            array (
                'id' => 443,
                'name_ar' => 'ثادق',
                'name_en' => 'Thadiq',
                'provinceId' => 6,
            ),
            32 =>
            array (
                'id' => 454,
                'name_ar' => 'سيهات',
                'name_en' => 'Sayhat',
                'provinceId' => 13,
            ),
            33 =>
            array (
                'id' => 456,
                'name_ar' => 'تاروت',
                'name_en' => 'Tarut',
                'provinceId' => 13,
            ),
            34 =>
            array (
                'id' => 483,
                'name_ar' => 'ينبع',
                'name_en' => 'Yanbu',
                'provinceId' => 7,
            ),
            35 =>
            array (
                'id' => 500,
                'name_ar' => 'شقراء',
                'name_en' => 'Shaqra',
                'provinceId' => 6,
            ),
            36 =>
            array (
                'id' => 669,
                'name_ar' => 'الدوادمي',
                'name_en' => 'Ad Duwadimi',
                'provinceId' => 6,
            ),
            37 =>
            array (
                'id' => 828,
                'name_ar' => 'الدرعية',
                'name_en' => 'Ad Diriyah',
                'provinceId' => 6,
            ),
            38 =>
            array (
                'id' => 880,
                'name_ar' => 'القويعية',
                'name_en' => 'Quwayiyah',
                'provinceId' => 6,
            ),
            39 =>
            array (
                'id' => 990,
                'name_ar' => 'المزاحمية',
                'name_en' => 'Al Muzahimiyah',
                'provinceId' => 6,
            ),
            40 =>
            array (
                'id' => 1053,
                'name_ar' => 'بدر',
                'name_en' => 'Badr',
                'provinceId' => 7,
            ),
            41 =>
            array (
                'id' => 1061,
                'name_ar' => 'الخرج',
                'name_en' => 'Al Kharj',
                'provinceId' => 6,
            ),
            42 =>
            array (
                'id' => 1073,
                'name_ar' => 'الدلم',
                'name_en' => 'Ad Dilam',
                'provinceId' => 6,
            ),
            43 =>
            array (
                'id' => 1228,
                'name_ar' => 'الشنان',
                'name_en' => 'Ash Shinan',
                'provinceId' => 4,
            ),
            44 =>
            array (
                'id' => 1248,
                'name_ar' => 'الخرمة',
                'name_en' => 'Al Khurmah',
                'provinceId' => 11,
            ),
            45 =>
            array (
                'id' => 1257,
                'name_ar' => 'الجموم',
                'name_en' => 'Al Jumum',
                'provinceId' => 11,
            ),
            46 =>
            array (
                'id' => 1294,
                'name_ar' => 'المجاردة',
                'name_en' => 'Al Majardah',
                'provinceId' => 8,
            ),
            47 =>
            array (
                'id' => 1361,
                'name_ar' => 'السليل',
                'name_en' => 'As Sulayyil',
                'provinceId' => 6,
            ),
            48 =>
            array (
                'id' => 1443,
                'name_ar' => 'تثليث',
                'name_en' => 'Tathilith',
                'provinceId' => 8,
            ),
            49 =>
            array (
                'id' => 1514,
                'name_ar' => 'بيشة',
                'name_en' => 'Bishah',
                'provinceId' => 8,
            ),
            50 =>
            array (
                'id' => 1542,
                'name_ar' => 'الباحة',
                'name_en' => 'Al Baha',
                'provinceId' => 9,
            ),
            51 =>
            array (
                'id' => 1625,
                'name_ar' => 'القنفذة',
                'name_en' => 'Al Qunfidhah',
                'provinceId' => 11,
            ),
            52 =>
            array (
                'id' => 1801,
                'name_ar' => 'محايل',
                'name_en' => 'Muhayil',
                'provinceId' => 8,
            ),
            53 =>
            array (
                'id' => 1879,
                'name_ar' => 'ثول',
                'name_en' => 'Thuwal',
                'provinceId' => 11,
            ),
            54 =>
            array (
                'id' => 1947,
                'name_ar' => 'ضبا',
                'name_en' => 'Duba',
                'provinceId' => 3,
            ),
            55 =>
            array (
                'id' => 2156,
                'name_ar' => 'تربه',
                'name_en' => 'Turbah',
                'provinceId' => 11,
            ),
            56 =>
            array (
                'id' => 2167,
                'name_ar' => 'صفوى',
                'name_en' => 'Safwa',
                'provinceId' => 13,
            ),
            57 =>
            array (
                'id' => 2171,
                'name_ar' => 'عنك',
                'name_en' => 'Inak',
                'provinceId' => 13,
            ),
            58 =>
            array (
                'id' => 2208,
                'name_ar' => 'طريف',
                'name_en' => 'Turaif',
                'provinceId' => 1,
            ),
            59 =>
            array (
                'id' => 2213,
                'name_ar' => 'عرعر',
                'name_en' => 'Arar',
                'provinceId' => 1,
            ),
            60 =>
            array (
                'id' => 2226,
                'name_ar' => 'القريات',
                'name_en' => 'Al Qurayyat',
                'provinceId' => 2,
            ),
            61 =>
            array (
                'id' => 2237,
                'name_ar' => 'سكاكا',
                'name_en' => 'Sakaka',
                'provinceId' => 2,
            ),
            62 =>
            array (
                'id' => 2256,
                'name_ar' => 'رفحاء',
                'name_en' => 'Rafha',
                'provinceId' => 1,
            ),
            63 =>
            array (
                'id' => 2268,
                'name_ar' => 'دومة الجندل',
                'name_en' => 'Dawmat Al Jandal',
                'provinceId' => 2,
            ),
            64 =>
            array (
                'id' => 2421,
                'name_ar' => 'الرس',
                'name_en' => 'Ar Rass',
                'provinceId' => 5,
            ),
            65 =>
            array (
                'id' => 2448,
                'name_ar' => 'المذنب',
                'name_en' => 'Al Midhnab',
                'provinceId' => 5,
            ),
            66 =>
            array (
                'id' => 2464,
                'name_ar' => 'الخفجي',
                'name_en' => 'Al Khafji',
                'provinceId' => 13,
            ),
            67 =>
            array (
                'id' => 2467,
                'name_ar' => 'رياض الخبراء',
                'name_en' => 'Riyad Al Khabra',
                'provinceId' => 5,
            ),
            68 =>
            array (
                'id' => 2481,
                'name_ar' => 'البدائع',
                'name_en' => 'Al Badai',
                'provinceId' => 5,
            ),
            69 =>
            array (
                'id' => 2590,
                'name_ar' => 'رأس تنورة',
                'name_en' => 'Ras Tannurah',
                'provinceId' => 13,
            ),
            70 =>
            array (
                'id' => 2630,
                'name_ar' => 'البكيرية',
                'name_en' => 'Al Bukayriyah',
                'provinceId' => 5,
            ),
            71 =>
            array (
                'id' => 2777,
                'name_ar' => 'الشماسية',
                'name_en' => 'Ash Shimasiyah',
                'provinceId' => 5,
            ),
            72 =>
            array (
                'id' => 3158,
                'name_ar' => 'الحريق',
                'name_en' => 'Al Hariq',
                'provinceId' => 6,
            ),
            73 =>
            array (
                'id' => 3161,
                'name_ar' => 'حوطة بني تميم',
                'name_en' => 'Hawtat Bani Tamim',
                'provinceId' => 6,
            ),
            74 =>
            array (
                'id' => 3174,
                'name_ar' => 'ليلى',
                'name_en' => 'Layla',
                'provinceId' => 6,
            ),
            75 =>
            array (
                'id' => 3275,
                'name_ar' => 'بللسمر',
                'name_en' => 'Billasmar',
                'provinceId' => 8,
            ),
            76 =>
            array (
                'id' => 3347,
                'name_ar' => 'شرورة',
                'name_en' => 'Sharurah',
                'provinceId' => 12,
            ),
            77 =>
            array (
                'id' => 3417,
                'name_ar' => 'نجران',
                'name_en' => 'Najran',
                'provinceId' => 12,
            ),
            78 =>
            array (
                'id' => 3479,
                'name_ar' => 'صبيا',
                'name_en' => 'Sabya',
                'provinceId' => 10,
            ),
            79 =>
            array (
                'id' => 3525,
                'name_ar' => 'ابو عريش',
                'name_en' => 'Abu Arish',
                'provinceId' => 10,
            ),
            80 =>
            array (
                'id' => 3542,
                'name_ar' => 'صامطة',
                'name_en' => 'Samtah',
                'provinceId' => 10,
            ),
            81 =>
            array (
                'id' => 3652,
                'name_ar' => 'احد المسارحة',
                'name_en' => 'Ahad Al Musarihah',
                'provinceId' => 10,
            ),
            82 =>
            array (
                'id' => 3666,
                'name_ar' => 'مدينة الملك عبدالله الاقتصادية',
                'name_en' => 'King Abdullah Economic City',
                'provinceId' => 11,
            ),
        ));


    }
}
