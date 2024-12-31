<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NeighborhoodsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('neighborhoods')->insert(array (
            0 =>
            array (
                'id' => 28,
                'name_ar' => 'المنهل',
                'name_en' => 'al manhal',
                'city_id' => 15,
                'neCoordinates' => '18.23004686,42.52403780',
                'swCoordinates' => '18.21814714,42.50670844',
            ),
            1 =>
            array (
                'id' => 29,
                'name_ar' => 'النصب',
                'name_en' => 'an nasb',
                'city_id' => 15,
                'neCoordinates' => '18.22519281,42.51503934',
                'swCoordinates' => '18.21472354,42.50058994',
            ),
            2 =>
            array (
                'id' => 30,
                'name_ar' => 'وسط المدينة',
                'name_en' => 'down town',
                'city_id' => 15,
                'neCoordinates' => '18.22160324,42.50440063',
                'swCoordinates' => '18.21260073,42.49771760',
            ),
            3 =>
            array (
                'id' => 31,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 15,
                'neCoordinates' => '18.21795259,42.51796121',
                'swCoordinates' => '18.20282188,42.50814647',
            ),
            4 =>
            array (
                'id' => 32,
                'name_ar' => 'ذرة',
                'name_en' => 'dhurah',
                'city_id' => 15,
                'neCoordinates' => '18.21188547,42.51561144',
                'swCoordinates' => '18.20020698,42.50223394',
            ),
            5 =>
            array (
                'id' => 33,
                'name_ar' => 'شمسان',
                'name_en' => 'shamsan',
                'city_id' => 15,
                'neCoordinates' => '18.23369174,42.51678644',
                'swCoordinates' => '18.22141632,42.50089132',
            ),
            6 =>
            array (
                'id' => 34,
                'name_ar' => 'القرى',
                'name_en' => 'al qura',
                'city_id' => 15,
                'neCoordinates' => '18.25426556,42.50240189',
                'swCoordinates' => '18.23059626,42.47632972',
            ),
            7 =>
            array (
                'id' => 35,
                'name_ar' => 'الوردتين',
                'name_en' => 'al wardatain',
                'city_id' => 15,
                'neCoordinates' => '18.23223460,42.50244385',
                'swCoordinates' => '18.22462445,42.48924558',
            ),
            8 =>
            array (
                'id' => 36,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 15,
                'neCoordinates' => '18.21889858,42.53696128',
                'swCoordinates' => '18.19055971,42.51801607',
            ),
            9 =>
            array (
                'id' => 37,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 15,
                'neCoordinates' => '18.21328719,42.55222321',
                'swCoordinates' => '18.18859318,42.53323453',
            ),
            10 =>
            array (
                'id' => 38,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 15,
                'neCoordinates' => '18.21984653,42.52349232',
                'swCoordinates' => '18.20403491,42.51526439',
            ),
            11 =>
            array (
                'id' => 39,
                'name_ar' => 'ابهاء الجديدة',
                'name_en' => 'abha al jadidah',
                'city_id' => 15,
                'neCoordinates' => '18.22786508,42.49171731',
                'swCoordinates' => '18.19844913,42.46760198',
            ),
            12 =>
            array (
                'id' => 40,
                'name_ar' => 'الضباب',
                'name_en' => 'ad dabab',
                'city_id' => 15,
                'neCoordinates' => '18.20407583,42.52206092',
                'swCoordinates' => '18.18996366,42.50072248',
            ),
            13 =>
            array (
                'id' => 41,
                'name_ar' => 'الوصايف',
                'name_en' => 'al wasaif',
                'city_id' => 15,
                'neCoordinates' => '18.24023777,42.49267103',
                'swCoordinates' => '18.22612172,42.47895024',
            ),
            14 =>
            array (
                'id' => 42,
                'name_ar' => 'الشرفية',
                'name_en' => 'ash sharafiyah',
                'city_id' => 15,
                'neCoordinates' => '18.25546378,42.53665120',
                'swCoordinates' => '18.22973213,42.49720276',
            ),
            15 =>
            array (
                'id' => 43,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 15,
                'neCoordinates' => '18.21376418,42.50393142',
                'swCoordinates' => '18.20736133,42.49972401',
            ),
            16 =>
            array (
                'id' => 44,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 15,
                'neCoordinates' => '18.21260073,42.50596451',
                'swCoordinates' => '18.19930484,42.49171731',
            ),
            17 =>
            array (
                'id' => 45,
                'name_ar' => 'المفتاحة',
                'name_en' => 'al muftahah',
                'city_id' => 15,
                'neCoordinates' => '18.21491241,42.49972401',
                'swCoordinates' => '18.20693414,42.49039750',
            ),
            18 =>
            array (
                'id' => 46,
                'name_ar' => 'السروات',
                'name_en' => 'as sarawat',
                'city_id' => 15,
                'neCoordinates' => '18.20693414,42.50100091',
                'swCoordinates' => '18.18921495,42.47699550',
            ),
            19 =>
            array (
                'id' => 47,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 15,
                'neCoordinates' => '18.23604134,42.57499211',
                'swCoordinates' => '18.20108798,42.52650197',
            ),
            20 =>
            array (
                'id' => 48,
                'name_ar' => 'السد',
                'name_en' => 'as sad',
                'city_id' => 15,
                'neCoordinates' => '18.22107497,42.49938834',
                'swCoordinates' => '18.21183784,42.48803633',
            ),
            21 =>
            array (
                'id' => 49,
                'name_ar' => 'الخشع',
                'name_en' => 'al khasha',
                'city_id' => 15,
                'neCoordinates' => '18.21655457,42.51094253',
                'swCoordinates' => '18.21042445,42.50131085',
            ),
            22 =>
            array (
                'id' => 50,
                'name_ar' => 'القابل',
                'name_en' => 'al qabil',
                'city_id' => 15,
                'neCoordinates' => '18.22738621,42.50091421',
                'swCoordinates' => '18.21994580,42.49550901',
            ),
            23 =>
            array (
                'id' => 51,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 15,
                'neCoordinates' => '18.22543889,42.49784728',
                'swCoordinates' => '18.21676441,42.48966899',
            ),
            24 =>
            array (
                'id' => 52,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 15,
                'neCoordinates' => '18.23523113,42.49009621',
                'swCoordinates' => '18.21800040,42.46801781',
            ),
            25 =>
            array (
                'id' => 53,
                'name_ar' => 'العرين',
                'name_en' => 'al arin',
                'city_id' => 15,
                'neCoordinates' => '18.24751582,42.56464345',
                'swCoordinates' => '18.21787053,42.51692376',
            ),
            26 =>
            array (
                'id' => 56,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 62,
                'neCoordinates' => '18.33987171,42.70444914',
                'swCoordinates' => '18.32353086,42.69314488',
            ),
            27 =>
            array (
                'id' => 57,
                'name_ar' => 'السد',
                'name_en' => 'as sad',
                'city_id' => 62,
                'neCoordinates' => '18.29952460,42.72643129',
                'swCoordinates' => '18.28589597,42.70775918',
            ),
            28 =>
            array (
                'id' => 58,
                'name_ar' => 'الجزيرة',
                'name_en' => 'al jazirah',
                'city_id' => 62,
                'neCoordinates' => '18.31792436,42.73113704',
                'swCoordinates' => '18.31011550,42.71319470',
            ),
            29 =>
            array (
                'id' => 59,
                'name_ar' => 'طيب الاسم',
                'name_en' => 'tayib al ism',
                'city_id' => 62,
                'neCoordinates' => '18.32607417,42.71145594',
                'swCoordinates' => '18.30560363,42.69645592',
            ),
            30 =>
            array (
                'id' => 60,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 62,
                'neCoordinates' => '18.30215695,42.74100924',
                'swCoordinates' => '18.28468589,42.73335842',
            ),
            31 =>
            array (
                'id' => 61,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 62,
                'neCoordinates' => '18.30123611,42.73089355',
                'swCoordinates' => '18.29266688,42.72737830',
            ),
            32 =>
            array (
                'id' => 62,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 62,
                'neCoordinates' => '18.30641215,42.72705845',
                'swCoordinates' => '18.29952460,42.71547498',
            ),
            33 =>
            array (
                'id' => 63,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 65,
                'neCoordinates' => '18.17614207,42.83898959',
                'swCoordinates' => '18.16256928,42.82650017',
            ),
            34 =>
            array (
                'id' => 64,
                'name_ar' => 'ضمك',
                'name_en' => 'damak',
                'city_id' => 62,
                'neCoordinates' => '18.29297364,42.73317567',
                'swCoordinates' => '18.28165413,42.72315933',
            ),
            35 =>
            array (
                'id' => 65,
                'name_ar' => 'الخزان',
                'name_en' => 'al khazan',
                'city_id' => 62,
                'neCoordinates' => '18.30006296,42.72779494',
                'swCoordinates' => '18.29201373,42.71871622',
            ),
            36 =>
            array (
                'id' => 66,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 62,
                'neCoordinates' => '18.30605430,42.73118007',
                'swCoordinates' => '18.29987093,42.72377483',
            ),
            37 =>
            array (
                'id' => 67,
                'name_ar' => 'الزيتون',
                'name_en' => 'az zaytun',
                'city_id' => 65,
                'neCoordinates' => '18.18695201,42.86194707',
                'swCoordinates' => '18.17376584,42.85159234',
            ),
            38 =>
            array (
                'id' => 68,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 65,
                'neCoordinates' => '18.18438471,42.82908453',
                'swCoordinates' => '18.15937790,42.80563840',
            ),
            39 =>
            array (
                'id' => 69,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 65,
                'neCoordinates' => '18.20681091,42.84041054',
                'swCoordinates' => '18.17851727,42.81718400',
            ),
            40 =>
            array (
                'id' => 70,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 65,
                'neCoordinates' => '18.19186073,42.85443983',
                'swCoordinates' => '18.17213133,42.83812603',
            ),
            41 =>
            array (
                'id' => 71,
                'name_ar' => 'وسط البلد',
                'name_en' => 'down town',
                'city_id' => 65,
                'neCoordinates' => '18.18315024,42.84775223',
                'swCoordinates' => '18.16560896,42.82664566',
            ),
            42 =>
            array (
                'id' => 72,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 65,
                'neCoordinates' => '18.17549833,42.86147182',
                'swCoordinates' => '18.15633987,42.83834239',
            ),
            43 =>
            array (
                'id' => 73,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 65,
                'neCoordinates' => '18.15642543,42.84872286',
                'swCoordinates' => '18.14317036,42.84094425',
            ),
            44 =>
            array (
                'id' => 74,
                'name_ar' => 'الفتح',
                'name_en' => 'al fath',
                'city_id' => 62,
                'neCoordinates' => '18.33153475,42.74539809',
                'swCoordinates' => '18.31570883,42.73298352',
            ),
            45 =>
            array (
                'id' => 75,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 62,
                'neCoordinates' => '18.33139046,42.74976572',
                'swCoordinates' => '18.31658043,42.73717334',
            ),
            46 =>
            array (
                'id' => 76,
                'name_ar' => 'شباعة',
                'name_en' => 'shubaah',
                'city_id' => 62,
                'neCoordinates' => '18.32408259,42.73589064',
                'swCoordinates' => '18.31133607,42.71351093',
            ),
            47 =>
            array (
                'id' => 77,
                'name_ar' => 'المعزاب',
                'name_en' => 'al mizab',
                'city_id' => 62,
                'neCoordinates' => '18.31804878,42.71922948',
                'swCoordinates' => '18.30629023,42.70425926',
            ),
            48 =>
            array (
                'id' => 78,
                'name_ar' => 'المثناة',
                'name_en' => 'al mathnah',
                'city_id' => 62,
                'neCoordinates' => '18.30142748,42.73766876',
                'swCoordinates' => '18.28175701,42.73031354',
            ),
            49 =>
            array (
                'id' => 79,
                'name_ar' => 'المعمورة',
                'name_en' => 'al mamurah',
                'city_id' => 62,
                'neCoordinates' => '18.33146905,42.73436825',
                'swCoordinates' => '18.32270178,42.71431223',
            ),
            50 =>
            array (
                'id' => 80,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 62,
                'neCoordinates' => '18.29988978,42.76887762',
                'swCoordinates' => '18.28341655,42.75311613',
            ),
            51 =>
            array (
                'id' => 81,
                'name_ar' => 'شكر',
                'name_en' => 'shakar',
                'city_id' => 62,
                'neCoordinates' => '18.29404393,42.75630701',
                'swCoordinates' => '18.28278629,42.74289199',
            ),
            52 =>
            array (
                'id' => 82,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 62,
                'neCoordinates' => '18.28362965,42.74391726',
                'swCoordinates' => '18.27175585,42.73317567',
            ),
            53 =>
            array (
                'id' => 83,
                'name_ar' => 'عتود',
                'name_en' => 'atud',
                'city_id' => 62,
                'neCoordinates' => '18.30694131,42.71871622',
                'swCoordinates' => '18.29663747,42.70317783',
            ),
            54 =>
            array (
                'id' => 84,
                'name_ar' => 'ال هميلة',
                'name_en' => 'al humaylah',
                'city_id' => 62,
                'neCoordinates' => '18.31016362,42.72111537',
                'swCoordinates' => '18.30566441,42.71185497',
            ),
            55 =>
            array (
                'id' => 85,
                'name_ar' => 'العرق الجنوبي',
                'name_en' => 'al irq al janubi',
                'city_id' => 62,
                'neCoordinates' => '18.30710068,42.73916882',
                'swCoordinates' => '18.30119012,42.73075395',
            ),
            56 =>
            array (
                'id' => 86,
                'name_ar' => 'الصقور',
                'name_en' => 'as suqur',
                'city_id' => 62,
                'neCoordinates' => '18.30687452,42.76946754',
                'swCoordinates' => '18.29685903,42.75869152',
            ),
            57 =>
            array (
                'id' => 87,
                'name_ar' => 'البوادي',
                'name_en' => 'al bawadi',
                'city_id' => 62,
                'neCoordinates' => '18.30711104,42.76029774',
                'swCoordinates' => '18.29417111,42.75221547',
            ),
            58 =>
            array (
                'id' => 88,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 62,
                'neCoordinates' => '18.30430364,42.75337602',
                'swCoordinates' => '18.29153568,42.74630352',
            ),
            59 =>
            array (
                'id' => 89,
                'name_ar' => 'ام سرور',
                'name_en' => 'umm surur',
                'city_id' => 62,
                'neCoordinates' => '18.30311339,42.74779204',
                'swCoordinates' => '18.28701000,42.73917535',
            ),
            60 =>
            array (
                'id' => 90,
                'name_ar' => 'الشرفية',
                'name_en' => 'ash sharafiyah',
                'city_id' => 62,
                'neCoordinates' => '18.30718571,42.75233606',
                'swCoordinates' => '18.30215695,42.73796869',
            ),
            61 =>
            array (
                'id' => 91,
                'name_ar' => 'صفوان',
                'name_en' => 'safwan',
                'city_id' => 65,
                'neCoordinates' => '18.21829096,42.82788902',
                'swCoordinates' => '18.20217900,42.81365483',
            ),
            62 =>
            array (
                'id' => 92,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 65,
                'neCoordinates' => '18.22257420,42.84815258',
                'swCoordinates' => '18.20427452,42.82896451',
            ),
            63 =>
            array (
                'id' => 93,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 65,
                'neCoordinates' => '18.21751882,42.83635329',
                'swCoordinates' => '18.20515015,42.81958356',
            ),
            64 =>
            array (
                'id' => 94,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 65,
                'neCoordinates' => '18.19486033,42.82682344',
                'swCoordinates' => '18.17525115,42.80319148',
            ),
            65 =>
            array (
                'id' => 95,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 62,
                'neCoordinates' => '18.32310056,42.69661234',
                'swCoordinates' => '18.30195653,42.68456885',
            ),
            66 =>
            array (
                'id' => 96,
                'name_ar' => 'قمبر',
                'name_en' => 'qambar',
                'city_id' => 62,
                'neCoordinates' => '18.31214174,42.72986417',
                'swCoordinates' => '18.30823286,42.72009937',
            ),
            67 =>
            array (
                'id' => 97,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 62,
                'neCoordinates' => '18.30937812,42.73038211',
                'swCoordinates' => '18.30543002,42.72104403',
            ),
            68 =>
            array (
                'id' => 98,
                'name_ar' => 'العرق الشمالي',
                'name_en' => 'al irq ash shamali',
                'city_id' => 62,
                'neCoordinates' => '18.31617385,42.73796869',
                'swCoordinates' => '18.30603907,42.72850851',
            ),
            69 =>
            array (
                'id' => 99,
                'name_ar' => 'الدوحة',
                'name_en' => 'ad dawhah',
                'city_id' => 62,
                'neCoordinates' => '18.31633430,42.74595530',
                'swCoordinates' => '18.30710068,42.73589064',
            ),
            70 =>
            array (
                'id' => 100,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 62,
                'neCoordinates' => '18.31969522,42.75836879',
                'swCoordinates' => '18.30688493,42.74495767',
            ),
            71 =>
            array (
                'id' => 101,
                'name_ar' => 'القافلة',
                'name_en' => 'al qafilah',
                'city_id' => 62,
                'neCoordinates' => '18.32443819,42.70141187',
                'swCoordinates' => '18.30442917,42.69108476',
            ),
            72 =>
            array (
                'id' => 102,
                'name_ar' => 'القلعة',
                'name_en' => 'al qalah',
                'city_id' => 17,
                'neCoordinates' => '16.89138649,42.56374641',
                'swCoordinates' => '16.87203975,42.53990666',
            ),
            73 =>
            array (
                'id' => 103,
                'name_ar' => 'الاراك',
                'name_en' => 'al arak',
                'city_id' => 17,
                'neCoordinates' => '16.88175149,42.65181040',
                'swCoordinates' => '16.85138453,42.62979739',
            ),
            74 =>
            array (
                'id' => 105,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 17,
                'neCoordinates' => '16.89120374,42.58722028',
                'swCoordinates' => '16.87824279,42.55785342',
            ),
            75 =>
            array (
                'id' => 106,
                'name_ar' => 'السويس',
                'name_en' => 'as suways',
                'city_id' => 17,
                'neCoordinates' => '16.88303310,42.62387174',
                'swCoordinates' => '16.83398032,42.56844711',
            ),
            76 =>
            array (
                'id' => 107,
                'name_ar' => 'البشائر',
                'name_en' => 'al bashair',
                'city_id' => 17,
                'neCoordinates' => '16.87845809,42.63866682',
                'swCoordinates' => '16.84450443,42.61264066',
            ),
            77 =>
            array (
                'id' => 108,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 17,
                'neCoordinates' => '16.91861106,42.59993054',
                'swCoordinates' => '16.88303315,42.55785342',
            ),
            78 =>
            array (
                'id' => 109,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 17,
                'neCoordinates' => '16.97248220,42.61433201',
                'swCoordinates' => '16.92373947,42.56612604',
            ),
            79 =>
            array (
                'id' => 110,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 17,
                'neCoordinates' => '16.94625594,42.65585219',
                'swCoordinates' => '16.87732189,42.58722028',
            ),
            80 =>
            array (
                'id' => 111,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 17,
                'neCoordinates' => '16.97188807,42.56807553',
                'swCoordinates' => '16.89644196,42.53784953',
            ),
            81 =>
            array (
                'id' => 112,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 17,
                'neCoordinates' => '16.93036696,42.61301413',
                'swCoordinates' => '16.89120370,42.55108259',
            ),
            82 =>
            array (
                'id' => 113,
                'name_ar' => 'الشامية',
                'name_en' => 'ash shamiyah',
                'city_id' => 17,
                'neCoordinates' => '16.89855021,42.55155194',
                'swCoordinates' => '16.88977543,42.54130686',
            ),
            83 =>
            array (
                'id' => 114,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 17,
                'neCoordinates' => '16.87915626,42.64984303',
                'swCoordinates' => '16.82132453,42.54678446',
            ),
            84 =>
            array (
                'id' => 115,
                'name_ar' => 'النور',
                'name_en' => 'an nur',
                'city_id' => 17,
                'neCoordinates' => '16.96583035,42.65582085',
                'swCoordinates' => '16.92931311,42.61170848',
            ),
            85 =>
            array (
                'id' => 116,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 17,
                'neCoordinates' => '16.91976823,42.61052162',
                'swCoordinates' => '16.88858789,42.57827261',
            ),
            86 =>
            array (
                'id' => 117,
                'name_ar' => 'الجبل',
                'name_en' => 'al jabal',
                'city_id' => 17,
                'neCoordinates' => '16.89752405,42.55792355',
                'swCoordinates' => '16.88810998,42.54903846',
            ),
            87 =>
            array (
                'id' => 118,
                'name_ar' => 'المروج ب',
                'name_en' => 'al muruj b',
                'city_id' => 1,
                'neCoordinates' => '28.42449377,36.57774787',
                'swCoordinates' => '28.40659711,36.55947290',
            ),
            88 =>
            array (
                'id' => 119,
                'name_ar' => 'السعادة',
                'name_en' => 'as saadah',
                'city_id' => 1,
                'neCoordinates' => '28.39430982,36.55734138',
                'swCoordinates' => '28.38645105,36.54616995',
            ),
            89 =>
            array (
                'id' => 120,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 1,
                'neCoordinates' => '28.38680738,36.55047083',
                'swCoordinates' => '28.38189403,36.54605017',
            ),
            90 =>
            array (
                'id' => 121,
                'name_ar' => 'المنشية القديمة',
                'name_en' => 'al munshiyah al qadimah',
                'city_id' => 1,
                'neCoordinates' => '28.38416892,36.56848513',
                'swCoordinates' => '28.37738220,36.55775602',
            ),
            91 =>
            array (
                'id' => 122,
                'name_ar' => 'المنشية الجديدة',
                'name_en' => 'al munshiyah al jadidah',
                'city_id' => 1,
                'neCoordinates' => '28.38374027,36.57346780',
                'swCoordinates' => '28.37851936,36.56741184',
            ),
            92 =>
            array (
                'id' => 123,
                'name_ar' => 'مخطط الراجحي',
                'name_en' => 'ar rajihi subdivision',
                'city_id' => 1,
                'neCoordinates' => '28.42806715,36.54374552',
                'swCoordinates' => '28.40462984,36.52356983',
            ),
            93 =>
            array (
                'id' => 124,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 1,
                'neCoordinates' => '28.45721944,36.52907799',
                'swCoordinates' => '28.40735352,36.48542683',
            ),
            94 =>
            array (
                'id' => 125,
                'name_ar' => 'العوايشة',
                'name_en' => 'al awayshah',
                'city_id' => 1,
                'neCoordinates' => '28.38947789,36.56682006',
                'swCoordinates' => '28.37997049,36.55031818',
            ),
            95 =>
            array (
                'id' => 126,
                'name_ar' => 'رحيل',
                'name_en' => 'rahil',
                'city_id' => 1,
                'neCoordinates' => '28.38253965,36.55987363',
                'swCoordinates' => '28.37367035,36.54573423',
            ),
            96 =>
            array (
                'id' => 127,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 1,
                'neCoordinates' => '28.40848550,36.55835793',
                'swCoordinates' => '28.39106387,36.53842871',
            ),
            97 =>
            array (
                'id' => 128,
                'name_ar' => 'مخطط الرابية',
                'name_en' => 'ar rabiyah subdivision',
                'city_id' => 1,
                'neCoordinates' => '28.47865145,36.56980882',
                'swCoordinates' => '28.45140860,36.53904351',
            ),
            98 =>
            array (
                'id' => 129,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1,
                'neCoordinates' => '28.41879643,36.53842871',
                'swCoordinates' => '28.39327750,36.51001189',
            ),
            99 =>
            array (
                'id' => 130,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 1,
                'neCoordinates' => '28.46541316,36.55839098',
                'swCoordinates' => '28.42806715,36.51017526',
            ),
            100 =>
            array (
                'id' => 132,
                'name_ar' => 'العزيزية الجديدة',
                'name_en' => 'al aziziyah al jadidah',
                'city_id' => 1,
                'neCoordinates' => '28.38936796,36.58096090',
                'swCoordinates' => '28.37816954,36.56550434',
            ),
            101 =>
            array (
                'id' => 133,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 1,
                'neCoordinates' => '28.40462984,36.54775118',
                'swCoordinates' => '28.38173715,36.52275722',
            ),
            102 =>
            array (
                'id' => 134,
                'name_ar' => 'كريم',
                'name_en' => 'karim',
                'city_id' => 1,
                'neCoordinates' => '28.37726135,36.55139849',
                'swCoordinates' => '28.36488877,36.53862178',
            ),
            103 =>
            array (
                'id' => 135,
                'name_ar' => 'ابو سبعة',
                'name_en' => 'abu sabah',
                'city_id' => 1,
                'neCoordinates' => '28.36807237,36.54460651',
                'swCoordinates' => '28.36279990,36.53718679',
            ),
            104 =>
            array (
                'id' => 136,
                'name_ar' => 'الرويعيات',
                'name_en' => 'ar ruwayiyat',
                'city_id' => 1,
                'neCoordinates' => '28.36569409,36.55153401',
                'swCoordinates' => '28.35960017,36.54215968',
            ),
            105 =>
            array (
                'id' => 137,
                'name_ar' => 'الشيخ',
                'name_en' => 'ash shaikh',
                'city_id' => 1,
                'neCoordinates' => '28.37465810,36.56052012',
                'swCoordinates' => '28.36336271,36.54517485',
            ),
            106 =>
            array (
                'id' => 138,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 1,
                'neCoordinates' => '28.37351034,36.56295567',
                'swCoordinates' => '28.36349994,36.55392636',
            ),
            107 =>
            array (
                'id' => 139,
                'name_ar' => 'الفيصلية الشمالية',
                'name_en' => 'al faisaliyah ash shamaliyah',
                'city_id' => 1,
                'neCoordinates' => '28.41120660,36.56155035',
                'swCoordinates' => '28.39685369,36.54374552',
            ),
            108 =>
            array (
                'id' => 140,
                'name_ar' => 'العزيزية القديمة',
                'name_en' => 'al aziziyah al qadimah',
                'city_id' => 1,
                'neCoordinates' => '28.40112005,36.57540625',
                'swCoordinates' => '28.38523023,36.55417938',
            ),
            109 =>
            array (
                'id' => 141,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 1,
                'neCoordinates' => '28.42150716,36.58928011',
                'swCoordinates' => '28.40435074,36.57058040',
            ),
            110 =>
            array (
                'id' => 142,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 1,
                'neCoordinates' => '28.42808966,36.59853370',
                'swCoordinates' => '28.40764318,36.57527375',
            ),
            111 =>
            array (
                'id' => 143,
                'name_ar' => 'المهرجان',
                'name_en' => 'al mahrajan',
                'city_id' => 1,
                'neCoordinates' => '28.41021256,36.57976651',
                'swCoordinates' => '28.39310820,36.55527028',
            ),
            112 =>
            array (
                'id' => 144,
                'name_ar' => 'السلمان',
                'name_en' => 'as salman',
                'city_id' => 1,
                'neCoordinates' => '28.39314082,36.58446563',
                'swCoordinates' => '28.38393574,36.57138108',
            ),
            113 =>
            array (
                'id' => 145,
                'name_ar' => 'الفيصلية الجنوبية',
                'name_en' => 'al faisaliyah al janubiyah',
                'city_id' => 1,
                'neCoordinates' => '28.39689407,36.58743174',
                'swCoordinates' => '28.38793233,36.57546226',
            ),
            114 =>
            array (
                'id' => 146,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 1,
                'neCoordinates' => '28.39181206,36.59503726',
                'swCoordinates' => '28.37400876,36.57740045',
            ),
            115 =>
            array (
                'id' => 147,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 1,
                'neCoordinates' => '28.37921669,36.56861973',
                'swCoordinates' => '28.37376041,36.55845956',
            ),
            116 =>
            array (
                'id' => 148,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 1,
                'neCoordinates' => '28.37445871,36.56553046',
                'swCoordinates' => '28.36458130,36.56043750',
            ),
            117 =>
            array (
                'id' => 149,
                'name_ar' => 'الهضيبة',
                'name_en' => 'al hudaybah',
                'city_id' => 1,
                'neCoordinates' => '28.38038912,36.58307489',
                'swCoordinates' => '28.36022505,36.56265474',
            ),
            118 =>
            array (
                'id' => 150,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 1,
                'neCoordinates' => '28.42971978,36.63809810',
                'swCoordinates' => '28.38704735,36.58743174',
            ),
            119 =>
            array (
                'id' => 151,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 1,
                'neCoordinates' => '28.41219990,36.59940221',
                'swCoordinates' => '28.39181206,36.57819951',
            ),
            120 =>
            array (
                'id' => 153,
                'name_ar' => 'منطقة العسكرية',
                'name_en' => 'military area',
                'city_id' => 1,
                'neCoordinates' => '28.37343780,36.66150313',
                'swCoordinates' => '28.29021307,36.55761258',
            ),
            121 =>
            array (
                'id' => 154,
                'name_ar' => 'مطار',
                'name_en' => 'airport',
                'city_id' => 1,
                'neCoordinates' => '28.39069231,36.67713769',
                'swCoordinates' => '28.30872547,36.58356681',
            ),
            122 =>
            array (
                'id' => 155,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 1,
                'neCoordinates' => '28.41297276,36.58353435',
                'swCoordinates' => '28.39797700,36.56516641',
            ),
            123 =>
            array (
                'id' => 217,
                'name_ar' => 'اجا',
                'name_en' => 'aja',
                'city_id' => 10,
                'neCoordinates' => '27.57158345,41.70587400',
                'swCoordinates' => '27.55455831,41.67180173',
            ),
            124 =>
            array (
                'id' => 218,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 10,
                'neCoordinates' => '27.54066874,41.69880043',
                'swCoordinates' => '27.52319826,41.65897125',
            ),
            125 =>
            array (
                'id' => 219,
                'name_ar' => 'المزعبر',
                'name_en' => 'al muzaabar',
                'city_id' => 10,
                'neCoordinates' => '27.53648482,41.72582298',
                'swCoordinates' => '27.52648782,41.69545670',
            ),
            126 =>
            array (
                'id' => 220,
                'name_ar' => 'برزان',
                'name_en' => 'barzan',
                'city_id' => 10,
                'neCoordinates' => '27.52845433,41.70946180',
                'swCoordinates' => '27.52327222,41.69777413',
            ),
            127 =>
            array (
                'id' => 221,
                'name_ar' => 'المحطة',
                'name_en' => 'al mahattah',
                'city_id' => 10,
                'neCoordinates' => '27.52373717,41.69912508',
                'swCoordinates' => '27.51021316,41.68303615',
            ),
            128 =>
            array (
                'id' => 222,
                'name_ar' => 'سماح',
                'name_en' => 'samah',
                'city_id' => 10,
                'neCoordinates' => '27.52351933,41.70291724',
                'swCoordinates' => '27.51329702,41.69681075',
            ),
            129 =>
            array (
                'id' => 223,
                'name_ar' => 'لبدة',
                'name_en' => 'labdah',
                'city_id' => 10,
                'neCoordinates' => '27.52329821,41.71801128',
                'swCoordinates' => '27.51354648,41.70253171',
            ),
            130 =>
            array (
                'id' => 224,
                'name_ar' => 'الزبارة',
                'name_en' => 'az zibarah',
                'city_id' => 10,
                'neCoordinates' => '27.51666027,41.71650470',
                'swCoordinates' => '27.49343180,41.69820162',
            ),
            131 =>
            array (
                'id' => 225,
                'name_ar' => 'ام العراد',
                'name_en' => 'umm al arad',
                'city_id' => 5,
                'neCoordinates' => '21.26513014,40.41258123',
                'swCoordinates' => '21.21679188,40.40389769',
            ),
            132 =>
            array (
                'id' => 226,
                'name_ar' => 'شهار',
                'name_en' => 'shihar',
                'city_id' => 5,
                'neCoordinates' => '21.25979644,40.41998422',
                'swCoordinates' => '21.24274326,40.40942125',
            ),
            133 =>
            array (
                'id' => 227,
                'name_ar' => 'السمراء',
                'name_en' => 'as samra',
                'city_id' => 10,
                'neCoordinates' => '27.51261134,41.73445893',
                'swCoordinates' => '27.47941794,41.70573680',
            ),
            134 =>
            array (
                'id' => 228,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 10,
                'neCoordinates' => '27.50611126,41.79860177',
                'swCoordinates' => '27.46330986,41.72505561',
            ),
            135 =>
            array (
                'id' => 229,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 10,
                'neCoordinates' => '27.56803985,41.73037337',
                'swCoordinates' => '27.55462566,41.70385906',
            ),
            136 =>
            array (
                'id' => 230,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 10,
                'neCoordinates' => '27.59663890,41.73651095',
                'swCoordinates' => '27.56180925,41.70627679',
            ),
            137 =>
            array (
                'id' => 231,
                'name_ar' => 'مغيضة',
                'name_en' => 'mughaydah',
                'city_id' => 10,
                'neCoordinates' => '27.53308072,41.73015682',
                'swCoordinates' => '27.52084728,41.70770787',
            ),
            138 =>
            array (
                'id' => 232,
                'name_ar' => 'حدري البلاد',
                'name_en' => 'hadri al bilad',
                'city_id' => 10,
                'neCoordinates' => '27.56308079,41.80871127',
                'swCoordinates' => '27.52788860,41.72626510',
            ),
            139 =>
            array (
                'id' => 233,
                'name_ar' => 'الخريمي',
                'name_en' => 'al khuraymi',
                'city_id' => 10,
                'neCoordinates' => '27.53627107,41.80593159',
                'swCoordinates' => '27.49189444,41.71473055',
            ),
            140 =>
            array (
                'id' => 234,
                'name_ar' => 'السويفلة',
                'name_en' => 'as suwayfilah',
                'city_id' => 10,
                'neCoordinates' => '27.62039268,41.81707390',
                'swCoordinates' => '27.55608287,41.73039548',
            ),
            141 =>
            array (
                'id' => 236,
                'name_ar' => 'البدنة',
                'name_en' => 'al badnah',
                'city_id' => 10,
                'neCoordinates' => '27.47419972,41.73826345',
                'swCoordinates' => '27.45583186,41.71780324',
            ),
            142 =>
            array (
                'id' => 237,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 5,
                'neCoordinates' => '21.28384608,40.41497254',
                'swCoordinates' => '21.27462657,40.40342984',
            ),
            143 =>
            array (
                'id' => 238,
                'name_ar' => 'عودة',
                'name_en' => 'awdah',
                'city_id' => 5,
                'neCoordinates' => '21.26518189,40.41353085',
                'swCoordinates' => '21.20979644,40.37340544',
            ),
            144 =>
            array (
                'id' => 239,
                'name_ar' => 'السداد',
                'name_en' => 'as sadad',
                'city_id' => 5,
                'neCoordinates' => '21.24732113,40.46954294',
                'swCoordinates' => '21.21023674,40.41046601',
            ),
            145 =>
            array (
                'id' => 240,
                'name_ar' => 'الوسيطاء',
                'name_en' => 'al wusayta',
                'city_id' => 10,
                'neCoordinates' => '27.52358842,41.68381305',
                'swCoordinates' => '27.49170017,41.65819003',
            ),
            146 =>
            array (
                'id' => 241,
                'name_ar' => 'صبابة',
                'name_en' => 'sababah',
                'city_id' => 10,
                'neCoordinates' => '27.52987030,41.66010824',
                'swCoordinates' => '27.51348138,41.63666059',
            ),
            147 =>
            array (
                'id' => 242,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 10,
                'neCoordinates' => '27.51029504,41.69952102',
                'swCoordinates' => '27.48028174,41.68091134',
            ),
            148 =>
            array (
                'id' => 243,
                'name_ar' => 'البحيرة',
                'name_en' => 'al buhayrah',
                'city_id' => 10,
                'neCoordinates' => '27.49991259,41.70717487',
                'swCoordinates' => '27.46854457,41.69195636',
            ),
            149 =>
            array (
                'id' => 246,
                'name_ar' => 'النقرة',
                'name_en' => 'an naqrah',
                'city_id' => 10,
                'neCoordinates' => '27.49817336,41.69195636',
                'swCoordinates' => '27.44553052,41.62643343',
            ),
            150 =>
            array (
                'id' => 247,
                'name_ar' => 'الخماشية',
                'name_en' => 'al khamashiyah',
                'city_id' => 10,
                'neCoordinates' => '27.49187854,41.74784806',
                'swCoordinates' => '27.46487349,41.70213204',
            ),
            151 =>
            array (
                'id' => 248,
                'name_ar' => 'مطار حائل الاقليمي',
                'name_en' => 'hail regional airport',
                'city_id' => 10,
                'neCoordinates' => '27.48028174,41.70213409',
                'swCoordinates' => '27.41615303,41.66277382',
            ),
            152 =>
            array (
                'id' => 249,
                'name_ar' => 'مطار حائل الاقليمي',
                'name_en' => 'hail regional airport',
                'city_id' => 10,
                'neCoordinates' => '27.43711546,41.68620137',
                'swCoordinates' => '27.43343136,41.68251736',
            ),
            153 =>
            array (
                'id' => 250,
                'name_ar' => 'السويفلة',
                'name_en' => 'as suwayfilah',
                'city_id' => 10,
                'neCoordinates' => '27.64867142,41.75577701',
                'swCoordinates' => '27.59174338,41.71090484',
            ),
            154 =>
            array (
                'id' => 251,
                'name_ar' => 'النسية',
                'name_en' => 'an nasiyah',
                'city_id' => 10,
                'neCoordinates' => '27.64917576,41.72745321',
                'swCoordinates' => '27.59664657,41.65735030',
            ),
            155 =>
            array (
                'id' => 252,
                'name_ar' => 'الشهداء الشمالية',
                'name_en' => 'ash shuhada ash shamaliyah',
                'city_id' => 5,
                'neCoordinates' => '21.27462030,40.43095800',
                'swCoordinates' => '21.26203335,40.41788155',
            ),
            156 =>
            array (
                'id' => 253,
                'name_ar' => 'حوايا',
                'name_en' => 'hawaya',
                'city_id' => 5,
                'neCoordinates' => '21.26952014,40.41822289',
                'swCoordinates' => '21.25955786,40.41065002',
            ),
            157 =>
            array (
                'id' => 254,
                'name_ar' => 'الشهداء الجنوبية',
                'name_en' => 'ash shuhada al janubiyah',
                'city_id' => 5,
                'neCoordinates' => '21.26665571,40.43348552',
                'swCoordinates' => '21.24988177,40.41584142',
            ),
            158 =>
            array (
                'id' => 255,
                'name_ar' => 'المنتزه الغربي',
                'name_en' => 'al muntazah al gharbi',
                'city_id' => 10,
                'neCoordinates' => '27.55533991,41.70385906',
                'swCoordinates' => '27.53632021,41.66268406',
            ),
            159 =>
            array (
                'id' => 256,
                'name_ar' => 'جبرة',
                'name_en' => 'jabrah',
                'city_id' => 5,
                'neCoordinates' => '21.30383898,40.43727292',
                'swCoordinates' => '21.29545845,40.42762737',
            ),
            160 =>
            array (
                'id' => 257,
                'name_ar' => 'القطبية',
                'name_en' => 'al qutbiyah',
                'city_id' => 5,
                'neCoordinates' => '21.30135774,40.45085010',
                'swCoordinates' => '21.27255736,40.42949167',
            ),
            161 =>
            array (
                'id' => 258,
                'name_ar' => 'نخب',
                'name_en' => 'nakhb',
                'city_id' => 5,
                'neCoordinates' => '21.27450204,40.45790718',
                'swCoordinates' => '21.25367431,40.42961998',
            ),
            162 =>
            array (
                'id' => 259,
                'name_ar' => 'القمرية',
                'name_en' => 'al qamariyah',
                'city_id' => 5,
                'neCoordinates' => '21.28826038,40.43453160',
                'swCoordinates' => '21.27303470,40.42274277',
            ),
            163 =>
            array (
                'id' => 260,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 10,
                'neCoordinates' => '27.60213598,41.71090742',
                'swCoordinates' => '27.56542627,41.67193024',
            ),
            164 =>
            array (
                'id' => 261,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayan',
                'city_id' => 5,
                'neCoordinates' => '21.28973637,40.42949167',
                'swCoordinates' => '21.27774910,40.41778006',
            ),
            165 =>
            array (
                'id' => 262,
                'name_ar' => 'الشرقية',
                'name_en' => 'ash sharqiyah',
                'city_id' => 5,
                'neCoordinates' => '21.28141585,40.42456350',
                'swCoordinates' => '21.26680614,40.41175926',
            ),
            166 =>
            array (
                'id' => 263,
                'name_ar' => 'المثناه',
                'name_en' => 'al mathnah',
                'city_id' => 5,
                'neCoordinates' => '21.26870569,40.39968855',
                'swCoordinates' => '21.24638024,40.37268651',
            ),
            167 =>
            array (
                'id' => 264,
                'name_ar' => 'المنطقة المركزية',
                'name_en' => 'central area',
                'city_id' => 5,
                'neCoordinates' => '21.27704627,40.41335069',
                'swCoordinates' => '21.26931060,40.40259015',
            ),
            168 =>
            array (
                'id' => 265,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 5,
                'neCoordinates' => '21.27401051,40.41175926',
                'swCoordinates' => '21.26115548,40.39587559',
            ),
            169 =>
            array (
                'id' => 266,
                'name_ar' => 'قروى',
                'name_en' => 'qurwa',
                'city_id' => 5,
                'neCoordinates' => '21.28717399,40.40327651',
                'swCoordinates' => '21.26554029,40.36693568',
            ),
            170 =>
            array (
                'id' => 267,
                'name_ar' => 'شبرا',
                'name_en' => 'shubra',
                'city_id' => 5,
                'neCoordinates' => '21.28831664,40.42122392',
                'swCoordinates' => '21.27395078,40.41166969',
            ),
            171 =>
            array (
                'id' => 268,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 5,
                'neCoordinates' => '21.32007387,40.43523703',
                'swCoordinates' => '21.28819615,40.41678333',
            ),
            172 =>
            array (
                'id' => 269,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 5,
                'neCoordinates' => '21.29940562,40.40345150',
                'swCoordinates' => '21.27305090,40.36818499',
            ),
            173 =>
            array (
                'id' => 270,
                'name_ar' => 'العقيق',
                'name_en' => 'al aqiq',
                'city_id' => 5,
                'neCoordinates' => '21.29223966,40.41678333',
                'swCoordinates' => '21.28253859,40.40432059',
            ),
            174 =>
            array (
                'id' => 271,
                'name_ar' => 'معشي',
                'name_en' => 'maashi',
                'city_id' => 5,
                'neCoordinates' => '21.29293931,40.40461786',
                'swCoordinates' => '21.27710604,40.39690495',
            ),
            175 =>
            array (
                'id' => 272,
                'name_ar' => 'الوشحاء',
                'name_en' => 'al washha',
                'city_id' => 5,
                'neCoordinates' => '21.26553524,40.47157599',
                'swCoordinates' => '21.23478191,40.42729519',
            ),
            176 =>
            array (
                'id' => 273,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 5,
                'neCoordinates' => '21.26184180,40.42928673',
                'swCoordinates' => '21.24546425,40.41204984',
            ),
            177 =>
            array (
                'id' => 274,
                'name_ar' => 'المنتزه الشرقي',
                'name_en' => 'al muntazah ash sharqi',
                'city_id' => 10,
                'neCoordinates' => '27.55492476,41.73105302',
                'swCoordinates' => '27.53306851,41.69542750',
            ),
            178 =>
            array (
                'id' => 275,
                'name_ar' => 'اسكان الحرس الوطني',
                'name_en' => 'iskan al haras al watani',
                'city_id' => 12,
                'neCoordinates' => '25.45809290,49.53847913',
                'swCoordinates' => '25.43737145,49.50571894',
            ),
            179 =>
            array (
                'id' => 276,
                'name_ar' => 'اليحيى',
                'name_en' => 'al yahya',
                'city_id' => 12,
                'neCoordinates' => '25.43614999,49.58363666',
                'swCoordinates' => '25.42531676,49.57236636',
            ),
            180 =>
            array (
                'id' => 277,
                'name_ar' => 'الشروفية',
                'name_en' => 'ash shurufiyah',
                'city_id' => 12,
                'neCoordinates' => '25.42663300,49.58473989',
                'swCoordinates' => '25.41978113,49.57380059',
            ),
            181 =>
            array (
                'id' => 278,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 12,
                'neCoordinates' => '25.42219204,49.58521220',
                'swCoordinates' => '25.41654727,49.57478317',
            ),
            182 =>
            array (
                'id' => 279,
                'name_ar' => 'القديمات',
                'name_en' => 'al qudaymat',
                'city_id' => 12,
                'neCoordinates' => '25.41751875,49.59609826',
                'swCoordinates' => '25.41142644,49.58744852',
            ),
            183 =>
            array (
                'id' => 280,
                'name_ar' => 'العتبان',
                'name_en' => 'al utban',
                'city_id' => 12,
                'neCoordinates' => '25.41739077,49.58804969',
                'swCoordinates' => '25.41309650,49.57879220',
            ),
            184 =>
            array (
                'id' => 281,
                'name_ar' => 'السياسب',
                'name_en' => 'al sayasib',
                'city_id' => 12,
                'neCoordinates' => '25.41385648,49.58907830',
                'swCoordinates' => '25.40750104,49.58322142',
            ),
            185 =>
            array (
                'id' => 282,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 12,
                'neCoordinates' => '25.41998421,49.57887719',
                'swCoordinates' => '25.40195964,49.56092532',
            ),
            186 =>
            array (
                'id' => 284,
                'name_ar' => 'مخطط الراجحي',
                'name_en' => 'al rajihi subdivision',
                'city_id' => 12,
                'neCoordinates' => '25.44915544,49.57472404',
                'swCoordinates' => '25.41978366,49.52784502',
            ),
            187 =>
            array (
                'id' => 285,
                'name_ar' => 'محاسن البلدية',
                'name_en' => 'mahasin al baladiyah',
                'city_id' => 12,
                'neCoordinates' => '25.42333919,49.56144498',
                'swCoordinates' => '25.40039775,49.54606531',
            ),
            188 =>
            array (
                'id' => 286,
                'name_ar' => 'محاسن ارامكو',
                'name_en' => 'mahasin aramco',
                'city_id' => 12,
                'neCoordinates' => '25.42760317,49.54880705',
                'swCoordinates' => '25.39988390,49.51469078',
            ),
            189 =>
            array (
                'id' => 287,
                'name_ar' => 'وسط المدينة',
                'name_en' => 'down town',
                'city_id' => 12,
                'neCoordinates' => '25.40944741,49.59851085',
                'swCoordinates' => '25.38938119,49.56060352',
            ),
            190 =>
            array (
                'id' => 288,
                'name_ar' => 'الرفعة الشمالية',
                'name_en' => 'ar rafah ash shamaliyah',
                'city_id' => 12,
                'neCoordinates' => '25.38021692,49.59785350',
                'swCoordinates' => '25.37402408,49.58583270',
            ),
            191 =>
            array (
                'id' => 289,
                'name_ar' => 'الرفعة الجنوبية',
                'name_en' => 'ar rafah al janubiyah',
                'city_id' => 12,
                'neCoordinates' => '25.37450359,49.59378900',
                'swCoordinates' => '25.36765798,49.58669474',
            ),
            192 =>
            array (
                'id' => 290,
                'name_ar' => 'الكوت النعاثل',
                'name_en' => 'al kawt an naathil',
                'city_id' => 12,
                'neCoordinates' => '25.38141645,49.58687646',
                'swCoordinates' => '25.37060998,49.57628670',
            ),
            193 =>
            array (
                'id' => 291,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 12,
                'neCoordinates' => '25.37871493,49.60392212',
                'swCoordinates' => '25.36808959,49.59133164',
            ),
            194 =>
            array (
                'id' => 293,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 12,
                'neCoordinates' => '25.36929622,49.61510099',
                'swCoordinates' => '25.34396686,49.59868825',
            ),
            195 =>
            array (
                'id' => 294,
                'name_ar' => 'مناطق زراعية',
                'name_en' => 'agricultura area',
                'city_id' => 12,
                'neCoordinates' => '25.61475219,49.76929764',
                'swCoordinates' => '25.27574260,49.54324644',
            ),
            196 =>
            array (
                'id' => 295,
                'name_ar' => 'محمد العيسى',
                'name_en' => 'muhammed al isa',
                'city_id' => 12,
                'neCoordinates' => '25.36049743,49.62694056',
                'swCoordinates' => '25.34801453,49.60900770',
            ),
            197 =>
            array (
                'id' => 296,
                'name_ar' => 'الجشة',
                'name_en' => 'al jishah',
                'city_id' => 12,
                'neCoordinates' => '25.39324070,49.76318226',
                'swCoordinates' => '25.38166220,49.74077471',
            ),
            198 =>
            array (
                'id' => 297,
                'name_ar' => 'مدينة العيون',
                'name_en' => 'madinat al uyun',
                'city_id' => 12,
                'neCoordinates' => '25.63579021,49.57236902',
                'swCoordinates' => '25.58653315,49.53848202',
            ),
            199 =>
            array (
                'id' => 298,
                'name_ar' => 'الطرف',
                'name_en' => 'at tarf',
                'city_id' => 12,
                'neCoordinates' => '25.36869448,49.73950184',
                'swCoordinates' => '25.33351452,49.70325619',
            ),
            200 =>
            array (
                'id' => 299,
                'name_ar' => 'جواثا',
                'name_en' => 'jwatha',
                'city_id' => 12,
                'neCoordinates' => '25.46366749,49.69222673',
                'swCoordinates' => '25.42480908,49.63645630',
            ),
            201 =>
            array (
                'id' => 300,
                'name_ar' => 'الشعبى',
                'name_en' => 'ash shuabi',
                'city_id' => 12,
                'neCoordinates' => '25.48267824,49.62538561',
                'swCoordinates' => '25.46124358,49.61221666',
            ),
            202 =>
            array (
                'id' => 301,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 12,
                'neCoordinates' => '25.46135965,49.61239428',
                'swCoordinates' => '25.44743067,49.59264253',
            ),
            203 =>
            array (
                'id' => 302,
                'name_ar' => 'مدينة العمران',
                'name_en' => 'madinat al umran',
                'city_id' => 12,
                'neCoordinates' => '25.42999150,49.73082192',
                'swCoordinates' => '25.39933781,49.70194643',
            ),
            204 =>
            array (
                'id' => 303,
                'name_ar' => 'الخرس',
                'name_en' => 'al khars',
                'city_id' => 12,
                'neCoordinates' => '25.44835282,49.58295150',
                'swCoordinates' => '25.43475798,49.56822308',
            ),
            205 =>
            array (
                'id' => 304,
                'name_ar' => 'الراشدية',
                'name_en' => 'ar rashidiyah',
                'city_id' => 12,
                'neCoordinates' => '25.45791574,49.59878231',
                'swCoordinates' => '25.43603367,49.57931981',
            ),
            206 =>
            array (
                'id' => 305,
                'name_ar' => 'المطيرفي',
                'name_en' => 'al mutayrifi',
                'city_id' => 12,
                'neCoordinates' => '25.48336289,49.56112530',
                'swCoordinates' => '25.47181221,49.55184508',
            ),
            207 =>
            array (
                'id' => 306,
                'name_ar' => 'مخطط علي الخرس واحمد الشهاب',
                'name_en' => 'ali al khars and ahmad ash shihab subdivision',
                'city_id' => 12,
                'neCoordinates' => '25.46144949,49.56969730',
                'swCoordinates' => '25.43667678,49.54557067',
            ),
            208 =>
            array (
                'id' => 307,
                'name_ar' => 'مدينة المبرز',
                'name_en' => 'madinat al mubarraz',
                'city_id' => 12,
                'neCoordinates' => '25.42235323,49.60109397',
                'swCoordinates' => '25.41557912,49.58468645',
            ),
            209 =>
            array (
                'id' => 309,
                'name_ar' => 'الشعبة',
                'name_en' => 'ash shuabah',
                'city_id' => 12,
                'neCoordinates' => '25.41631617,49.60264876',
                'swCoordinates' => '25.40840265,49.58843221',
            ),
            210 =>
            array (
                'id' => 310,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 12,
                'neCoordinates' => '25.41002941,49.61398584',
                'swCoordinates' => '25.39270704,49.59578041',
            ),
            211 =>
            array (
                'id' => 311,
                'name_ar' => 'الفاضلية',
                'name_en' => 'al fadiliyah',
                'city_id' => 12,
                'neCoordinates' => '25.39473685,49.60897309',
                'swCoordinates' => '25.37840520,49.58148619',
            ),
            212 =>
            array (
                'id' => 313,
                'name_ar' => 'البصيرة',
                'name_en' => 'al basirah',
                'city_id' => 12,
                'neCoordinates' => '25.37489543,49.61967391',
                'swCoordinates' => '25.36245945,49.60347957',
            ),
            213 =>
            array (
                'id' => 314,
                'name_ar' => 'الشهابية',
                'name_en' => 'ash shihabiyah',
                'city_id' => 12,
                'neCoordinates' => '25.36452841,49.62491476',
                'swCoordinates' => '25.35618983,49.60482653',
            ),
            214 =>
            array (
                'id' => 315,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 12,
                'neCoordinates' => '25.36492019,49.64394009',
                'swCoordinates' => '25.34713990,49.62448174',
            ),
            215 =>
            array (
                'id' => 316,
                'name_ar' => 'عبداللطيف العيسى',
                'name_en' => 'abdul latif al isa',
                'city_id' => 12,
                'neCoordinates' => '25.35498510,49.63491097',
                'swCoordinates' => '25.34393525,49.61362016',
            ),
            216 =>
            array (
                'id' => 317,
                'name_ar' => 'الجامعيين',
                'name_en' => 'al jamiyin',
                'city_id' => 12,
                'neCoordinates' => '25.32582049,49.60590439',
                'swCoordinates' => '25.30585558,49.57801352',
            ),
            217 =>
            array (
                'id' => 318,
                'name_ar' => 'المزروع',
                'name_en' => 'al mazrua',
                'city_id' => 12,
                'neCoordinates' => '25.34886149,49.62111632',
                'swCoordinates' => '25.33359272,49.60404391',
            ),
            218 =>
            array (
                'id' => 319,
                'name_ar' => 'جامعة الملك فيصل',
                'name_en' => 'king faisal university',
                'city_id' => 12,
                'neCoordinates' => '25.35290741,49.61473557',
                'swCoordinates' => '25.31408708,49.59096454',
            ),
            219 =>
            array (
                'id' => 320,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 12,
                'neCoordinates' => '25.33678086,49.61544454',
                'swCoordinates' => '25.32114710,49.60353758',
            ),
            220 =>
            array (
                'id' => 321,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 12,
                'neCoordinates' => '25.34024349,49.63864623',
                'swCoordinates' => '25.31914103,49.61470602',
            ),
            221 =>
            array (
                'id' => 322,
                'name_ar' => 'الاسكان العام',
                'name_en' => 'al iskan al am',
                'city_id' => 12,
                'neCoordinates' => '25.33057506,49.59940616',
                'swCoordinates' => '25.32208006,49.58789129',
            ),
            222 =>
            array (
                'id' => 323,
                'name_ar' => 'جنوب منسوبي التعليم',
                'name_en' => 'janub mansubi at talim',
                'city_id' => 12,
                'neCoordinates' => '25.31411771,49.61415719',
                'swCoordinates' => '25.28924257,49.58713146',
            ),
            223 =>
            array (
                'id' => 324,
                'name_ar' => 'مناطق زراعية',
                'name_en' => 'agricultura area',
                'city_id' => 12,
                'neCoordinates' => '25.32588120,49.67699297',
                'swCoordinates' => '25.27160260,49.60590423',
            ),
            224 =>
            array (
                'id' => 326,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 12,
                'neCoordinates' => '25.34475540,49.59707361',
                'swCoordinates' => '25.32651129,49.57976631',
            ),
            225 =>
            array (
                'id' => 327,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 12,
                'neCoordinates' => '25.33184392,49.59291643',
                'swCoordinates' => '25.31915360,49.57807029',
            ),
            226 =>
            array (
                'id' => 328,
                'name_ar' => 'العويمرية',
                'name_en' => 'al uwaimiriyah',
                'city_id' => 12,
                'neCoordinates' => '25.36450774,49.59376501',
                'swCoordinates' => '25.34374145,49.57973431',
            ),
            227 =>
            array (
                'id' => 329,
                'name_ar' => 'مطار',
                'name_en' => 'airport',
                'city_id' => 12,
                'neCoordinates' => '25.30088525,49.49935461',
                'swCoordinates' => '25.26144324,49.47820405',
            ),
            228 =>
            array (
                'id' => 330,
                'name_ar' => 'البندرية',
                'name_en' => 'al bandariyah',
                'city_id' => 12,
                'neCoordinates' => '25.34818625,49.58336497',
                'swCoordinates' => '25.33182901,49.55848084',
            ),
            229 =>
            array (
                'id' => 331,
                'name_ar' => 'السلمانية الجنوبية',
                'name_en' => 'as salmaniyah al janubiyah',
                'city_id' => 12,
                'neCoordinates' => '25.36319320,49.56792874',
                'swCoordinates' => '25.33809477,49.52990739',
            ),
            230 =>
            array (
                'id' => 332,
                'name_ar' => 'جنوب الهفوف',
                'name_en' => 'janub al hafuf',
                'city_id' => 12,
                'neCoordinates' => '25.32376142,49.58544135',
                'swCoordinates' => '25.29722692,49.53543456',
            ),
            231 =>
            array (
                'id' => 333,
                'name_ar' => 'السلمانية الشمالية',
                'name_en' => 'as salmaniyah ash shamaliyah',
                'city_id' => 12,
                'neCoordinates' => '25.37575988,49.55589552',
                'swCoordinates' => '25.35369465,49.53497836',
            ),
            232 =>
            array (
                'id' => 334,
                'name_ar' => 'الصيهد',
                'name_en' => 'as sayhad',
                'city_id' => 12,
                'neCoordinates' => '25.37263827,49.56230432',
                'swCoordinates' => '25.36139564,49.55514820',
            ),
            233 =>
            array (
                'id' => 335,
                'name_ar' => 'المعلمين الغربية',
                'name_en' => 'al mualimin al gharbiyah',
                'city_id' => 12,
                'neCoordinates' => '25.37372397,49.56780704',
                'swCoordinates' => '25.36277631,49.55983138',
            ),
            234 =>
            array (
                'id' => 336,
                'name_ar' => 'الرقيقة',
                'name_en' => 'ar ruqayqah',
                'city_id' => 12,
                'neCoordinates' => '25.36418650,49.58039670',
                'swCoordinates' => '25.34475223,49.56697217',
            ),
            235 =>
            array (
                'id' => 337,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 12,
                'neCoordinates' => '25.38103552,49.56556841',
                'swCoordinates' => '25.37173386,49.55478022',
            ),
            236 =>
            array (
                'id' => 338,
                'name_ar' => 'المزروعية',
                'name_en' => 'al mazruaiyah',
                'city_id' => 12,
                'neCoordinates' => '25.37216284,49.58842428',
                'swCoordinates' => '25.36648132,49.56649501',
            ),
            237 =>
            array (
                'id' => 339,
                'name_ar' => 'المعلمين الشرقية',
                'name_en' => 'al mualimin ash sharqiyah',
                'city_id' => 12,
                'neCoordinates' => '25.36821957,49.58822148',
                'swCoordinates' => '25.36325635,49.56708439',
            ),
            238 =>
            array (
                'id' => 341,
                'name_ar' => 'النايفية',
                'name_en' => 'an nayfiyah',
                'city_id' => 12,
                'neCoordinates' => '25.34213549,49.56486149',
                'swCoordinates' => '25.31896673,49.53819593',
            ),
            239 =>
            array (
                'id' => 342,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 12,
                'neCoordinates' => '25.33599016,49.58059848',
                'swCoordinates' => '25.32239568,49.56246784',
            ),
            240 =>
            array (
                'id' => 343,
                'name_ar' => 'المثلث',
                'name_en' => 'al muthalath',
                'city_id' => 12,
                'neCoordinates' => '25.35389839,49.60847459',
                'swCoordinates' => '25.34377869,49.59376510',
            ),
            241 =>
            array (
                'id' => 344,
                'name_ar' => 'بو سحبل',
                'name_en' => 'bu sahbal',
                'city_id' => 12,
                'neCoordinates' => '25.47034841,49.62710120',
                'swCoordinates' => '25.45166662,49.60752649',
            ),
            242 =>
            array (
                'id' => 345,
                'name_ar' => 'المنيزلة',
                'name_en' => 'al munayzilah',
                'city_id' => 12,
                'neCoordinates' => '25.38559630,49.67976631',
                'swCoordinates' => '25.37276836,49.65873002',
            ),
            243 =>
            array (
                'id' => 346,
                'name_ar' => 'مدينة الجفر',
                'name_en' => 'madinat al jafr',
                'city_id' => 12,
                'neCoordinates' => '25.38645058,49.73166448',
                'swCoordinates' => '25.37204018,49.71249311',
            ),
            244 =>
            array (
                'id' => 347,
                'name_ar' => 'خاخ',
                'name_en' => 'khakh',
                'city_id' => 14,
                'neCoordinates' => '24.37598501,39.55418136',
                'swCoordinates' => '24.34865914,39.52909345',
            ),
            245 =>
            array (
                'id' => 348,
                'name_ar' => 'السكب',
                'name_en' => 'as sakb',
                'city_id' => 14,
                'neCoordinates' => '24.37416180,39.60606985',
                'swCoordinates' => '24.34351994,39.55247952',
            ),
            246 =>
            array (
                'id' => 349,
                'name_ar' => 'الجصة',
                'name_en' => 'al jassah',
                'city_id' => 14,
                'neCoordinates' => '24.37623310,39.63113246',
                'swCoordinates' => '24.34483108,39.59937795',
            ),
            247 =>
            array (
                'id' => 350,
                'name_ar' => 'رهط',
                'name_en' => 'raht',
                'city_id' => 14,
                'neCoordinates' => '24.38711817,39.66289270',
                'swCoordinates' => '24.35136902,39.61955193',
            ),
            248 =>
            array (
                'id' => 351,
                'name_ar' => 'بني بياضة',
                'name_en' => 'bani bayadah',
                'city_id' => 14,
                'neCoordinates' => '24.39660138,39.59937795',
                'swCoordinates' => '24.36600980,39.58374368',
            ),
            249 =>
            array (
                'id' => 352,
                'name_ar' => 'نبلاء',
                'name_en' => 'nubala',
                'city_id' => 14,
                'neCoordinates' => '24.39527414,39.68147446',
                'swCoordinates' => '24.36391007,39.64382110',
            ),
            250 =>
            array (
                'id' => 353,
                'name_ar' => 'الشهباء',
                'name_en' => 'ash shahba',
                'city_id' => 14,
                'neCoordinates' => '24.41161676,39.56132845',
                'swCoordinates' => '24.37285355,39.54378233',
            ),
            251 =>
            array (
                'id' => 354,
                'name_ar' => 'الرمانة',
                'name_en' => 'ar rumanah',
                'city_id' => 14,
                'neCoordinates' => '24.41123200,39.69659657',
                'swCoordinates' => '24.37527327,39.66175225',
            ),
            252 =>
            array (
                'id' => 355,
                'name_ar' => 'ابو كبير',
                'name_en' => 'abu kabir',
                'city_id' => 14,
                'neCoordinates' => '24.41221227,39.55247952',
                'swCoordinates' => '24.37231445,39.52014132',
            ),
            253 =>
            array (
                'id' => 356,
                'name_ar' => 'الغراء',
                'name_en' => 'al gharra',
                'city_id' => 14,
                'neCoordinates' => '24.41684314,39.68457524',
                'swCoordinates' => '24.39373158,39.65276219',
            ),
            254 =>
            array (
                'id' => 357,
                'name_ar' => 'السد',
                'name_en' => 'as sad',
                'city_id' => 14,
                'neCoordinates' => '24.42346433,39.65836777',
                'swCoordinates' => '24.38711817,39.62121689',
            ),
            255 =>
            array (
                'id' => 358,
                'name_ar' => 'الجابرة',
                'name_en' => 'al jabirah',
                'city_id' => 14,
                'neCoordinates' => '24.42336894,39.59388801',
                'swCoordinates' => '24.39126481,39.57691594',
            ),
            256 =>
            array (
                'id' => 359,
                'name_ar' => 'الرانوناء',
                'name_en' => 'ar ranuna',
                'city_id' => 14,
                'neCoordinates' => '24.42576440,39.61955193',
                'swCoordinates' => '24.36887022,39.58538629',
            ),
            257 =>
            array (
                'id' => 360,
                'name_ar' => 'الحديقة',
                'name_en' => 'al hadiqah',
                'city_id' => 14,
                'neCoordinates' => '24.42780333,39.62344933',
                'swCoordinates' => '24.40458668,39.59710829',
            ),
            258 =>
            array (
                'id' => 361,
                'name_ar' => 'ابو بريقاء',
                'name_en' => 'abu burayqa',
                'city_id' => 14,
                'neCoordinates' => '24.42842803,39.57850596',
                'swCoordinates' => '24.40875512,39.54873711',
            ),
            259 =>
            array (
                'id' => 362,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 14,
                'neCoordinates' => '24.42942478,39.67474071',
                'swCoordinates' => '24.40279279,39.64317944',
            ),
            260 =>
            array (
                'id' => 363,
                'name_ar' => 'القصواء',
                'name_en' => 'al qaswa',
                'city_id' => 14,
                'neCoordinates' => '24.43614446,39.60672061',
                'swCoordinates' => '24.42159020,39.57525627',
            ),
            261 =>
            array (
                'id' => 364,
                'name_ar' => 'العصبة',
                'name_en' => 'al usbah',
                'city_id' => 14,
                'neCoordinates' => '24.43947562,39.62121689',
                'swCoordinates' => '24.42018867,39.60149426',
            ),
            262 =>
            array (
                'id' => 365,
                'name_ar' => 'الخاتم',
                'name_en' => 'al khatim',
                'city_id' => 14,
                'neCoordinates' => '24.44083625,39.63516501',
                'swCoordinates' => '24.42006793,39.61677078',
            ),
            263 =>
            array (
                'id' => 366,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 14,
                'neCoordinates' => '24.44135870,39.53214034',
                'swCoordinates' => '24.39429689,39.46999175',
            ),
            264 =>
            array (
                'id' => 367,
                'name_ar' => 'العهن',
                'name_en' => 'al ihn',
                'city_id' => 14,
                'neCoordinates' => '24.44236613,39.65286753',
                'swCoordinates' => '24.42185321,39.62550873',
            ),
            265 =>
            array (
                'id' => 368,
                'name_ar' => 'ذو الحليفة',
                'name_en' => 'dhu al hulayfah',
                'city_id' => 14,
                'neCoordinates' => '24.44675568,39.58312458',
                'swCoordinates' => '24.40984662,39.53874723',
            ),
            266 =>
            array (
                'id' => 369,
                'name_ar' => 'مهزور',
                'name_en' => 'mahzur',
                'city_id' => 14,
                'neCoordinates' => '24.45089633,39.66871843',
                'swCoordinates' => '24.42942478,39.63329137',
            ),
            267 =>
            array (
                'id' => 370,
                'name_ar' => 'الدويمة',
                'name_en' => 'ad duwaimah',
                'city_id' => 14,
                'neCoordinates' => '24.45175036,39.61677078',
                'swCoordinates' => '24.43804088,39.60270929',
            ),
            268 =>
            array (
                'id' => 371,
                'name_ar' => 'مذينب',
                'name_en' => 'mudhainib',
                'city_id' => 14,
                'neCoordinates' => '24.45328745,39.68996536',
                'swCoordinates' => '24.41684314,39.65286753',
            ),
            269 =>
            array (
                'id' => 372,
                'name_ar' => 'عين الخيف',
                'name_en' => 'ayn al khif',
                'city_id' => 14,
                'neCoordinates' => '24.45347961,39.69650884',
                'swCoordinates' => '24.41123200,39.67474071',
            ),
            270 =>
            array (
                'id' => 373,
                'name_ar' => 'عروة',
                'name_en' => 'urwah',
                'city_id' => 14,
                'neCoordinates' => '24.45317324,39.60149426',
                'swCoordinates' => '24.43213413,39.57448761',
            ),
            271 =>
            array (
                'id' => 374,
                'name_ar' => 'الظاهرة',
                'name_en' => 'az zahirah',
                'city_id' => 14,
                'neCoordinates' => '24.45687987,39.61016534',
                'swCoordinates' => '24.43614446,39.59108787',
            ),
            272 =>
            array (
                'id' => 375,
                'name_ar' => 'الشريبات',
                'name_en' => 'ash shuraybat',
                'city_id' => 14,
                'neCoordinates' => '24.45756294,39.64653045',
                'swCoordinates' => '24.44236613,39.63084025',
            ),
            273 =>
            array (
                'id' => 376,
                'name_ar' => 'ام خالد',
                'name_en' => 'umm khalid',
                'city_id' => 14,
                'neCoordinates' => '24.45837896,39.55932232',
                'swCoordinates' => '24.40460196,39.52109373',
            ),
            274 =>
            array (
                'id' => 377,
                'name_ar' => 'الجمعة',
                'name_en' => 'al jumah',
                'city_id' => 14,
                'neCoordinates' => '24.46273504,39.62546714',
                'swCoordinates' => '24.43947562,39.60787588',
            ),
            275 =>
            array (
                'id' => 378,
                'name_ar' => 'المغيسلة',
                'name_en' => 'al mughaisilah',
                'city_id' => 14,
                'neCoordinates' => '24.46319219,39.61150064',
                'swCoordinates' => '24.44910097,39.59741828',
            ),
            276 =>
            array (
                'id' => 379,
                'name_ar' => 'قربان',
                'name_en' => 'qurban',
                'city_id' => 14,
                'neCoordinates' => '24.46388020,39.63329137',
                'swCoordinates' => '24.44067022,39.60995841',
            ),
            277 =>
            array (
                'id' => 380,
                'name_ar' => 'الدفاع',
                'name_en' => 'ad difa',
                'city_id' => 14,
                'neCoordinates' => '24.46581450,39.54650657',
                'swCoordinates' => '24.42198891,39.49896488',
            ),
            278 =>
            array (
                'id' => 381,
                'name_ar' => 'السكة الحديد',
                'name_en' => 'as sikkah al hadid',
                'city_id' => 14,
                'neCoordinates' => '24.46729928,39.50495318',
                'swCoordinates' => '24.43325094,39.46190230',
            ),
            279 =>
            array (
                'id' => 382,
                'name_ar' => 'الوبرة',
                'name_en' => 'al wabra',
                'city_id' => 14,
                'neCoordinates' => '24.46670471,39.59108787',
                'swCoordinates' => '24.45104588,39.57732914',
            ),
            280 =>
            array (
                'id' => 383,
                'name_ar' => 'الاصيفرين',
                'name_en' => 'al usayfirin',
                'city_id' => 14,
                'neCoordinates' => '24.46670171,39.59741828',
                'swCoordinates' => '24.45317324,39.58337790',
            ),
            281 =>
            array (
                'id' => 384,
                'name_ar' => 'النقاء',
                'name_en' => 'an naqa',
                'city_id' => 14,
                'neCoordinates' => '24.46694035,39.60791433',
                'swCoordinates' => '24.46264343,39.60296567',
            ),
            282 =>
            array (
                'id' => 385,
                'name_ar' => 'بني ظفر',
                'name_en' => 'bani zafar',
                'city_id' => 14,
                'neCoordinates' => '24.46939270,39.64193765',
                'swCoordinates' => '24.44827199,39.61834003',
            ),
            283 =>
            array (
                'id' => 386,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 14,
                'neCoordinates' => '24.47055609,39.65999919',
                'swCoordinates' => '24.44421282,39.63537336',
            ),
            284 =>
            array (
                'id' => 387,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 14,
                'neCoordinates' => '24.47154570,39.66879568',
                'swCoordinates' => '24.44838209,39.64987885',
            ),
            285 =>
            array (
                'id' => 388,
                'name_ar' => 'الجماوات',
                'name_en' => 'al jamawat',
                'city_id' => 14,
                'neCoordinates' => '24.47212033,39.57805107',
                'swCoordinates' => '24.46007921,39.54749713',
            ),
            286 =>
            array (
                'id' => 389,
                'name_ar' => 'المناخة',
                'name_en' => 'al manakhah',
                'city_id' => 14,
                'neCoordinates' => '24.47335168,39.60776550',
                'swCoordinates' => '24.46684047,39.60301241',
            ),
            287 =>
            array (
                'id' => 390,
                'name_ar' => 'بضاعة',
                'name_en' => 'badaah',
                'city_id' => 14,
                'neCoordinates' => '24.47359993,39.61462614',
                'swCoordinates' => '24.47044421,39.60619039',
            ),
            288 =>
            array (
                'id' => 391,
                'name_ar' => 'حثم',
                'name_en' => 'hathm',
                'city_id' => 14,
                'neCoordinates' => '24.47440886,39.69828691',
                'swCoordinates' => '24.45089633,39.66225599',
            ),
            289 =>
            array (
                'id' => 392,
                'name_ar' => 'الهدراء',
                'name_en' => 'al hadra',
                'city_id' => 14,
                'neCoordinates' => '24.47523534,39.70909671',
                'swCoordinates' => '24.40431903,39.68457524',
            ),
            290 =>
            array (
                'id' => 393,
                'name_ar' => 'السيح',
                'name_en' => 'as sih',
                'city_id' => 14,
                'neCoordinates' => '24.47702086,39.60335746',
                'swCoordinates' => '24.46664061,39.59228844',
            ),
            291 =>
            array (
                'id' => 394,
                'name_ar' => 'المصانع',
                'name_en' => 'al masani',
                'city_id' => 14,
                'neCoordinates' => '24.48535321,39.61645171',
                'swCoordinates' => '24.47320515,39.60367392',
            ),
            292 =>
            array (
                'id' => 395,
                'name_ar' => 'القبلتين',
                'name_en' => 'al qiblatayn',
                'city_id' => 14,
                'neCoordinates' => '24.48875932,39.58483126',
                'swCoordinates' => '24.46669648,39.56882012',
            ),
            293 =>
            array (
                'id' => 396,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 14,
                'neCoordinates' => '24.48957399,39.54986243',
                'swCoordinates' => '24.45955335,39.50470847',
            ),
            294 =>
            array (
                'id' => 398,
                'name_ar' => 'المبعوث',
                'name_en' => 'al mabuth',
                'city_id' => 14,
                'neCoordinates' => '24.49607110,39.69846002',
                'swCoordinates' => '24.47154570,39.65240067',
            ),
            295 =>
            array (
                'id' => 399,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 14,
                'neCoordinates' => '24.49958586,39.57802214',
                'swCoordinates' => '24.46670471,39.54986243',
            ),
            296 =>
            array (
                'id' => 400,
                'name_ar' => 'بني حارثة',
                'name_en' => 'bani harithah',
                'city_id' => 14,
                'neCoordinates' => '24.49970229,39.64193755',
                'swCoordinates' => '24.48020388,39.61645171',
            ),
            297 =>
            array (
                'id' => 401,
                'name_ar' => 'بئر عثمان',
                'name_en' => 'bir uthman',
                'city_id' => 14,
                'neCoordinates' => '24.50766241,39.59298133',
                'swCoordinates' => '24.48027414,39.57246219',
            ),
            298 =>
            array (
                'id' => 402,
                'name_ar' => 'شظاة',
                'name_en' => 'shizat',
                'city_id' => 14,
                'neCoordinates' => '24.50774866,39.66679080',
                'swCoordinates' => '24.48265246,39.64287705',
            ),
            299 =>
            array (
                'id' => 403,
                'name_ar' => 'طيبة',
                'name_en' => 'taibah',
                'city_id' => 14,
                'neCoordinates' => '24.51586969,39.55718608',
                'swCoordinates' => '24.47212033,39.50470847',
            ),
            300 =>
            array (
                'id' => 404,
                'name_ar' => 'الدويخلة',
                'name_en' => 'ad duwaikhilah',
                'city_id' => 14,
                'neCoordinates' => '24.52090551,39.69258869',
                'swCoordinates' => '24.48981941,39.65779086',
            ),
            301 =>
            array (
                'id' => 405,
                'name_ar' => 'القلعة',
                'name_en' => 'al qalah',
                'city_id' => 14,
                'neCoordinates' => '24.52308578,39.67009661',
                'swCoordinates' => '24.49267247,39.63992543',
            ),
            302 =>
            array (
                'id' => 406,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 14,
                'neCoordinates' => '24.52858189,39.71024549',
                'swCoordinates' => '24.47440886,39.67311052',
            ),
            303 =>
            array (
                'id' => 408,
                'name_ar' => 'البركة',
                'name_en' => 'al barakah',
                'city_id' => 14,
                'neCoordinates' => '24.54492551,39.58753524',
                'swCoordinates' => '24.48875932,39.55718608',
            ),
            304 =>
            array (
                'id' => 409,
                'name_ar' => 'العيون',
                'name_en' => 'al uyun',
                'city_id' => 14,
                'neCoordinates' => '24.54672080,39.60219638',
                'swCoordinates' => '24.49221214,39.58095430',
            ),
            305 =>
            array (
                'id' => 410,
                'name_ar' => 'الدار',
                'name_en' => 'ad dar',
                'city_id' => 14,
                'neCoordinates' => '24.54668236,39.65699930',
                'swCoordinates' => '24.51525454,39.61527147',
            ),
            306 =>
            array (
                'id' => 411,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 14,
                'neCoordinates' => '24.54885269,39.56571276',
                'swCoordinates' => '24.49958586,39.53596541',
            ),
            307 =>
            array (
                'id' => 412,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 14,
                'neCoordinates' => '24.55379893,39.58254319',
                'swCoordinates' => '24.50991743,39.55265046',
            ),
            308 =>
            array (
                'id' => 413,
                'name_ar' => 'الحفيا',
                'name_en' => 'al hafya',
                'city_id' => 14,
                'neCoordinates' => '24.56106131,39.54725334',
                'swCoordinates' => '24.51586969,39.48230539',
            ),
            309 =>
            array (
                'id' => 414,
                'name_ar' => 'البلقاء',
                'name_en' => 'al balqa',
                'city_id' => 14,
                'neCoordinates' => '24.56460161,39.46616034',
                'swCoordinates' => '24.51596465,39.43846010',
            ),
            310 =>
            array (
                'id' => 415,
                'name_ar' => 'كتانة',
                'name_en' => 'kittanah',
                'city_id' => 14,
                'neCoordinates' => '24.56756450,39.57200710',
                'swCoordinates' => '24.53902898,39.54141228',
            ),
            311 =>
            array (
                'id' => 416,
                'name_ar' => 'الصادقية',
                'name_en' => 'as sadiqiyah',
                'city_id' => 14,
                'neCoordinates' => '24.57172221,39.59758555',
                'swCoordinates' => '24.54322307,39.56533120',
            ),
            312 =>
            array (
                'id' => 417,
                'name_ar' => 'الغابة',
                'name_en' => 'al ghabah',
                'city_id' => 14,
                'neCoordinates' => '24.57413241,39.62341881',
                'swCoordinates' => '24.54646330,39.58931354',
            ),
            313 =>
            array (
                'id' => 418,
                'name_ar' => 'النقس',
                'name_en' => 'an naqs',
                'city_id' => 14,
                'neCoordinates' => '24.57801702,39.66578930',
                'swCoordinates' => '24.54017868,39.62058439',
            ),
            314 =>
            array (
                'id' => 419,
                'name_ar' => 'وعيرة',
                'name_en' => 'wairah',
                'city_id' => 14,
                'neCoordinates' => '24.57882996,39.68899247',
                'swCoordinates' => '24.51846137,39.64620218',
            ),
            315 =>
            array (
                'id' => 420,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 14,
                'neCoordinates' => '24.60220759,39.69214061',
                'swCoordinates' => '24.53075033,39.65969947',
            ),
            316 =>
            array (
                'id' => 421,
                'name_ar' => 'العريض',
                'name_en' => 'al ariyd',
                'city_id' => 14,
                'neCoordinates' => '24.49297938,39.66225599',
                'swCoordinates' => '24.46939270,39.62936727',
            ),
            317 =>
            array (
                'id' => 422,
                'name_ar' => 'العنابس',
                'name_en' => 'al anabis',
                'city_id' => 14,
                'neCoordinates' => '24.48027414,39.59331994',
                'swCoordinates' => '24.46666192,39.58256381',
            ),
            318 =>
            array (
                'id' => 423,
                'name_ar' => 'الفتح',
                'name_en' => 'al fath',
                'city_id' => 14,
                'neCoordinates' => '24.48691341,39.60619039',
                'swCoordinates' => '24.46948356,39.58483126',
            ),
            319 =>
            array (
                'id' => 424,
                'name_ar' => 'الراية',
                'name_en' => 'ar rayah',
                'city_id' => 14,
                'neCoordinates' => '24.49516490,39.60561169',
                'swCoordinates' => '24.47552891,39.58849602',
            ),
            320 =>
            array (
                'id' => 425,
                'name_ar' => 'مسجد الدرع',
                'name_en' => 'masjid ad dar',
                'city_id' => 14,
                'neCoordinates' => '24.49759880,39.61765035',
                'swCoordinates' => '24.48514715,39.60219638',
            ),
            321 =>
            array (
                'id' => 426,
                'name_ar' => 'السقيا',
                'name_en' => 'as suqya',
                'city_id' => 14,
                'neCoordinates' => '24.46684047,39.60394910',
                'swCoordinates' => '24.45687987,39.59230663',
            ),
            322 =>
            array (
                'id' => 427,
                'name_ar' => 'قلعة مخيط',
                'name_en' => 'qalat makhit',
                'city_id' => 14,
                'neCoordinates' => '24.52670801,39.53596541',
                'swCoordinates' => '24.48553991,39.45130388',
            ),
            323 =>
            array (
                'id' => 430,
                'name_ar' => 'الشافية',
                'name_en' => 'ash shafiyah',
                'city_id' => 14,
                'neCoordinates' => '24.55188452,39.66471133',
                'swCoordinates' => '24.52308578,39.61886049',
            ),
            324 =>
            array (
                'id' => 431,
                'name_ar' => 'سيد الشهداء',
                'name_en' => 'sayed ash shuhada',
                'city_id' => 14,
                'neCoordinates' => '24.53560724,39.62657709',
                'swCoordinates' => '24.49516490,39.59477356',
            ),
            325 =>
            array (
                'id' => 432,
                'name_ar' => 'جبل احد',
                'name_en' => 'jabal uhud',
                'city_id' => 14,
                'neCoordinates' => '24.54735797,39.65445749',
                'swCoordinates' => '24.49505746,39.59307745',
            ),
            326 =>
            array (
                'id' => 433,
                'name_ar' => 'بني خدرة',
                'name_en' => 'bani khidrah',
                'city_id' => 14,
                'neCoordinates' => '24.46514184,39.61844089',
                'swCoordinates' => '24.46259336,39.60777964',
            ),
            327 =>
            array (
                'id' => 434,
                'name_ar' => 'بني عبدالاشهل',
                'name_en' => 'bani abdul ashhal',
                'city_id' => 14,
                'neCoordinates' => '24.48524413,39.62936727',
                'swCoordinates' => '24.47177473,39.61462614',
            ),
            328 =>
            array (
                'id' => 435,
                'name_ar' => 'بني معاوية',
                'name_en' => 'bani muawiyah',
                'city_id' => 14,
                'neCoordinates' => '24.48020388,39.63537337',
                'swCoordinates' => '24.46832151,39.61829572',
            ),
            329 =>
            array (
                'id' => 436,
                'name_ar' => 'الحرم',
                'name_en' => 'al haram',
                'city_id' => 14,
                'neCoordinates' => '24.47320515,39.62081335',
                'swCoordinates' => '24.46364715,39.60550977',
            ),
            330 =>
            array (
                'id' => 437,
                'name_ar' => 'ورقان',
                'name_en' => 'warqan',
                'city_id' => 14,
                'neCoordinates' => '24.40460196,39.53784354',
                'swCoordinates' => '24.35339070,39.50256266',
            ),
            331 =>
            array (
                'id' => 438,
                'name_ar' => 'شوران',
                'name_en' => 'shuran',
                'city_id' => 14,
                'neCoordinates' => '24.41185778,39.64382110',
                'swCoordinates' => '24.37623310,39.60670372',
            ),
            332 =>
            array (
                'id' => 439,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 14,
                'neCoordinates' => '24.39429689,39.51141983',
                'swCoordinates' => '24.36227714,39.46232226',
            ),
            333 =>
            array (
                'id' => 440,
                'name_ar' => 'التشليح',
                'name_en' => 'at tashlih',
                'city_id' => 11,
                'neCoordinates' => '26.31065928,44.08797326',
                'swCoordinates' => '26.26952090,44.06139881',
            ),
            334 =>
            array (
                'id' => 441,
                'name_ar' => 'الورش الجنوبية',
                'name_en' => 'al wurash al janubiyah',
                'city_id' => 11,
                'neCoordinates' => '26.28442419,44.04121142',
                'swCoordinates' => '26.26175052,44.01963306',
            ),
            335 =>
            array (
                'id' => 442,
                'name_ar' => 'الحويقية',
                'name_en' => 'al huwayqiyah',
                'city_id' => 11,
                'neCoordinates' => '26.28150561,44.04100359',
                'swCoordinates' => '26.25204941,44.00699065',
            ),
            336 =>
            array (
                'id' => 443,
                'name_ar' => 'الحصاة',
                'name_en' => 'al hasat',
                'city_id' => 11,
                'neCoordinates' => '26.26118819,44.07954568',
                'swCoordinates' => '26.21470330,44.02355461',
            ),
            337 =>
            array (
                'id' => 445,
                'name_ar' => 'الجامعيين',
                'name_en' => 'al jamiyin',
                'city_id' => 11,
                'neCoordinates' => '26.42581604,43.98138854',
                'swCoordinates' => '26.38186454,43.92841799',
            ),
            338 =>
            array (
                'id' => 447,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 11,
                'neCoordinates' => '26.40147635,43.95753104',
                'swCoordinates' => '26.36881667,43.92689974',
            ),
            339 =>
            array (
                'id' => 448,
                'name_ar' => 'البشر',
                'name_en' => 'al bishr',
                'city_id' => 11,
                'neCoordinates' => '26.39276939,43.93279498',
                'swCoordinates' => '26.36652215,43.90447543',
            ),
            340 =>
            array (
                'id' => 449,
                'name_ar' => 'الحمر',
                'name_en' => 'al hamr',
                'city_id' => 11,
                'neCoordinates' => '26.34642685,43.91209195',
                'swCoordinates' => '26.33326417,43.89370439',
            ),
            341 =>
            array (
                'id' => 451,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 11,
                'neCoordinates' => '26.36412790,43.89843917',
                'swCoordinates' => '26.35027118,43.88423831',
            ),
            342 =>
            array (
                'id' => 452,
                'name_ar' => 'الجردة',
                'name_en' => 'al jardah',
                'city_id' => 11,
                'neCoordinates' => '26.33131725,43.97959570',
                'swCoordinates' => '26.31851046,43.96835984',
            ),
            343 =>
            array (
                'id' => 453,
                'name_ar' => 'الموطا',
                'name_en' => 'al mawta',
                'city_id' => 11,
                'neCoordinates' => '26.32364559,43.97768261',
                'swCoordinates' => '26.30912030,43.95829866',
            ),
            344 =>
            array (
                'id' => 454,
                'name_ar' => 'البصر',
                'name_en' => 'al basr',
                'city_id' => 11,
                'neCoordinates' => '26.30360996,43.88162470',
                'swCoordinates' => '26.29021380,43.85744468',
            ),
            345 =>
            array (
                'id' => 455,
                'name_ar' => 'العجيبة',
                'name_en' => 'al ujaybah',
                'city_id' => 11,
                'neCoordinates' => '26.32922422,43.97243110',
                'swCoordinates' => '26.32213397,43.96180779',
            ),
            346 =>
            array (
                'id' => 456,
                'name_ar' => 'العريمضي',
                'name_en' => 'al uraymdi',
                'city_id' => 11,
                'neCoordinates' => '26.31642233,43.94552460',
                'swCoordinates' => '26.28035481,43.92297245',
            ),
            347 =>
            array (
                'id' => 457,
                'name_ar' => 'مشعل',
                'name_en' => 'mishal',
                'city_id' => 11,
                'neCoordinates' => '26.36960183,43.94567769',
                'swCoordinates' => '26.34315293,43.91269979',
            ),
            348 =>
            array (
                'id' => 458,
                'name_ar' => 'الزرقاء',
                'name_en' => 'az zarqa',
                'city_id' => 11,
                'neCoordinates' => '26.34708077,43.94452557',
                'swCoordinates' => '26.33592512,43.92300868',
            ),
            349 =>
            array (
                'id' => 459,
                'name_ar' => 'جرية العمران وخب الثنيان',
                'name_en' => 'jaryat al umran and wakhub ath thinayan',
                'city_id' => 11,
                'neCoordinates' => '26.34733344,43.92512698',
                'swCoordinates' => '26.33119943,43.91171667',
            ),
            350 =>
            array (
                'id' => 460,
                'name_ar' => 'المظلل',
                'name_en' => 'al mizallal',
                'city_id' => 11,
                'neCoordinates' => '26.30146076,44.02674078',
                'swCoordinates' => '26.27257298,43.99748165',
            ),
            351 =>
            array (
                'id' => 461,
                'name_ar' => 'وهطان',
                'name_en' => 'wahtan',
                'city_id' => 11,
                'neCoordinates' => '26.32048595,44.00287240',
                'swCoordinates' => '26.29610227,43.98394569',
            ),
            352 =>
            array (
                'id' => 462,
                'name_ar' => 'الملك',
                'name_en' => 'al malik',
                'city_id' => 11,
                'neCoordinates' => '26.34006667,44.00551312',
                'swCoordinates' => '26.32805871,43.99318098',
            ),
            353 =>
            array (
                'id' => 463,
                'name_ar' => 'الفاخرية',
                'name_en' => 'al fakhriyah',
                'city_id' => 11,
                'neCoordinates' => '26.32860862,44.00264552',
                'swCoordinates' => '26.31737227,43.99263500',
            ),
            354 =>
            array (
                'id' => 464,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 11,
                'neCoordinates' => '26.33013531,44.01096795',
                'swCoordinates' => '26.32155886,44.00000480',
            ),
            355 =>
            array (
                'id' => 465,
                'name_ar' => 'الضاحي',
                'name_en' => 'ad dahi',
                'city_id' => 11,
                'neCoordinates' => '26.32383909,44.06376663',
                'swCoordinates' => '26.29756704,44.02823341',
            ),
            356 =>
            array (
                'id' => 466,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 11,
                'neCoordinates' => '26.30842577,44.04754185',
                'swCoordinates' => '26.28082047,44.01993578',
            ),
            357 =>
            array (
                'id' => 467,
                'name_ar' => 'التوفيق',
                'name_en' => 'at tawfiq',
                'city_id' => 11,
                'neCoordinates' => '26.32329705,44.01148332',
                'swCoordinates' => '26.31416693,44.00027372',
            ),
            358 =>
            array (
                'id' => 468,
                'name_ar' => 'خضيراء',
                'name_en' => 'khudayra',
                'city_id' => 11,
                'neCoordinates' => '26.31820126,44.01309143',
                'swCoordinates' => '26.30265883,43.99814231',
            ),
            359 =>
            array (
                'id' => 469,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 11,
                'neCoordinates' => '26.30867446,44.02528549',
                'swCoordinates' => '26.28618600,43.98993981',
            ),
            360 =>
            array (
                'id' => 470,
                'name_ar' => 'خب القبر',
                'name_en' => 'khub al qabr',
                'city_id' => 11,
                'neCoordinates' => '26.32949435,44.02719082',
                'swCoordinates' => '26.30674999,44.00678308',
            ),
            361 =>
            array (
                'id' => 472,
                'name_ar' => 'الرفيعة',
                'name_en' => 'ar rafiah',
                'city_id' => 11,
                'neCoordinates' => '26.34408655,43.99844440',
                'swCoordinates' => '26.32611436,43.98384109',
            ),
            362 =>
            array (
                'id' => 473,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 11,
                'neCoordinates' => '26.33752371,43.98544525',
                'swCoordinates' => '26.32658729,43.97143889',
            ),
            363 =>
            array (
                'id' => 474,
                'name_ar' => 'عين الذيب',
                'name_en' => 'ayn adh dhib',
                'city_id' => 11,
                'neCoordinates' => '26.38307126,44.00206072',
                'swCoordinates' => '26.34540556,43.97834370',
            ),
            364 =>
            array (
                'id' => 475,
                'name_ar' => 'ضراس',
                'name_en' => 'diras',
                'city_id' => 11,
                'neCoordinates' => '26.33361969,43.89863296',
                'swCoordinates' => '26.30440282,43.85137197',
            ),
            365 =>
            array (
                'id' => 476,
                'name_ar' => 'الدعيسة',
                'name_en' => 'ad duaysah',
                'city_id' => 11,
                'neCoordinates' => '26.32165645,43.90822410',
                'swCoordinates' => '26.29821969,43.86199674',
            ),
            366 =>
            array (
                'id' => 477,
                'name_ar' => 'الصقرات',
                'name_en' => 'as saqarat',
                'city_id' => 11,
                'neCoordinates' => '26.33381344,43.91664101',
                'swCoordinates' => '26.30027947,43.89311358',
            ),
            367 =>
            array (
                'id' => 478,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 11,
                'neCoordinates' => '26.38732286,43.92543109',
                'swCoordinates' => '26.34780312,43.88421005',
            ),
            368 =>
            array (
                'id' => 479,
                'name_ar' => 'مخطط الرواف',
                'name_en' => 'al rawaf subdivision',
                'city_id' => 11,
                'neCoordinates' => '26.41820542,43.93892580',
                'swCoordinates' => '26.39061745,43.91038701',
            ),
            369 =>
            array (
                'id' => 481,
                'name_ar' => 'الوسيطى',
                'name_en' => 'al wusayta',
                'city_id' => 11,
                'neCoordinates' => '26.37131102,44.05865309',
                'swCoordinates' => '26.31738705,44.01082432',
            ),
            370 =>
            array (
                'id' => 482,
                'name_ar' => 'خب الكيفة',
                'name_en' => 'khub al kifah',
                'city_id' => 11,
                'neCoordinates' => '26.30707430,43.93368609',
                'swCoordinates' => '26.27412726,43.90822410',
            ),
            371 =>
            array (
                'id' => 483,
                'name_ar' => 'خب روضان',
                'name_en' => 'khub rudan',
                'city_id' => 11,
                'neCoordinates' => '26.30604547,43.92019078',
                'swCoordinates' => '26.26630099,43.89213198',
            ),
            372 =>
            array (
                'id' => 485,
                'name_ar' => 'النقع الشرقية',
                'name_en' => 'an naqa ash sharqiyah',
                'city_id' => 11,
                'neCoordinates' => '26.38307126,44.01446213',
                'swCoordinates' => '26.34875259,43.99329569',
            ),
            373 =>
            array (
                'id' => 486,
                'name_ar' => 'النقع الغربية',
                'name_en' => 'an naqa al gharbiyah',
                'city_id' => 11,
                'neCoordinates' => '26.35437687,44.01097401',
                'swCoordinates' => '26.32949435,43.99087190',
            ),
            374 =>
            array (
                'id' => 487,
                'name_ar' => 'القاع البارد',
                'name_en' => 'al qaa al barid',
                'city_id' => 11,
                'neCoordinates' => '26.36964149,44.04110307',
                'swCoordinates' => '26.33608085,44.01446213',
            ),
            375 =>
            array (
                'id' => 488,
                'name_ar' => 'خب العكرش',
                'name_en' => 'khub al akrash',
                'city_id' => 11,
                'neCoordinates' => '26.35983986,44.01893808',
                'swCoordinates' => '26.34097808,44.00106091',
            ),
            376 =>
            array (
                'id' => 490,
                'name_ar' => 'النازية',
                'name_en' => 'an naziyah',
                'city_id' => 11,
                'neCoordinates' => '26.35884414,43.97890521',
                'swCoordinates' => '26.33330227,43.94567770',
            ),
            377 =>
            array (
                'id' => 491,
                'name_ar' => 'الصفراء',
                'name_en' => 'as safraa',
                'city_id' => 11,
                'neCoordinates' => '26.37575373,43.96935447',
                'swCoordinates' => '26.34830198,43.93740443',
            ),
            378 =>
            array (
                'id' => 492,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 11,
                'neCoordinates' => '26.36729034,43.95847273',
                'swCoordinates' => '26.34353914,43.92864908',
            ),
            379 =>
            array (
                'id' => 493,
                'name_ar' => 'المطار القديم',
                'name_en' => 'old airport',
                'city_id' => 11,
                'neCoordinates' => '26.35178628,43.99432547',
                'swCoordinates' => '26.33337095,43.97123547',
            ),
            380 =>
            array (
                'id' => 494,
                'name_ar' => 'الشماس',
                'name_en' => 'ash shammas',
                'city_id' => 11,
                'neCoordinates' => '26.33860733,43.96835984',
                'swCoordinates' => '26.32554556,43.95416483',
            ),
            381 =>
            array (
                'id' => 496,
                'name_ar' => 'التغيرة',
                'name_en' => 'al taghirah',
                'city_id' => 11,
                'neCoordinates' => '26.33848810,43.97456724',
                'swCoordinates' => '26.33131725,43.96819962',
            ),
            382 =>
            array (
                'id' => 497,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 11,
                'neCoordinates' => '26.37066454,43.98217921',
                'swCoordinates' => '26.34536945,43.96653818',
            ),
            383 =>
            array (
                'id' => 498,
                'name_ar' => 'الفايزية',
                'name_en' => 'al fayziyah',
                'city_id' => 11,
                'neCoordinates' => '26.38253028,43.98536676',
                'swCoordinates' => '26.36600844,43.96108733',
            ),
            384 =>
            array (
                'id' => 499,
                'name_ar' => 'الامن',
                'name_en' => 'al amn',
                'city_id' => 11,
                'neCoordinates' => '26.38186454,43.96108732',
                'swCoordinates' => '26.36401199,43.93200617',
            ),
            385 =>
            array (
                'id' => 500,
                'name_ar' => 'الاخضر',
                'name_en' => 'al akhdar',
                'city_id' => 11,
                'neCoordinates' => '26.39370150,43.98544217',
                'swCoordinates' => '26.37575367,43.95753104',
            ),
            386 =>
            array (
                'id' => 501,
                'name_ar' => 'النصار',
                'name_en' => 'an nassar',
                'city_id' => 11,
                'neCoordinates' => '26.34008370,43.91534244',
                'swCoordinates' => '26.32385581,43.89562841',
            ),
            387 =>
            array (
                'id' => 502,
                'name_ar' => 'ابن صبيح',
                'name_en' => 'ibn subayh',
                'city_id' => 11,
                'neCoordinates' => '26.32611436,43.99549796',
                'swCoordinates' => '26.31935368,43.98760129',
            ),
            388 =>
            array (
                'id' => 503,
                'name_ar' => 'السادة',
                'name_en' => 'as sadah',
                'city_id' => 11,
                'neCoordinates' => '26.33011320,43.99117541',
                'swCoordinates' => '26.31270269,43.97439207',
            ),
            389 =>
            array (
                'id' => 505,
                'name_ar' => 'خب الجطيبي',
                'name_en' => 'khub al jutaybi',
                'city_id' => 11,
                'neCoordinates' => '26.30514208,43.97984160',
                'swCoordinates' => '26.28471603,43.96774761',
            ),
            390 =>
            array (
                'id' => 506,
                'name_ar' => 'الصباخ',
                'name_en' => 'as sabbakh',
                'city_id' => 11,
                'neCoordinates' => '26.31547839,43.98993981',
                'swCoordinates' => '26.29095391,43.97188608',
            ),
            391 =>
            array (
                'id' => 507,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 11,
                'neCoordinates' => '26.31146833,43.97532446',
                'swCoordinates' => '26.30360372,43.96774072',
            ),
            392 =>
            array (
                'id' => 508,
                'name_ar' => 'الهلال',
                'name_en' => 'al hilal',
                'city_id' => 11,
                'neCoordinates' => '26.32554556,43.96829456',
                'swCoordinates' => '26.31733948,43.95383014',
            ),
            393 =>
            array (
                'id' => 509,
                'name_ar' => 'الخبيبية',
                'name_en' => 'al khubaybiyah',
                'city_id' => 11,
                'neCoordinates' => '26.33991509,43.95150165',
                'swCoordinates' => '26.32200011,43.92512698',
            ),
            394 =>
            array (
                'id' => 510,
                'name_ar' => 'المريديسية',
                'name_en' => 'al muraydisiyah',
                'city_id' => 11,
                'neCoordinates' => '26.33592512,43.95721826',
                'swCoordinates' => '26.30313928,43.90247269',
            ),
            395 =>
            array (
                'id' => 511,
                'name_ar' => 'الصبيحية',
                'name_en' => 'as subayhiyah',
                'city_id' => 11,
                'neCoordinates' => '26.34353911,43.95525091',
                'swCoordinates' => '26.33088121,43.93585600',
            ),
            396 =>
            array (
                'id' => 512,
                'name_ar' => 'القويع',
                'name_en' => 'al quwai',
                'city_id' => 11,
                'neCoordinates' => '26.33700772,43.96239734',
                'swCoordinates' => '26.32155350,43.94147604',
            ),
            397 =>
            array (
                'id' => 513,
                'name_ar' => 'واسط',
                'name_en' => 'wasit',
                'city_id' => 11,
                'neCoordinates' => '26.31750005,43.96186869',
                'swCoordinates' => '26.30185553,43.94399545',
            ),
            398 =>
            array (
                'id' => 514,
                'name_ar' => 'خب البريدي',
                'name_en' => 'khub al buraydi',
                'city_id' => 11,
                'neCoordinates' => '26.31708520,43.94670031',
                'swCoordinates' => '26.29338886,43.93137252',
            ),
            399 =>
            array (
                'id' => 515,
                'name_ar' => 'حويلان',
                'name_en' => 'huwaylan',
                'city_id' => 11,
                'neCoordinates' => '26.29751800,43.95398702',
                'swCoordinates' => '26.27953418,43.93755870',
            ),
            400 =>
            array (
                'id' => 516,
                'name_ar' => 'القصيعة',
                'name_en' => 'al qusayah',
                'city_id' => 11,
                'neCoordinates' => '26.27774282,43.98377007',
                'swCoordinates' => '26.22314117,43.94105120',
            ),
            401 =>
            array (
                'id' => 517,
                'name_ar' => 'اللسيب',
                'name_en' => 'al lasib',
                'city_id' => 11,
                'neCoordinates' => '26.28556938,43.95515260',
                'swCoordinates' => '26.24143503,43.91954773',
            ),
            402 =>
            array (
                'id' => 518,
                'name_ar' => 'البريكة',
                'name_en' => 'al buraykah',
                'city_id' => 11,
                'neCoordinates' => '26.31331063,43.97130939',
                'swCoordinates' => '26.27111886,43.94460653',
            ),
            403 =>
            array (
                'id' => 519,
                'name_ar' => 'الحقل الاخضر',
                'name_en' => 'al haql al akhdar',
                'city_id' => 11,
                'neCoordinates' => '26.24911077,43.95603782',
                'swCoordinates' => '26.20572287,43.93118916',
            ),
            404 =>
            array (
                'id' => 520,
                'name_ar' => 'رواق',
                'name_en' => 'rawaq',
                'city_id' => 11,
                'neCoordinates' => '26.28145796,44.01015183',
                'swCoordinates' => '26.26976254,43.99879495',
            ),
            405 =>
            array (
                'id' => 521,
                'name_ar' => 'السالمية',
                'name_en' => 'as salimiyah',
                'city_id' => 11,
                'neCoordinates' => '26.29610227,44.00674092',
                'swCoordinates' => '26.27610734,43.98628529',
            ),
            406 =>
            array (
                'id' => 522,
                'name_ar' => 'خب العوشر',
                'name_en' => 'khub al ushar',
                'city_id' => 11,
                'neCoordinates' => '26.28336245,44.01588993',
                'swCoordinates' => '26.25712663,43.99366813',
            ),
            407 =>
            array (
                'id' => 523,
                'name_ar' => 'المنتزه الجنوبي',
                'name_en' => 'al muntazah al janubi',
                'city_id' => 11,
                'neCoordinates' => '26.26570091,44.03408083',
                'swCoordinates' => '26.20982067,43.98560391',
            ),
            408 =>
            array (
                'id' => 524,
                'name_ar' => 'الخضر والوجيعان',
                'name_en' => 'al khadar and al wujayan',
                'city_id' => 11,
                'neCoordinates' => '26.27911065,44.00309431',
                'swCoordinates' => '26.25026407,43.98540747',
            ),
            409 =>
            array (
                'id' => 526,
                'name_ar' => 'خب القصبا',
                'name_en' => 'khub al qasba',
                'city_id' => 11,
                'neCoordinates' => '26.28709435,43.98807892',
                'swCoordinates' => '26.25681696,43.96058831',
            ),
            410 =>
            array (
                'id' => 527,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasriyah',
                'city_id' => 11,
                'neCoordinates' => '26.29425713,43.99418936',
                'swCoordinates' => '26.26571022,43.97260545',
            ),
            411 =>
            array (
                'id' => 528,
                'name_ar' => 'الغماس',
                'name_en' => 'al ghamas',
                'city_id' => 11,
                'neCoordinates' => '26.24143210,43.94349258',
                'swCoordinates' => '26.20431973,43.91202423',
            ),
            412 =>
            array (
                'id' => 529,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawn',
                'city_id' => 483,
                'neCoordinates' => '24.14555307,38.00420756',
                'swCoordinates' => '24.12899083,37.98657441',
            ),
            413 =>
            array (
                'id' => 530,
                'name_ar' => 'البهجة',
                'name_en' => ' al bahjah',
                'city_id' => 483,
                'neCoordinates' => '24.13397769,38.01221252',
                'swCoordinates' => '24.12070688,37.99745840',
            ),
            414 =>
            array (
                'id' => 531,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 483,
                'neCoordinates' => '24.15093969,38.01166442',
                'swCoordinates' => '24.13419649,37.99382153',
            ),
            415 =>
            array (
                'id' => 532,
                'name_ar' => 'الفلاح',
                'name_en' => 'al falah',
                'city_id' => 483,
                'neCoordinates' => '24.13948432,38.01851867',
                'swCoordinates' => '24.12513361,38.00400985',
            ),
            416 =>
            array (
                'id' => 533,
                'name_ar' => 'الجابرية',
                'name_en' => 'al jabriyah',
                'city_id' => 483,
                'neCoordinates' => '24.11910551,38.09879548',
                'swCoordinates' => '24.10084745,38.07804376',
            ),
            417 =>
            array (
                'id' => 534,
                'name_ar' => 'الجابرية',
                'name_en' => 'al jabriyah',
                'city_id' => 483,
                'neCoordinates' => '24.02345546,38.21181648',
                'swCoordinates' => '24.00969616,38.19676562',
            ),
            418 =>
            array (
                'id' => 535,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 483,
                'neCoordinates' => '24.16404292,37.96678131',
                'swCoordinates' => '24.14512399,37.93753477',
            ),
            419 =>
            array (
                'id' => 536,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 483,
                'neCoordinates' => '24.12913046,38.05525298',
                'swCoordinates' => '24.06813813,37.96806819',
            ),
            420 =>
            array (
                'id' => 537,
                'name_ar' => 'مخطط الصهبان',
                'name_en' => 'as sahban subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.60093731,44.35298107',
                'swCoordinates' => '17.57454322,44.33577448',
            ),
            421 =>
            array (
                'id' => 538,
                'name_ar' => 'مطار نجران الاقليمي',
                'name_en' => 'najran regional airport',
                'city_id' => 3417,
                'neCoordinates' => '17.62526576,44.43805183',
                'swCoordinates' => '17.59909797,44.40040024',
            ),
            422 =>
            array (
                'id' => 540,
                'name_ar' => 'مخطط نهوفة السكني',
                'name_en' => 'nahufah residential subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.43226634,44.12817772',
                'swCoordinates' => '17.40530085,44.10538866',
            ),
            423 =>
            array (
                'id' => 541,
                'name_ar' => 'الحضن',
                'name_en' => 'al hadn',
                'city_id' => 3417,
                'neCoordinates' => '17.47772743,44.12959828',
                'swCoordinates' => '17.40527304,44.08210559',
            ),
            424 =>
            array (
                'id' => 542,
                'name_ar' => 'ابا لسعود',
                'name_en' => 'aba lasaud',
                'city_id' => 3417,
                'neCoordinates' => '17.50764506,44.15887239',
                'swCoordinates' => '17.47511570,44.09435692',
            ),
            425 =>
            array (
                'id' => 543,
                'name_ar' => 'دحضة',
                'name_en' => 'dahdah',
                'city_id' => 3417,
                'neCoordinates' => '17.52633506,44.18833822',
                'swCoordinates' => '17.49710854,44.14375988',
            ),
            426 =>
            array (
                'id' => 544,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 3417,
                'neCoordinates' => '17.52771878,44.20710003',
                'swCoordinates' => '17.51795235,44.18263229',
            ),
            427 =>
            array (
                'id' => 545,
                'name_ar' => 'شرق الضباط',
                'name_en' => 'sharq ad dubat',
                'city_id' => 3417,
                'neCoordinates' => '17.55048518,44.22479940',
                'swCoordinates' => '17.53427665,44.21075411',
            ),
            428 =>
            array (
                'id' => 546,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 3417,
                'neCoordinates' => '17.55047160,44.25467908',
                'swCoordinates' => '17.52487737,44.20648082',
            ),
            429 =>
            array (
                'id' => 547,
                'name_ar' => 'مخطط العريسة الشمالي',
                'name_en' => 'al araysah ash shamali subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.56797941,44.32229968',
                'swCoordinates' => '17.55598950,44.29996348',
            ),
            430 =>
            array (
                'id' => 548,
                'name_ar' => 'مخطط العريسة الجنوبي',
                'name_en' => 'al araysah al janubi subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.56716622,44.32688059',
                'swCoordinates' => '17.54418078,44.30722072',
            ),
            431 =>
            array (
                'id' => 549,
                'name_ar' => 'الضباط',
                'name_en' => 'ad dubat',
                'city_id' => 3417,
                'neCoordinates' => '17.53523106,44.21401550',
                'swCoordinates' => '17.52543393,44.19230674',
            ),
            432 =>
            array (
                'id' => 550,
                'name_ar' => 'شمال الضباط',
                'name_en' => 'shamal ad dubat',
                'city_id' => 3417,
                'neCoordinates' => '17.53902288,44.21330911',
                'swCoordinates' => '17.53244066,44.19943263',
            ),
            433 =>
            array (
                'id' => 551,
                'name_ar' => 'الاملاح',
                'name_en' => 'al amlah',
                'city_id' => 3417,
                'neCoordinates' => '17.54144858,44.20003106',
                'swCoordinates' => '17.52815328,44.18965813',
            ),
            434 =>
            array (
                'id' => 552,
                'name_ar' => 'الجربة',
                'name_en' => 'al jurbah',
                'city_id' => 3417,
                'neCoordinates' => '17.48372600,44.16025589',
                'swCoordinates' => '17.45986291,44.12713717',
            ),
            435 =>
            array (
                'id' => 553,
                'name_ar' => 'القابل',
                'name_en' => 'al qabil',
                'city_id' => 3417,
                'neCoordinates' => '17.50680466,44.19122336',
                'swCoordinates' => '17.47153925,44.15308108',
            ),
            436 =>
            array (
                'id' => 554,
                'name_ar' => 'مخطط رجلا الشمالية الزراعي',
                'name_en' => 'rajla ash shamaliyah agricultural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.51922865,44.24402707',
                'swCoordinates' => '17.49616709,44.21696830',
            ),
            437 =>
            array (
                'id' => 555,
                'name_ar' => 'مخطط رجلا الجنوبية الزراعي',
                'name_en' => 'rajla al janubiyah agricultural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.50217321,44.24876085',
                'swCoordinates' => '17.48188605,44.21483617',
            ),
            438 =>
            array (
                'id' => 556,
                'name_ar' => 'مخطط الحصين الزراعي',
                'name_en' => 'al husayn agricultural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.51076802,44.22021284',
                'swCoordinates' => '17.48947327,44.18830877',
            ),
            439 =>
            array (
                'id' => 557,
                'name_ar' => 'مخطط نهوفة الزراعي',
                'name_en' => 'nahufah agricultural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.46607173,44.14150907',
                'swCoordinates' => '17.42788259,44.10233043',
            ),
            440 =>
            array (
                'id' => 558,
                'name_ar' => 'مخطط شعب رير السكني',
                'name_en' => 'shaib rir residential subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.47843089,44.17679338',
                'swCoordinates' => '17.45901639,44.15453171',
            ),
            441 =>
            array (
                'id' => 560,
                'name_ar' => 'مخططات الغويلا الزراعية',
                'name_en' => 'al ghuwayla agricutural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.63707544,44.57405230',
                'swCoordinates' => '17.54175849,44.32518332',
            ),
            442 =>
            array (
                'id' => 561,
                'name_ar' => 'الفهد',
                'name_en' => 'al fahd',
                'city_id' => 3417,
                'neCoordinates' => '17.58011411,44.23591150',
                'swCoordinates' => '17.55845780,44.21825109',
            ),
            443 =>
            array (
                'id' => 562,
                'name_ar' => 'المخيم',
                'name_en' => 'al mukhayam',
                'city_id' => 3417,
                'neCoordinates' => '17.56922863,44.22813980',
                'swCoordinates' => '17.54957818,44.21075524',
            ),
            444 =>
            array (
                'id' => 563,
                'name_ar' => 'المفرق',
                'name_en' => 'al mafraq',
                'city_id' => 3417,
                'neCoordinates' => '17.55942223,44.24448474',
                'swCoordinates' => '17.54264721,44.22447707',
            ),
            445 =>
            array (
                'id' => 564,
                'name_ar' => 'مخطط ابن جارالله السكني',
                'name_en' => 'ibn jarullah residential subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.56552310,44.25434117',
                'swCoordinates' => '17.54986272,44.22852166',
            ),
            446 =>
            array (
                'id' => 565,
                'name_ar' => 'مخطط الاثايبة الشمالية الزراعي',
                'name_en' => 'al athaybah ash shamaliyah  agricultural subdivision',
                'city_id' => 3417,
                'neCoordinates' => '17.57626689,44.28113043',
                'swCoordinates' => '17.54845278,44.23111248',
            ),
            447 =>
            array (
                'id' => 566,
                'name_ar' => 'شمال الفهد',
                'name_en' => 'shamal al fahd',
                'city_id' => 3417,
                'neCoordinates' => '17.58942809,44.23944713',
                'swCoordinates' => '17.57649834,44.22420748',
            ),
            448 =>
            array (
                'id' => 567,
                'name_ar' => 'بترومين',
                'name_en' => 'petromin',
                'city_id' => 1,
                'neCoordinates' => '28.48066920,36.53150983',
                'swCoordinates' => '28.45721944,36.50121654',
            ),
            449 =>
            array (
                'id' => 569,
                'name_ar' => 'اسكان قوى الامن العام',
                'name_en' => 'general security force housing',
                'city_id' => 1,
                'neCoordinates' => '28.51150097,36.51496545',
                'swCoordinates' => '28.47108081,36.46938510',
            ),
            450 =>
            array (
                'id' => 570,
                'name_ar' => 'منطقة الزراعية',
                'name_en' => 'agricultura area',
                'city_id' => 1,
                'neCoordinates' => '28.49770796,36.69320360',
                'swCoordinates' => '28.41119326,36.52713910',
            ),
            451 =>
            array (
                'id' => 571,
                'name_ar' => 'ثول',
                'name_en' => 'thuwal',
                'city_id' => 1879,
                'neCoordinates' => '22.30095612,39.13946030',
                'swCoordinates' => '22.25486355,39.08607273',
            ),
            452 =>
            array (
                'id' => 572,
                'name_ar' => 'جامعة الملك عبدالله للعلوم والتقنية',
                'name_en' => 'king abdullah university of science and technology',
                'city_id' => 1879,
                'neCoordinates' => '22.33369087,39.13598252',
                'swCoordinates' => '22.28839841,39.08857240',
            ),
            453 =>
            array (
                'id' => 573,
                'name_ar' => 'رغدان',
                'name_en' => 'raghadan',
                'city_id' => 1542,
                'neCoordinates' => '20.04362883,41.45363361',
                'swCoordinates' => '20.02109985,41.44326981',
            ),
            454 =>
            array (
                'id' => 574,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 483,
                'neCoordinates' => '24.09586808,38.07388554',
                'swCoordinates' => '24.09076604,38.06583526',
            ),
            455 =>
            array (
                'id' => 575,
                'name_ar' => 'ابو سليم',
                'name_en' => 'abu salim',
                'city_id' => 880,
                'neCoordinates' => '24.08480886,45.28566785',
                'swCoordinates' => '24.06737612,45.27611828',
            ),
            456 =>
            array (
                'id' => 576,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 880,
                'neCoordinates' => '24.07136224,45.28445686',
                'swCoordinates' => '24.06550916,45.27755044',
            ),
            457 =>
            array (
                'id' => 577,
                'name_ar' => 'الجزيرة',
                'name_en' => 'al jazirah',
                'city_id' => 880,
                'neCoordinates' => '24.08457050,45.29225122',
                'swCoordinates' => '24.07489850,45.28382617',
            ),
            458 =>
            array (
                'id' => 578,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 880,
                'neCoordinates' => '24.09668819,45.31046851',
                'swCoordinates' => '24.08457050,45.29008282',
            ),
            459 =>
            array (
                'id' => 579,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 880,
                'neCoordinates' => '24.08859487,45.31124899',
                'swCoordinates' => '24.07614789,45.29008282',
            ),
            460 =>
            array (
                'id' => 580,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 880,
                'neCoordinates' => '24.08151726,45.32104023',
                'swCoordinates' => '24.06614682,45.28646173',
            ),
            461 =>
            array (
                'id' => 581,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 880,
                'neCoordinates' => '24.06439704,45.29410940',
                'swCoordinates' => '24.05772873,45.27683863',
            ),
            462 =>
            array (
                'id' => 582,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 880,
                'neCoordinates' => '24.06168302,45.27907529',
                'swCoordinates' => '24.04972452,45.26432207',
            ),
            463 =>
            array (
                'id' => 583,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 880,
                'neCoordinates' => '24.05059656,45.26591837',
                'swCoordinates' => '24.04254046,45.25362901',
            ),
            464 =>
            array (
                'id' => 584,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 880,
                'neCoordinates' => '24.05135775,45.25566959',
                'swCoordinates' => '24.04613895,45.24934369',
            ),
            465 =>
            array (
                'id' => 585,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyyah',
                'city_id' => 1073,
                'neCoordinates' => '24.02111635,47.17737834',
                'swCoordinates' => '24.00628086,47.16532506',
            ),
            466 =>
            array (
                'id' => 586,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 1073,
                'neCoordinates' => '23.99684982,47.13171945',
                'swCoordinates' => '23.98654918,47.11679195',
            ),
            467 =>
            array (
                'id' => 587,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulaymaniyah',
                'city_id' => 1073,
                'neCoordinates' => '23.96639782,47.12409815',
                'swCoordinates' => '23.95597883,47.11190253',
            ),
            468 =>
            array (
                'id' => 588,
                'name_ar' => 'سدير',
                'name_en' => 'sudayr',
                'city_id' => 1073,
                'neCoordinates' => '23.97836015,47.12307311',
                'swCoordinates' => '23.97217636,47.11184363',
            ),
            469 =>
            array (
                'id' => 590,
                'name_ar' => 'البركة',
                'name_en' => 'al barakah',
                'city_id' => 1061,
                'neCoordinates' => '24.10576018,47.23652152',
                'swCoordinates' => '24.09039029,47.22066776',
            ),
            470 =>
            array (
                'id' => 591,
                'name_ar' => 'عباثر',
                'name_en' => 'abathir',
                'city_id' => 483,
                'neCoordinates' => '24.05003167,38.20370610',
                'swCoordinates' => '24.03501960,38.18660213',
            ),
            471 =>
            array (
                'id' => 592,
                'name_ar' => 'المحارة',
                'name_en' => 'al maharah',
                'city_id' => 483,
                'neCoordinates' => '24.05431901,38.13203644',
                'swCoordinates' => '24.03478262,38.11291418',
            ),
            472 =>
            array (
                'id' => 593,
                'name_ar' => 'المنتزة',
                'name_en' => 'al muntazah',
                'city_id' => 1061,
                'neCoordinates' => '24.16895313,47.33430183',
                'swCoordinates' => '24.15711339,47.31910710',
            ),
            473 =>
            array (
                'id' => 594,
                'name_ar' => 'الصناعية الجديدة',
                'name_en' => 'new industrial area',
                'city_id' => 1061,
                'neCoordinates' => '24.18554780,47.37496016',
                'swCoordinates' => '24.16861780,47.35172301',
            ),
            474 =>
            array (
                'id' => 595,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulaymaniyah',
                'city_id' => 1061,
                'neCoordinates' => '24.15760830,47.31552839',
                'swCoordinates' => '24.14300138,47.30098688',
            ),
            475 =>
            array (
                'id' => 596,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safa',
                'city_id' => 1061,
                'neCoordinates' => '24.18452672,47.28598831',
                'swCoordinates' => '24.17402432,47.26581821',
            ),
            476 =>
            array (
                'id' => 597,
                'name_ar' => 'البرج',
                'name_en' => 'al burj',
                'city_id' => 1061,
                'neCoordinates' => '24.16661327,47.30574127',
                'swCoordinates' => '24.15436175,47.29722930',
            ),
            477 =>
            array (
                'id' => 599,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 1061,
                'neCoordinates' => '24.16350364,47.32537698',
                'swCoordinates' => '24.14992697,47.30785560',
            ),
            478 =>
            array (
                'id' => 600,
                'name_ar' => 'الرفيعة',
                'name_en' => 'ar rafiah',
                'city_id' => 1061,
                'neCoordinates' => '24.19105350,47.28212756',
                'swCoordinates' => '24.18116403,47.26549351',
            ),
            479 =>
            array (
                'id' => 601,
                'name_ar' => 'اليمامة',
                'name_en' => 'al yamamah',
                'city_id' => 1061,
                'neCoordinates' => '24.19418696,47.32359591',
                'swCoordinates' => '24.16874903,47.29867190',
            ),
            480 =>
            array (
                'id' => 602,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 483,
                'neCoordinates' => '24.14092871,38.11891664',
                'swCoordinates' => '24.11550409,38.09143529',
            ),
            481 =>
            array (
                'id' => 603,
                'name_ar' => 'الديار',
                'name_en' => 'ad diyar',
                'city_id' => 483,
                'neCoordinates' => '24.10915612,38.08834015',
                'swCoordinates' => '24.09741564,38.07505974',
            ),
            482 =>
            array (
                'id' => 604,
                'name_ar' => 'العصيلي',
                'name_en' => 'al usaylai',
                'city_id' => 483,
                'neCoordinates' => '24.11266842,38.08196884',
                'swCoordinates' => '24.09302764,38.06335154',
            ),
            483 =>
            array (
                'id' => 605,
                'name_ar' => 'السميري',
                'name_en' => 'as sumayri',
                'city_id' => 483,
                'neCoordinates' => '24.10833797,38.06583526',
                'swCoordinates' => '24.09214061,38.05126664',
            ),
            484 =>
            array (
                'id' => 606,
                'name_ar' => 'الامارة',
                'name_en' => 'al amarah',
                'city_id' => 483,
                'neCoordinates' => '24.09432295,38.04666842',
                'swCoordinates' => '24.07948398,38.03036019',
            ),
            485 =>
            array (
                'id' => 607,
                'name_ar' => 'رضوى النقادي',
                'name_en' => 'radwa an naqadi',
                'city_id' => 483,
                'neCoordinates' => '24.13869501,38.15734459',
                'swCoordinates' => '24.11210535,38.12910572',
            ),
            486 =>
            array (
                'id' => 608,
                'name_ar' => 'شجوى',
                'name_en' => 'shajwa',
                'city_id' => 483,
                'neCoordinates' => '24.13824601,38.12923414',
                'swCoordinates' => '24.12149433,38.11171802',
            ),
            487 =>
            array (
                'id' => 609,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 483,
                'neCoordinates' => '24.12749717,38.14387035',
                'swCoordinates' => '24.09984306,38.11681183',
            ),
            488 =>
            array (
                'id' => 610,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 483,
                'neCoordinates' => '24.12130011,38.12224531',
                'swCoordinates' => '24.10268527,38.10660635',
            ),
            489 =>
            array (
                'id' => 611,
                'name_ar' => 'المبارك',
                'name_en' => 'al mubarak',
                'city_id' => 483,
                'neCoordinates' => '24.13171631,38.11045651',
                'swCoordinates' => '24.10648522,38.08397848',
            ),
            490 =>
            array (
                'id' => 612,
                'name_ar' => 'البحيرة',
                'name_en' => 'al buhayrah',
                'city_id' => 483,
                'neCoordinates' => '24.08460352,38.10071200',
                'swCoordinates' => '24.05831969,38.05555670',
            ),
            491 =>
            array (
                'id' => 613,
                'name_ar' => 'الجامعة العربية',
                'name_en' => 'al jamiah al arabiyah',
                'city_id' => 483,
                'neCoordinates' => '24.10084744,38.10314584',
                'swCoordinates' => '24.07583953,38.08209858',
            ),
            492 =>
            array (
                'id' => 614,
                'name_ar' => 'الحازم',
                'name_en' => 'al hazim',
                'city_id' => 1542,
                'neCoordinates' => '20.03393951,41.45191415',
                'swCoordinates' => '20.01760922,41.43813268',
            ),
            493 =>
            array (
                'id' => 615,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 483,
                'neCoordinates' => '24.11544525,38.04703463',
                'swCoordinates' => '24.09937350,38.02788969',
            ),
            494 =>
            array (
                'id' => 616,
                'name_ar' => 'مشرفة',
                'name_en' => 'mishrifah',
                'city_id' => 483,
                'neCoordinates' => '24.12246773,38.08397848',
                'swCoordinates' => '24.10907065,38.06304799',
            ),
            495 =>
            array (
                'id' => 617,
                'name_ar' => 'المشهد',
                'name_en' => 'al mashhad',
                'city_id' => 483,
                'neCoordinates' => '24.12193492,38.06349466',
                'swCoordinates' => '24.09866032,38.04054441',
            ),
            496 =>
            array (
                'id' => 618,
                'name_ar' => 'البندر',
                'name_en' => 'al bandar',
                'city_id' => 483,
                'neCoordinates' => '24.10801127,38.04029398',
                'swCoordinates' => '24.08697910,38.01551639',
            ),
            497 =>
            array (
                'id' => 619,
                'name_ar' => 'الشربتلي',
                'name_en' => 'ash sharbatli',
                'city_id' => 483,
                'neCoordinates' => '24.09214061,38.05735522',
                'swCoordinates' => '24.08393884,38.04666842',
            ),
            498 =>
            array (
                'id' => 620,
                'name_ar' => 'الصريف',
                'name_en' => 'as suraif',
                'city_id' => 483,
                'neCoordinates' => '24.08727311,38.05095517',
                'swCoordinates' => '24.07900490,38.03975392',
            ),
            499 =>
            array (
                'id' => 621,
                'name_ar' => 'الصهاريج',
                'name_en' => 'as saharij',
                'city_id' => 483,
                'neCoordinates' => '24.09546280,38.06754287',
                'swCoordinates' => '24.08719647,38.05475494',
            ),
        ));
        DB::table('neighborhoods')->insert(array (
            0 =>
            array (
                'id' => 622,
                'name_ar' => 'الاصالة',
                'name_en' => 'al asalah',
                'city_id' => 483,
                'neCoordinates' => '24.09302764,38.07464332',
                'swCoordinates' => '24.08693582,38.06753787',
            ),
            1 =>
            array (
                'id' => 623,
                'name_ar' => 'الخريق',
                'name_en' => 'al khurik',
                'city_id' => 483,
                'neCoordinates' => '24.08539065,38.06509017',
                'swCoordinates' => '24.07989217,38.05974998',
            ),
            2 =>
            array (
                'id' => 624,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 483,
                'neCoordinates' => '24.08719647,38.05973610',
                'swCoordinates' => '24.08058897,38.05095102',
            ),
            3 =>
            array (
                'id' => 625,
                'name_ar' => 'السور',
                'name_en' => 'as sur',
                'city_id' => 483,
                'neCoordinates' => '24.08212611,38.06299892',
                'swCoordinates' => '24.07666529,38.05805710',
            ),
            4 =>
            array (
                'id' => 627,
                'name_ar' => 'الشروق',
                'name_en' => 'ash shuruq',
                'city_id' => 483,
                'neCoordinates' => '24.09748541,38.08519217',
                'swCoordinates' => '24.08321289,38.07388347',
            ),
            5 =>
            array (
                'id' => 628,
                'name_ar' => 'شهبة',
                'name_en' => 'shuhbah',
                'city_id' => 1542,
                'neCoordinates' => '20.03178852,41.47201284',
                'swCoordinates' => '20.01493136,41.45968476',
            ),
            6 =>
            array (
                'id' => 629,
                'name_ar' => 'التاخي',
                'name_en' => 'attaakhi',
                'city_id' => 483,
                'neCoordinates' => '24.11073048,38.11268669',
                'swCoordinates' => '24.08149709,38.08834015',
            ),
            7 =>
            array (
                'id' => 630,
                'name_ar' => 'المجد',
                'name_en' => 'al majd',
                'city_id' => 483,
                'neCoordinates' => '24.07583448,38.10862615',
                'swCoordinates' => '24.05495140,38.09018071',
            ),
            8 =>
            array (
                'id' => 631,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 483,
                'neCoordinates' => '24.08290722,38.11187993',
                'swCoordinates' => '24.07262547,38.10069970',
            ),
            9 =>
            array (
                'id' => 632,
                'name_ar' => 'الصواري',
                'name_en' => 'as sawari',
                'city_id' => 483,
                'neCoordinates' => '24.07256252,38.12034678',
                'swCoordinates' => '24.05570581,38.10234727',
            ),
            10 =>
            array (
                'id' => 633,
                'name_ar' => 'الاضواء',
                'name_en' => 'al adwa',
                'city_id' => 483,
                'neCoordinates' => '24.08494708,38.14370798',
                'swCoordinates' => '24.06132046,38.12650389',
            ),
            11 =>
            array (
                'id' => 634,
                'name_ar' => 'المسرة',
                'name_en' => 'al masarrah',
                'city_id' => 483,
                'neCoordinates' => '24.08149530,38.12331993',
                'swCoordinates' => '24.06963942,38.10847840',
            ),
            12 =>
            array (
                'id' => 635,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 483,
                'neCoordinates' => '24.08093897,38.13120780',
                'swCoordinates' => '24.06510582,38.11563732',
            ),
            13 =>
            array (
                'id' => 636,
                'name_ar' => 'المرجان',
                'name_en' => 'al murjan',
                'city_id' => 483,
                'neCoordinates' => '24.05998860,38.11776661',
                'swCoordinates' => '24.04469554,38.09700874',
            ),
            14 =>
            array (
                'id' => 637,
                'name_ar' => 'الياقوت',
                'name_en' => 'al yaqut',
                'city_id' => 483,
                'neCoordinates' => '24.06766384,38.12818022',
                'swCoordinates' => '24.05132530,38.10894903',
            ),
            15 =>
            array (
                'id' => 638,
                'name_ar' => 'اللؤلؤ',
                'name_en' => 'al lulu',
                'city_id' => 483,
                'neCoordinates' => '24.06440948,38.13594538',
                'swCoordinates' => '24.05075858,38.11980192',
            ),
            16 =>
            array (
                'id' => 639,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 483,
                'neCoordinates' => '24.05724991,38.18010929',
                'swCoordinates' => '24.04496214,38.16714565',
            ),
            17 =>
            array (
                'id' => 640,
                'name_ar' => 'الحرس الوطني',
                'name_en' => 'al haras al watani',
                'city_id' => 483,
                'neCoordinates' => '24.09469405,38.17231235',
                'swCoordinates' => '24.04818320,38.13566693',
            ),
            18 =>
            array (
                'id' => 641,
                'name_ar' => 'النبراس',
                'name_en' => 'an nibras',
                'city_id' => 483,
                'neCoordinates' => '24.06596991,38.18461317',
                'swCoordinates' => '24.05515309,38.16973870',
            ),
            19 =>
            array (
                'id' => 642,
                'name_ar' => 'عدان',
                'name_en' => 'adan',
                'city_id' => 483,
                'neCoordinates' => '24.05514727,38.19200333',
                'swCoordinates' => '24.04008454,38.17497592',
            ),
            20 =>
            array (
                'id' => 643,
                'name_ar' => 'السناف',
                'name_en' => 'as sinaf',
                'city_id' => 483,
                'neCoordinates' => '24.06618567,38.20882119',
                'swCoordinates' => '24.04497877,38.18010677',
            ),
            21 =>
            array (
                'id' => 644,
                'name_ar' => 'المشيريف',
                'name_en' => 'al mushayrif',
                'city_id' => 483,
                'neCoordinates' => '24.04496193,38.18624759',
                'swCoordinates' => '24.02548854,38.16916579',
            ),
            22 =>
            array (
                'id' => 645,
                'name_ar' => 'الجار',
                'name_en' => 'al jar',
                'city_id' => 483,
                'neCoordinates' => '24.03616220,38.18013063',
                'swCoordinates' => '24.00157315,38.15105259',
            ),
            23 =>
            array (
                'id' => 646,
                'name_ar' => 'البثنة',
                'name_en' => 'al bathnah',
                'city_id' => 483,
                'neCoordinates' => '24.01218007,38.18496936',
                'swCoordinates' => '23.99088321,38.15973239',
            ),
            24 =>
            array (
                'id' => 647,
                'name_ar' => 'العيون',
                'name_en' => 'al uywn',
                'city_id' => 483,
                'neCoordinates' => '24.02074170,38.18588631',
                'swCoordinates' => '24.00142948,38.16752303',
            ),
            25 =>
            array (
                'id' => 648,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 483,
                'neCoordinates' => '24.02225689,38.19808942',
                'swCoordinates' => '24.00808979,38.18012957',
            ),
            26 =>
            array (
                'id' => 649,
                'name_ar' => 'السويق',
                'name_en' => 'as suwayq',
                'city_id' => 483,
                'neCoordinates' => '24.05530004,38.23288782',
                'swCoordinates' => '24.03459653,38.20370610',
            ),
            27 =>
            array (
                'id' => 650,
                'name_ar' => 'الداسمة',
                'name_en' => 'dasimah',
                'city_id' => 483,
                'neCoordinates' => '24.04497877,38.22375279',
                'swCoordinates' => '24.02627015,38.19878356',
            ),
            28 =>
            array (
                'id' => 651,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyyah',
                'city_id' => 483,
                'neCoordinates' => '24.04023193,38.19878450',
                'swCoordinates' => '24.02074292,38.17824099',
            ),
            29 =>
            array (
                'id' => 652,
                'name_ar' => 'المهن',
                'name_en' => 'al mihan',
                'city_id' => 483,
                'neCoordinates' => '24.04475610,38.24205966',
                'swCoordinates' => '24.01889475,38.21632883',
            ),
            30 =>
            array (
                'id' => 653,
                'name_ar' => 'النواة',
                'name_en' => 'an nawah',
                'city_id' => 483,
                'neCoordinates' => '24.01921326,38.23607779',
                'swCoordinates' => '23.98296961,38.20767337',
            ),
            31 =>
            array (
                'id' => 654,
                'name_ar' => 'الراعب',
                'name_en' => 'al raib',
                'city_id' => 1542,
                'neCoordinates' => '20.01700226,41.48079442',
                'swCoordinates' => '20.00752852,41.46773474',
            ),
            32 =>
            array (
                'id' => 655,
                'name_ar' => 'الزرقاء',
                'name_en' => 'az zarqa',
                'city_id' => 1542,
                'neCoordinates' => '20.02151871,41.45854893',
                'swCoordinates' => '20.00790394,41.44715145',
            ),
            33 =>
            array (
                'id' => 656,
                'name_ar' => 'الظفير',
                'name_en' => 'adh dhafir',
                'city_id' => 1542,
                'neCoordinates' => '20.01026441,41.48360814',
                'swCoordinates' => '19.99963567,41.46653506',
            ),
            34 =>
            array (
                'id' => 657,
                'name_ar' => 'وسط المدينة',
                'name_en' => 'towen center',
                'city_id' => 1542,
                'neCoordinates' => '20.01269207,41.47238790',
                'swCoordinates' => '19.99909943,41.45326351',
            ),
            35 =>
            array (
                'id' => 658,
                'name_ar' => 'رضوى',
                'name_en' => 'radwa',
                'city_id' => 483,
                'neCoordinates' => '24.01090872,38.21316901',
                'swCoordinates' => '23.99711959,38.19808798',
            ),
            36 =>
            array (
                'id' => 659,
                'name_ar' => 'عين النوى',
                'name_en' => 'ayn an nawa',
                'city_id' => 483,
                'neCoordinates' => '23.99834320,38.21377823',
                'swCoordinates' => '23.98516574,38.19947040',
            ),
            37 =>
            array (
                'id' => 660,
                'name_ar' => 'الفهد',
                'name_en' => 'al fahd',
                'city_id' => 483,
                'neCoordinates' => '24.00426037,38.19947373',
                'swCoordinates' => '23.99427162,38.18471168',
            ),
            38 =>
            array (
                'id' => 661,
                'name_ar' => 'الصبح',
                'name_en' => 'as subh',
                'city_id' => 483,
                'neCoordinates' => '23.99712824,38.20368593',
                'swCoordinates' => '23.98443410,38.19169843',
            ),
            39 =>
            array (
                'id' => 662,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 483,
                'neCoordinates' => '23.98816933,38.21063568',
                'swCoordinates' => '23.97597305,38.18538621',
            ),
            40 =>
            array (
                'id' => 663,
                'name_ar' => 'منطقة الصناعات الخفيفة',
                'name_en' => 'light industrial park',
                'city_id' => 483,
                'neCoordinates' => '24.02707097,38.27530597',
                'swCoordinates' => '23.99110251,38.23607779',
            ),
            41 =>
            array (
                'id' => 664,
                'name_ar' => 'الصواري',
                'name_en' => 'as sawari',
                'city_id' => 483,
                'neCoordinates' => '24.03705310,38.25142207',
                'swCoordinates' => '24.01131320,38.22606358',
            ),
            42 =>
            array (
                'id' => 665,
                'name_ar' => 'الحوراء',
                'name_en' => 'al hawra',
                'city_id' => 483,
                'neCoordinates' => '24.10592710,38.05475494',
                'swCoordinates' => '24.08727311,38.03572667',
            ),
            43 =>
            array (
                'id' => 666,
                'name_ar' => 'مطار ينبع الاقليمي',
                'name_en' => 'yanbu domestic airport',
                'city_id' => 483,
                'neCoordinates' => '24.16305031,38.09357606',
                'swCoordinates' => '24.13224051,38.03385512',
            ),
            44 =>
            array (
                'id' => 667,
                'name_ar' => 'الباهر',
                'name_en' => 'al bahir',
                'city_id' => 1542,
                'neCoordinates' => '20.01761179,41.46495037',
                'swCoordinates' => '20.01150359,41.45855202',
            ),
            45 =>
            array (
                'id' => 668,
                'name_ar' => 'الحاوية',
                'name_en' => 'al hawiyah',
                'city_id' => 1542,
                'neCoordinates' => '20.01940371,41.47290792',
                'swCoordinates' => '20.01135464,41.46263421',
            ),
            46 =>
            array (
                'id' => 669,
                'name_ar' => 'مخطط نيف الدرزي',
                'name_en' => 'nayf durzi',
                'city_id' => 2237,
                'neCoordinates' => '29.86488683,40.21708140',
                'swCoordinates' => '29.85474686,40.20520106',
            ),
            47 =>
            array (
                'id' => 670,
                'name_ar' => 'جنوب غرب قارا',
                'name_en' => 'southwestern qara',
                'city_id' => 2237,
                'neCoordinates' => '29.87611756,40.22083206',
                'swCoordinates' => '29.86333279,40.20885897',
            ),
            48 =>
            array (
                'id' => 671,
                'name_ar' => 'شمال قارا',
                'name_en' => 'north qara',
                'city_id' => 2237,
                'neCoordinates' => '29.89783301,40.22979709',
                'swCoordinates' => '29.88588621,40.21276940',
            ),
            49 =>
            array (
                'id' => 672,
                'name_ar' => 'مخطط الامل',
                'name_en' => 'al amal subdivsion',
                'city_id' => 2237,
                'neCoordinates' => '29.90280200,40.22118481',
                'swCoordinates' => '29.87323023,40.20302087',
            ),
            50 =>
            array (
                'id' => 673,
                'name_ar' => 'مخطط المنح الخاصة',
                'name_en' => 'al minah',
                'city_id' => 2237,
                'neCoordinates' => '29.86997567,40.22609389',
                'swCoordinates' => '29.85359777,40.21156690',
            ),
            51 =>
            array (
                'id' => 674,
                'name_ar' => 'قارا',
                'name_en' => 'qara',
                'city_id' => 2237,
                'neCoordinates' => '29.88723481,40.23851159',
                'swCoordinates' => '29.86908086,40.21816685',
            ),
            52 =>
            array (
                'id' => 675,
                'name_ar' => 'مخطط الفيصلي',
                'name_en' => 'al faisaliyyah subdivision',
                'city_id' => 2237,
                'neCoordinates' => '29.94096487,40.19175738',
                'swCoordinates' => '29.91064748,40.17301093',
            ),
            53 =>
            array (
                'id' => 676,
                'name_ar' => 'الطوير',
                'name_en' => 'at tuwair',
                'city_id' => 2237,
                'neCoordinates' => '29.92801317,40.21086351',
                'swCoordinates' => '29.90089320,40.18735504',
            ),
            54 =>
            array (
                'id' => 677,
                'name_ar' => 'المحمدية ا',
                'name_en' => 'al muhammadiyah a',
                'city_id' => 2237,
                'neCoordinates' => '29.95784458,40.20813424',
                'swCoordinates' => '29.94941987,40.19671557',
            ),
            55 =>
            array (
                'id' => 678,
                'name_ar' => 'المحمدية د',
                'name_en' => 'al muhammadiyah d',
                'city_id' => 2237,
                'neCoordinates' => '29.95601285,40.21974201',
                'swCoordinates' => '29.93927037,40.20341567',
            ),
            56 =>
            array (
                'id' => 679,
                'name_ar' => 'الشلهوب',
                'name_en' => 'ash shalhub',
                'city_id' => 2237,
                'neCoordinates' => '29.97081521,40.21652232',
                'swCoordinates' => '29.95784458,40.20364887',
            ),
            57 =>
            array (
                'id' => 680,
                'name_ar' => 'مخطط الصناعية',
                'name_en' => 'as sinaiyah subdivision',
                'city_id' => 2237,
                'neCoordinates' => '29.97998234,40.22599597',
                'swCoordinates' => '29.95120565,40.20594450',
            ),
            58 =>
            array (
                'id' => 681,
                'name_ar' => 'المطر',
                'name_en' => 'al matr',
                'city_id' => 2237,
                'neCoordinates' => '29.98012829,40.21656787',
                'swCoordinates' => '29.96800983,40.20325005',
            ),
            59 =>
            array (
                'id' => 682,
                'name_ar' => 'السوق',
                'name_en' => 'as suq',
                'city_id' => 2237,
                'neCoordinates' => '29.99356555,40.21658774',
                'swCoordinates' => '29.97998234,40.20752658',
            ),
            60 =>
            array (
                'id' => 683,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyyah',
                'city_id' => 1061,
                'neCoordinates' => '24.14294361,47.29751698',
                'swCoordinates' => '24.11444211,47.27008307',
            ),
            61 =>
            array (
                'id' => 684,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 1061,
                'neCoordinates' => '24.14965392,47.29297218',
                'swCoordinates' => '24.11915990,47.26078489',
            ),
            62 =>
            array (
                'id' => 685,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyyah',
                'city_id' => 1061,
                'neCoordinates' => '24.15437053,47.30325835',
                'swCoordinates' => '24.13786234,47.28849343',
            ),
            63 =>
            array (
                'id' => 686,
                'name_ar' => 'مشرف',
                'name_en' => 'mishrif',
                'city_id' => 1061,
                'neCoordinates' => '24.12064354,47.29171630',
                'swCoordinates' => '24.10008384,47.26270364',
            ),
            64 =>
            array (
                'id' => 687,
                'name_ar' => 'الراشدية',
                'name_en' => 'ar rashidiyyah',
                'city_id' => 1061,
                'neCoordinates' => '24.10525485,47.24536260',
                'swCoordinates' => '24.08479727,47.23580560',
            ),
            65 =>
            array (
                'id' => 688,
                'name_ar' => 'مخطط السليمانية',
                'name_en' => 'as sulaimaniyyah',
                'city_id' => 2237,
                'neCoordinates' => '29.98189685,40.19172342',
                'swCoordinates' => '29.97202925,40.17588701',
            ),
            66 =>
            array (
                'id' => 689,
                'name_ar' => 'مخطط كساب المويشير',
                'name_en' => 'kassab al muwayshir',
                'city_id' => 2237,
                'neCoordinates' => '29.97612646,40.19029455',
                'swCoordinates' => '29.96040498,40.17374933',
            ),
            67 =>
            array (
                'id' => 690,
                'name_ar' => 'الضلع',
                'name_en' => 'al dil',
                'city_id' => 2237,
                'neCoordinates' => '29.99472952,40.21108451',
                'swCoordinates' => '29.98477283,40.19930343',
            ),
            68 =>
            array (
                'id' => 691,
                'name_ar' => 'المعاقلة',
                'name_en' => 'al muaqilah',
                'city_id' => 2237,
                'neCoordinates' => '29.98906507,40.21095216',
                'swCoordinates' => '29.97419139,40.19154192',
            ),
            69 =>
            array (
                'id' => 692,
                'name_ar' => 'الشعيب',
                'name_en' => 'ash shuaib',
                'city_id' => 2237,
                'neCoordinates' => '29.99467635,40.22362728',
                'swCoordinates' => '29.97972258,40.20984694',
            ),
            70 =>
            array (
                'id' => 693,
                'name_ar' => 'مخطط غرب الاقليمي',
                'name_en' => 'west regional road subdivision',
                'city_id' => 2237,
                'neCoordinates' => '30.01464532,40.22350444',
                'swCoordinates' => '29.98979093,40.20983979',
            ),
            71 =>
            array (
                'id' => 694,
                'name_ar' => 'شمال مقبرة اللقائط',
                'name_en' => 'north of al laqait cemetery',
                'city_id' => 2237,
                'neCoordinates' => '30.00209339,40.23410483',
                'swCoordinates' => '29.97971467,40.22250752',
            ),
            72 =>
            array (
                'id' => 695,
                'name_ar' => 'مخطط الصديق',
                'name_en' => 'as siddiq subdivsion',
                'city_id' => 2237,
                'neCoordinates' => '29.98359219,40.23986730',
                'swCoordinates' => '29.96507881,40.22362728',
            ),
            73 =>
            array (
                'id' => 696,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 2237,
                'neCoordinates' => '29.98370174,40.26413537',
                'swCoordinates' => '29.97631252,40.24658418',
            ),
            74 =>
            array (
                'id' => 697,
                'name_ar' => 'اللقائط',
                'name_en' => 'al laqait',
                'city_id' => 2237,
                'neCoordinates' => '30.00374581,40.26357763',
                'swCoordinates' => '29.98245470,40.23148020',
            ),
            75 =>
            array (
                'id' => 698,
                'name_ar' => 'المنيفية',
                'name_en' => 'al munyfiyah',
                'city_id' => 1061,
                'neCoordinates' => '24.18597657,47.29910472',
                'swCoordinates' => '24.16454521,47.28370864',
            ),
            76 =>
            array (
                'id' => 699,
                'name_ar' => 'الناصفة',
                'name_en' => 'an nasifah',
                'city_id' => 1061,
                'neCoordinates' => '24.20139602,47.29604440',
                'swCoordinates' => '24.18248828,47.27330653',
            ),
            77 =>
            array (
                'id' => 700,
                'name_ar' => 'البديعة',
                'name_en' => 'al badiah',
                'city_id' => 1061,
                'neCoordinates' => '24.20535571,47.30706880',
                'swCoordinates' => '24.17302950,47.29275363',
            ),
            78 =>
            array (
                'id' => 701,
                'name_ar' => 'المنصورة',
                'name_en' => 'al mansurah',
                'city_id' => 1061,
                'neCoordinates' => '24.18401772,47.34655974',
                'swCoordinates' => '24.16379541,47.31775063',
            ),
            79 =>
            array (
                'id' => 702,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 1061,
                'neCoordinates' => '24.16361969,47.34405653',
                'swCoordinates' => '24.14563345,47.32537686',
            ),
            80 =>
            array (
                'id' => 703,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 1061,
                'neCoordinates' => '24.17214516,47.35837609',
                'swCoordinates' => '24.15386173,47.33427520',
            ),
            81 =>
            array (
                'id' => 704,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 1061,
                'neCoordinates' => '24.15711326,47.33667543',
                'swCoordinates' => '24.14087088,47.31352269',
            ),
            82 =>
            array (
                'id' => 705,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 1061,
                'neCoordinates' => '24.15902668,47.35587279',
                'swCoordinates' => '24.13688938,47.33324818',
            ),
            83 =>
            array (
                'id' => 706,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faysaliyyah',
                'city_id' => 1061,
                'neCoordinates' => '24.17163227,47.36321641',
                'swCoordinates' => '24.15047303,47.34766603',
            ),
            84 =>
            array (
                'id' => 707,
                'name_ar' => 'الزاهر',
                'name_en' => 'az zahir',
                'city_id' => 1061,
                'neCoordinates' => '24.15630662,47.37787197',
                'swCoordinates' => '24.12392154,47.33733810',
            ),
            85 =>
            array (
                'id' => 708,
                'name_ar' => 'منطقة صناعية',
                'name_en' => 'industrial area',
                'city_id' => 1061,
                'neCoordinates' => '24.25341403,47.76517316',
                'swCoordinates' => '24.15807794,47.62382682',
            ),
            86 =>
            array (
                'id' => 709,
                'name_ar' => 'السعيدان',
                'name_en' => 'as saydan',
                'city_id' => 1073,
                'neCoordinates' => '24.02670751,47.13796787',
                'swCoordinates' => '24.00569464,47.12340981',
            ),
            87 =>
            array (
                'id' => 710,
                'name_ar' => 'السماري',
                'name_en' => 'as samari',
                'city_id' => 1073,
                'neCoordinates' => '24.02551550,47.14391328',
                'swCoordinates' => '24.00737020,47.13657986',
            ),
            88 =>
            array (
                'id' => 711,
                'name_ar' => 'العويمرية',
                'name_en' => 'al uwaymiriyah',
                'city_id' => 1073,
                'neCoordinates' => '24.00022219,47.14452502',
                'swCoordinates' => '23.97878128,47.13543980',
            ),
            89 =>
            array (
                'id' => 712,
                'name_ar' => 'الصحنة',
                'name_en' => 'al sahnah',
                'city_id' => 1073,
                'neCoordinates' => '23.99545580,47.13974543',
                'swCoordinates' => '23.96942297,47.12904706',
            ),
            90 =>
            array (
                'id' => 713,
                'name_ar' => 'العذراء',
                'name_en' => 'al adhra',
                'city_id' => 1073,
                'neCoordinates' => '23.99538286,47.15539534',
                'swCoordinates' => '23.97785138,47.14557377',
            ),
            91 =>
            array (
                'id' => 714,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 1073,
                'neCoordinates' => '23.99677394,47.16524817',
                'swCoordinates' => '23.98764822,47.15519683',
            ),
            92 =>
            array (
                'id' => 715,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasariyah',
                'city_id' => 1073,
                'neCoordinates' => '23.99258110,47.17174751',
                'swCoordinates' => '23.98298149,47.16244712',
            ),
            93 =>
            array (
                'id' => 716,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sanaiyyah',
                'city_id' => 880,
                'neCoordinates' => '24.07052148,45.32301074',
                'swCoordinates' => '24.06031146,45.30246737',
            ),
            94 =>
            array (
                'id' => 717,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 880,
                'neCoordinates' => '24.06822787,45.30467798',
                'swCoordinates' => '24.05872185,45.29244378',
            ),
            95 =>
            array (
                'id' => 718,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 880,
                'neCoordinates' => '24.04636181,45.25490252',
                'swCoordinates' => '24.04076687,45.25136645',
            ),
            96 =>
            array (
                'id' => 719,
                'name_ar' => 'الجفونية',
                'name_en' => 'al jaffuniyyah',
                'city_id' => 880,
                'neCoordinates' => '24.04837167,45.25779439',
                'swCoordinates' => '24.04459032,45.25410275',
            ),
            97 =>
            array (
                'id' => 720,
                'name_ar' => 'الضريب',
                'name_en' => 'ad darib',
                'city_id' => 880,
                'neCoordinates' => '24.04654066,45.25258931',
                'swCoordinates' => '24.04116530,45.24552442',
            ),
            98 =>
            array (
                'id' => 721,
                'name_ar' => 'العالية',
                'name_en' => 'al aliyah',
                'city_id' => 1061,
                'neCoordinates' => '24.18220082,47.36375457',
                'swCoordinates' => '24.16364655,47.32890444',
            ),
            99 =>
            array (
                'id' => 722,
                'name_ar' => 'مخطط الزهور',
                'name_en' => 'az zuhur subdivision',
                'city_id' => 2237,
                'neCoordinates' => '29.92792745,40.21454537',
                'swCoordinates' => '29.91319911,40.19924714',
            ),
            100 =>
            array (
                'id' => 723,
                'name_ar' => 'المحمدية م',
                'name_en' => 'al muhammadiyah g',
                'city_id' => 2237,
                'neCoordinates' => '29.93139553,40.20483738',
                'swCoordinates' => '29.92126403,40.19306451',
            ),
            101 =>
            array (
                'id' => 724,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 2237,
                'neCoordinates' => '29.98282221,40.25051461',
                'swCoordinates' => '29.97166176,40.23644950',
            ),
            102 =>
            array (
                'id' => 725,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2237,
                'neCoordinates' => '29.99052303,40.26807131',
                'swCoordinates' => '29.98198931,40.24062822',
            ),
            103 =>
            array (
                'id' => 726,
                'name_ar' => 'مخطط القديم',
                'name_en' => 'old subdivision',
                'city_id' => 2237,
                'neCoordinates' => '29.97574805,40.20594508',
                'swCoordinates' => '29.95183714,40.18910376',
            ),
            104 =>
            array (
                'id' => 727,
                'name_ar' => 'المنح الخاصة',
                'name_en' => 'al minah al khassah',
                'city_id' => 2237,
                'neCoordinates' => '29.95302389,40.19671557',
                'swCoordinates' => '29.93204663,40.18340361',
            ),
            105 =>
            array (
                'id' => 728,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyyah',
                'city_id' => 2237,
                'neCoordinates' => '29.96570091,40.19099443',
                'swCoordinates' => '29.94096467,40.18071313',
            ),
            106 =>
            array (
                'id' => 729,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 483,
                'neCoordinates' => '24.09075336,38.07000666',
                'swCoordinates' => '24.08539000,38.06289940',
            ),
            107 =>
            array (
                'id' => 730,
                'name_ar' => 'الحدائق',
                'name_en' => 'al hadaiq',
                'city_id' => 483,
                'neCoordinates' => '24.08913193,38.06441362',
                'swCoordinates' => '24.08383710,38.05735522',
            ),
            108 =>
            array (
                'id' => 731,
                'name_ar' => 'القاد',
                'name_en' => 'al qad',
                'city_id' => 483,
                'neCoordinates' => '24.07850516,38.06055414',
                'swCoordinates' => '24.07563533,38.05699334',
            ),
            109 =>
            array (
                'id' => 732,
                'name_ar' => 'الصاعيدة',
                'name_en' => 'as saaydah',
                'city_id' => 483,
                'neCoordinates' => '24.08385508,38.06109826',
                'swCoordinates' => '24.07639639,38.05416417',
            ),
            110 =>
            array (
                'id' => 734,
                'name_ar' => 'السميري',
                'name_en' => 'as sumayri',
                'city_id' => 483,
                'neCoordinates' => '24.02627015,38.22564280',
                'swCoordinates' => '24.01090872,38.21051702',
            ),
            111 =>
            array (
                'id' => 736,
                'name_ar' => 'الفيصل',
                'name_en' => 'al faysal',
                'city_id' => 483,
                'neCoordinates' => '24.03501921,38.21632883',
                'swCoordinates' => '24.02220661,38.19623676',
            ),
            112 =>
            array (
                'id' => 737,
                'name_ar' => 'الخالد',
                'name_en' => 'al khalid',
                'city_id' => 483,
                'neCoordinates' => '24.00968234,38.19866474',
                'swCoordinates' => '23.99851295,38.17814773',
            ),
            113 =>
            array (
                'id' => 738,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 483,
                'neCoordinates' => '24.01131320,38.35218076',
                'swCoordinates' => '23.89789595,38.19034290',
            ),
            114 =>
            array (
                'id' => 739,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 2237,
                'neCoordinates' => '29.79950044,40.12973265',
                'swCoordinates' => '29.76581064,40.04872570',
            ),
            115 =>
            array (
                'id' => 740,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 2237,
                'neCoordinates' => '29.96233379,40.18379700',
                'swCoordinates' => '29.93749118,40.16909097',
            ),
            116 =>
            array (
                'id' => 741,
                'name_ar' => 'المحمدية ب',
                'name_en' => 'al muhammadiyah b',
                'city_id' => 2237,
                'neCoordinates' => '29.95183714,40.20580602',
                'swCoordinates' => '29.94267230,40.19432340',
            ),
            117 =>
            array (
                'id' => 742,
                'name_ar' => 'المحمدية و',
                'name_en' => 'al muhammadiyah f',
                'city_id' => 2237,
                'neCoordinates' => '29.94509725,40.20341567',
                'swCoordinates' => '29.93139553,40.19074692',
            ),
            118 =>
            array (
                'id' => 743,
                'name_ar' => 'المحمدية ه',
                'name_en' => 'al muhammadiyah e',
                'city_id' => 2237,
                'neCoordinates' => '29.94267230,40.21762657',
                'swCoordinates' => '29.92469613,40.19797620',
            ),
            119 =>
            array (
                'id' => 744,
                'name_ar' => 'المحمدية ن',
                'name_en' => 'al muhammadiyah h',
                'city_id' => 2237,
                'neCoordinates' => '29.93492798,40.19797620',
                'swCoordinates' => '29.92672827,40.18858910',
            ),
            120 =>
            array (
                'id' => 745,
                'name_ar' => 'مخطط السليمانية',
                'name_en' => 'as sulaimaniyyah',
                'city_id' => 2237,
                'neCoordinates' => '29.98610136,40.19345326',
                'swCoordinates' => '29.97665292,40.18322673',
            ),
            121 =>
            array (
                'id' => 746,
                'name_ar' => 'مخطط العروبة',
                'name_en' => 'al urubah subdivision',
                'city_id' => 2237,
                'neCoordinates' => '30.01463287,40.22100518',
                'swCoordinates' => '29.99864401,40.20347379',
            ),
            122 =>
            array (
                'id' => 747,
                'name_ar' => 'مخطط كريم الدرزي',
                'name_en' => 'karim durzi subdivsion',
                'city_id' => 2237,
                'neCoordinates' => '29.85342839,40.20039808',
                'swCoordinates' => '29.84531641,40.18784943',
            ),
            123 =>
            array (
                'id' => 748,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 3161,
                'neCoordinates' => '23.50039114,46.88510442',
                'swCoordinates' => '23.48494691,46.87217045',
            ),
            124 =>
            array (
                'id' => 749,
                'name_ar' => 'خضار',
                'name_en' => 'khudar',
                'city_id' => 3161,
                'neCoordinates' => '23.55197633,46.85014739',
                'swCoordinates' => '23.52911254,46.82186018',
            ),
            125 =>
            array (
                'id' => 750,
                'name_ar' => 'الباطن',
                'name_en' => 'al batin',
                'city_id' => 3161,
                'neCoordinates' => '23.53448219,46.84555522',
                'swCoordinates' => '23.51078476,46.82205541',
            ),
            126 =>
            array (
                'id' => 751,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 3161,
                'neCoordinates' => '23.51640211,46.86207213',
                'swCoordinates' => '23.49976581,46.84100896',
            ),
            127 =>
            array (
                'id' => 752,
                'name_ar' => 'الشعيب',
                'name_en' => 'ash shuaib',
                'city_id' => 3161,
                'neCoordinates' => '23.52941646,46.80228597',
                'swCoordinates' => '23.49913765,46.78916129',
            ),
            128 =>
            array (
                'id' => 753,
                'name_ar' => 'زياد',
                'name_en' => 'ziyad',
                'city_id' => 3161,
                'neCoordinates' => '23.51577641,46.84180049',
                'swCoordinates' => '23.49299643,46.81987522',
            ),
            129 =>
            array (
                'id' => 754,
                'name_ar' => 'الفرعة',
                'name_en' => 'al farah',
                'city_id' => 3161,
                'neCoordinates' => '23.50536186,46.82303781',
                'swCoordinates' => '23.49262729,46.79593677',
            ),
            130 =>
            array (
                'id' => 755,
                'name_ar' => 'التضامن',
                'name_en' => 'al tdhamun',
                'city_id' => 3161,
                'neCoordinates' => '23.49805367,46.87465761',
                'swCoordinates' => '23.48429920,46.85746822',
            ),
            131 =>
            array (
                'id' => 756,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 3161,
                'neCoordinates' => '23.48657052,46.87911258',
                'swCoordinates' => '23.47244547,46.87046209',
            ),
            132 =>
            array (
                'id' => 757,
                'name_ar' => 'المجد',
                'name_en' => 'al majd',
                'city_id' => 3161,
                'neCoordinates' => '23.49841883,46.89254317',
                'swCoordinates' => '23.48155584,46.87851417',
            ),
            133 =>
            array (
                'id' => 758,
                'name_ar' => 'المصيف',
                'name_en' => 'al masiaf',
                'city_id' => 3161,
                'neCoordinates' => '23.48313975,46.88413315',
                'swCoordinates' => '23.46074254,46.87180564',
            ),
            134 =>
            array (
                'id' => 759,
                'name_ar' => 'الصدر',
                'name_en' => 'al sadr',
                'city_id' => 3161,
                'neCoordinates' => '23.48625703,46.85323498',
                'swCoordinates' => '23.45662764,46.82450954',
            ),
            135 =>
            array (
                'id' => 760,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 3161,
                'neCoordinates' => '23.50796648,46.91106363',
                'swCoordinates' => '23.49606951,46.88361719',
            ),
            136 =>
            array (
                'id' => 761,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 3161,
                'neCoordinates' => '23.50673755,46.88138423',
                'swCoordinates' => '23.49353015,46.86608157',
            ),
            137 =>
            array (
                'id' => 762,
                'name_ar' => 'الحلة',
                'name_en' => 'al hilah',
                'city_id' => 3161,
                'neCoordinates' => '23.50152663,46.86164800',
                'swCoordinates' => '23.47791845,46.84894729',
            ),
            138 =>
            array (
                'id' => 763,
                'name_ar' => 'حطين',
                'name_en' => 'hitien',
                'city_id' => 270,
                'neCoordinates' => '26.33160621,44.88386173',
                'swCoordinates' => '26.31715371,44.86644381',
            ),
            139 =>
            array (
                'id' => 764,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 270,
                'neCoordinates' => '26.32787893,44.84829584',
                'swCoordinates' => '26.31184898,44.83628255',
            ),
            140 =>
            array (
                'id' => 765,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faysaliyyah',
                'city_id' => 270,
                'neCoordinates' => '26.29381103,44.80227961',
                'swCoordinates' => '26.27722309,44.77107043',
            ),
            141 =>
            array (
                'id' => 766,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyyah',
                'city_id' => 270,
                'neCoordinates' => '26.30791387,44.81581629',
                'swCoordinates' => '26.29227679,44.79790222',
            ),
            142 =>
            array (
                'id' => 767,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 270,
                'neCoordinates' => '26.30285889,44.80443815',
                'swCoordinates' => '26.29187139,44.78904529',
            ),
            143 =>
            array (
                'id' => 768,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyyah',
                'city_id' => 270,
                'neCoordinates' => '26.29910313,44.82502726',
                'swCoordinates' => '26.27900528,44.80708802',
            ),
            144 =>
            array (
                'id' => 769,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 270,
                'neCoordinates' => '26.29355830,44.82543596',
                'swCoordinates' => '26.26777032,44.79921421',
            ),
            145 =>
            array (
                'id' => 770,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 270,
                'neCoordinates' => '26.32162682,44.88754024',
                'swCoordinates' => '26.31000430,44.87102450',
            ),
            146 =>
            array (
                'id' => 771,
                'name_ar' => 'الريان',
                'name_en' => 'ar riyan',
                'city_id' => 270,
                'neCoordinates' => '26.31258863,44.89140458',
                'swCoordinates' => '26.29894823,44.87421892',
            ),
            147 =>
            array (
                'id' => 772,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 270,
                'neCoordinates' => '26.30325950,44.89658282',
                'swCoordinates' => '26.28700532,44.87900620',
            ),
            148 =>
            array (
                'id' => 773,
                'name_ar' => 'مرخ',
                'name_en' => 'margh',
                'city_id' => 270,
                'neCoordinates' => '26.29072488,44.89991217',
                'swCoordinates' => '26.27875389,44.88433587',
            ),
            149 =>
            array (
                'id' => 774,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sanaiyyah',
                'city_id' => 270,
                'neCoordinates' => '26.31000430,44.88501874',
                'swCoordinates' => '26.28180155,44.86430241',
            ),
            150 =>
            array (
                'id' => 775,
                'name_ar' => 'بدر',
                'name_en' => 'badr',
                'city_id' => 270,
                'neCoordinates' => '26.32470787,44.87421892',
                'swCoordinates' => '26.30964236,44.85903243',
            ),
            151 =>
            array (
                'id' => 776,
                'name_ar' => 'احد',
                'name_en' => 'uhd',
                'city_id' => 270,
                'neCoordinates' => '26.30964224,44.86842516',
                'swCoordinates' => '26.29569468,44.84122892',
            ),
            152 =>
            array (
                'id' => 777,
                'name_ar' => 'طويق',
                'name_en' => 'tuwik',
                'city_id' => 270,
                'neCoordinates' => '26.32200407,44.86430249',
                'swCoordinates' => '26.30524043,44.84468214',
            ),
            153 =>
            array (
                'id' => 778,
                'name_ar' => 'الفاروق',
                'name_en' => 'al farouq',
                'city_id' => 270,
                'neCoordinates' => '26.31274974,44.83098581',
                'swCoordinates' => '26.29910313,44.81235359',
            ),
            154 =>
            array (
                'id' => 779,
                'name_ar' => 'الصديق',
                'name_en' => 'as sediq',
                'city_id' => 270,
                'neCoordinates' => '26.30571887,44.83570287',
                'swCoordinates' => '26.29039764,44.81581629',
            ),
            155 =>
            array (
                'id' => 780,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmok',
                'city_id' => 270,
                'neCoordinates' => '26.32137475,44.82520710',
                'swCoordinates' => '26.30411556,44.80706238',
            ),
            156 =>
            array (
                'id' => 781,
                'name_ar' => 'الفالح',
                'name_en' => 'al falih',
                'city_id' => 270,
                'neCoordinates' => '26.28533870,44.84117575',
                'swCoordinates' => '26.26748159,44.82524915',
            ),
            157 =>
            array (
                'id' => 782,
                'name_ar' => 'اليمامة',
                'name_en' => 'al yamamah',
                'city_id' => 270,
                'neCoordinates' => '26.34072056,44.80356822',
                'swCoordinates' => '26.30285889,44.78215210',
            ),
            158 =>
            array (
                'id' => 783,
                'name_ar' => 'علقة',
                'name_en' => 'alkah',
                'city_id' => 270,
                'neCoordinates' => '26.34623675,44.79459643',
                'swCoordinates' => '26.33436085,44.77945057',
            ),
            159 =>
            array (
                'id' => 784,
                'name_ar' => 'الدرعية',
                'name_en' => 'al deriyah',
                'city_id' => 270,
                'neCoordinates' => '26.35684862,44.79214217',
                'swCoordinates' => '26.34381466,44.78100005',
            ),
            160 =>
            array (
                'id' => 785,
                'name_ar' => 'المنتزة',
                'name_en' => 'al muntazah',
                'city_id' => 270,
                'neCoordinates' => '26.34170549,44.87979962',
                'swCoordinates' => '26.32767801,44.86152333',
            ),
            161 =>
            array (
                'id' => 786,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 270,
                'neCoordinates' => '26.30541541,44.85016980',
                'swCoordinates' => '26.28892547,44.83098569',
            ),
            162 =>
            array (
                'id' => 787,
                'name_ar' => 'سمنان ',
                'name_en' => 'semnan',
                'city_id' => 270,
                'neCoordinates' => '26.29953522,44.85992530',
                'swCoordinates' => '26.27924998,44.82195012',
            ),
            163 =>
            array (
                'id' => 788,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 270,
                'neCoordinates' => '26.32702224,44.83909870',
                'swCoordinates' => '26.30425469,44.81807481',
            ),
            164 =>
            array (
                'id' => 789,
                'name_ar' => 'السيح',
                'name_en' => 'as sieh',
                'city_id' => 270,
                'neCoordinates' => '26.34454407,44.82209509',
                'swCoordinates' => '26.30587621,44.80017541',
            ),
            165 =>
            array (
                'id' => 790,
                'name_ar' => 'عريعرة',
                'name_en' => 'urierah',
                'city_id' => 270,
                'neCoordinates' => '26.34831607,44.82991702',
                'swCoordinates' => '26.32390674,44.80960094',
            ),
            166 =>
            array (
                'id' => 791,
                'name_ar' => 'مخطط الموسى',
                'name_en' => 'al musa subdivision',
                'city_id' => 62,
                'neCoordinates' => '18.34162972,42.78209436',
                'swCoordinates' => '18.30616757,42.75061770',
            ),
            167 =>
            array (
                'id' => 792,
                'name_ar' => 'سكن القاعدة الجوية',
                'name_en' => 'airforce housing',
                'city_id' => 62,
                'neCoordinates' => '18.29601423,42.83921726',
                'swCoordinates' => '18.25117859,42.77997763',
            ),
            168 =>
            array (
                'id' => 793,
                'name_ar' => 'الرونه',
                'name_en' => 'ar runah',
                'city_id' => 62,
                'neCoordinates' => '18.25881250,42.82032019',
                'swCoordinates' => '18.22301463,42.78415996',
            ),
            169 =>
            array (
                'id' => 794,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 62,
                'neCoordinates' => '18.27789114,42.75059782',
                'swCoordinates' => '18.25421431,42.71321253',
            ),
            170 =>
            array (
                'id' => 795,
                'name_ar' => 'ذلالة',
                'name_en' => 'dhalalah',
                'city_id' => 62,
                'neCoordinates' => '18.25658292,42.77447050',
                'swCoordinates' => '18.22354474,42.74076241',
            ),
            171 =>
            array (
                'id' => 796,
                'name_ar' => 'الرصراص',
                'name_en' => 'ar rasras',
                'city_id' => 62,
                'neCoordinates' => '18.26308326,42.79093738',
                'swCoordinates' => '18.23671760,42.75802107',
            ),
            172 =>
            array (
                'id' => 797,
                'name_ar' => 'سكن المدينة العسكرية',
                'name_en' => 'military city housing',
                'city_id' => 62,
                'neCoordinates' => '18.24074938,42.79863694',
                'swCoordinates' => '18.21672175,42.76228805',
            ),
            173 =>
            array (
                'id' => 798,
                'name_ar' => 'سكن مجموعة اللواء الرابع عشر',
                'name_en' => '14th brigade housing',
                'city_id' => 62,
                'neCoordinates' => '18.27016570,42.86697175',
                'swCoordinates' => '18.22944050,42.83038286',
            ),
            174 =>
            array (
                'id' => 799,
                'name_ar' => 'الرونه',
                'name_en' => 'ar runah',
                'city_id' => 65,
                'neCoordinates' => '18.23537214,42.83784088',
                'swCoordinates' => '18.20927949,42.80255214',
            ),
            175 =>
            array (
                'id' => 800,
                'name_ar' => 'المدينة العسكرية',
                'name_en' => 'military city',
                'city_id' => 65,
                'neCoordinates' => '18.22398659,42.82128720',
                'swCoordinates' => '18.17652091,42.78229609',
            ),
            176 =>
            array (
                'id' => 801,
                'name_ar' => 'الهر ير',
                'name_en' => 'al harir',
                'city_id' => 62,
                'neCoordinates' => '18.28315935,42.78041856',
                'swCoordinates' => '18.25345803,42.74315562',
            ),
            177 =>
            array (
                'id' => 802,
                'name_ar' => 'الزمرد',
                'name_en' => 'az zomorod',
                'city_id' => 18,
                'neCoordinates' => '21.81019614,39.08312351',
                'swCoordinates' => '21.77890454,39.02842170',
            ),
            178 =>
            array (
                'id' => 803,
                'name_ar' => 'اللؤلؤ',
                'name_en' => 'al loaloa',
                'city_id' => 18,
                'neCoordinates' => '21.78494189,39.07818787',
                'swCoordinates' => '21.74912127,39.04844570',
            ),
            179 =>
            array (
                'id' => 804,
                'name_ar' => 'الياقوت',
                'name_en' => 'al yaqoot',
                'city_id' => 18,
                'neCoordinates' => '21.80175447,39.10121334',
                'swCoordinates' => '21.76341026,39.06013872',
            ),
            180 =>
            array (
                'id' => 805,
                'name_ar' => 'الصوارى',
                'name_en' => 'as swaryee',
                'city_id' => 18,
                'neCoordinates' => '21.81124821,39.12316556',
                'swCoordinates' => '21.78035652,39.07632954',
            ),
            181 =>
            array (
                'id' => 806,
                'name_ar' => 'الامواج',
                'name_en' => 'al amwaj',
                'city_id' => 18,
                'neCoordinates' => '21.76326792,39.09019434',
                'swCoordinates' => '21.73341036,39.05803344',
            ),
            182 =>
            array (
                'id' => 807,
                'name_ar' => 'الشراع',
                'name_en' => 'ash sheraa',
                'city_id' => 18,
                'neCoordinates' => '21.78035652,39.11350166',
                'swCoordinates' => '21.74875519,39.07799471',
            ),
            183 =>
            array (
                'id' => 808,
                'name_ar' => 'الفردوس',
                'name_en' => 'al ferdous',
                'city_id' => 18,
                'neCoordinates' => '21.79613266,39.13815674',
                'swCoordinates' => '21.76563412,39.10121334',
            ),
            184 =>
            array (
                'id' => 809,
                'name_ar' => 'الفلاح',
                'name_en' => 'al falah',
                'city_id' => 18,
                'neCoordinates' => '21.79783496,39.20873736',
                'swCoordinates' => '21.76505394,39.16694588',
            ),
            185 =>
            array (
                'id' => 810,
                'name_ar' => 'الاصالة',
                'name_en' => 'al asalah',
                'city_id' => 18,
                'neCoordinates' => '21.78748464,39.17488378',
                'swCoordinates' => '21.76549380,39.13561344',
            ),
            186 =>
            array (
                'id' => 811,
                'name_ar' => 'مريخ',
                'name_en' => 'mraykh',
                'city_id' => 18,
                'neCoordinates' => '21.56102587,39.31597903',
                'swCoordinates' => '21.50825867,39.27087591',
            ),
            187 =>
            array (
                'id' => 812,
                'name_ar' => 'الشروق',
                'name_en' => 'ash shrouk',
                'city_id' => 18,
                'neCoordinates' => '21.57878926,39.30967023',
                'swCoordinates' => '21.54263456,39.25270040',
            ),
            188 =>
            array (
                'id' => 813,
                'name_ar' => 'الامير فواز الشمالى',
                'name_en' => 'al amir fawaz ash shamaly',
                'city_id' => 18,
                'neCoordinates' => '21.44406446,39.31288663',
                'swCoordinates' => '21.42474686,39.28890769',
            ),
            189 =>
            array (
                'id' => 814,
                'name_ar' => 'الرياض',
                'name_en' => 'ar riyadh',
                'city_id' => 18,
                'neCoordinates' => '21.90629674,39.21379674',
                'swCoordinates' => '21.81143166,39.15751207',
            ),
            190 =>
            array (
                'id' => 815,
                'name_ar' => 'الفروسية',
                'name_en' => 'al frosyah',
                'city_id' => 18,
                'neCoordinates' => '21.85230876,39.22543173',
                'swCoordinates' => '21.80270044,39.18696648',
            ),
            191 =>
            array (
                'id' => 816,
                'name_ar' => 'الرحمانية',
                'name_en' => 'ar rahmanyah',
                'city_id' => 18,
                'neCoordinates' => '21.81213608,39.23819238',
                'swCoordinates' => '21.77401114,39.19729000',
            ),
            192 =>
            array (
                'id' => 817,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 18,
                'neCoordinates' => '21.78100989,39.24834192',
                'swCoordinates' => '21.74353482,39.20147455',
            ),
            193 =>
            array (
                'id' => 818,
                'name_ar' => 'الحمدانية',
                'name_en' => 'al hamadaniyah',
                'city_id' => 18,
                'neCoordinates' => '21.77517868,39.21241381',
                'swCoordinates' => '21.73561528,39.17488378',
            ),
            194 =>
            array (
                'id' => 819,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayaan',
                'city_id' => 18,
                'neCoordinates' => '21.71139410,39.22391100',
                'swCoordinates' => '21.65430542,39.20074862',
            ),
            195 =>
            array (
                'id' => 820,
                'name_ar' => 'ام حبلين',
                'name_en' => 'um hableen',
                'city_id' => 18,
                'neCoordinates' => '21.75624255,39.27197936',
                'swCoordinates' => '21.67271621,39.21312847',
            ),
            196 =>
            array (
                'id' => 821,
                'name_ar' => 'بريمان',
                'name_en' => 'bryman',
                'city_id' => 18,
                'neCoordinates' => '21.68780972,39.28683836',
                'swCoordinates' => '21.60792533,39.20519351',
            ),
            197 =>
            array (
                'id' => 822,
                'name_ar' => 'المنتزة',
                'name_en' => 'al montazah',
                'city_id' => 18,
                'neCoordinates' => '21.61973743,39.30285361',
                'swCoordinates' => '21.57486909,39.26058947',
            ),
            198 =>
            array (
                'id' => 823,
                'name_ar' => 'الثعالبة',
                'name_en' => 'ath thaalibah',
                'city_id' => 18,
                'neCoordinates' => '21.46990665,39.19444777',
                'swCoordinates' => '21.45865460,39.17868329',
            ),
            199 =>
            array (
                'id' => 824,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 18,
                'neCoordinates' => '21.49225203,39.20069184',
                'swCoordinates' => '21.47639458,39.17706212',
            ),
            200 =>
            array (
                'id' => 825,
                'name_ar' => 'الفاروق',
                'name_en' => 'al farouk',
                'city_id' => 18,
                'neCoordinates' => '21.46032449,39.28389864',
                'swCoordinates' => '21.44075167,39.25606022',
            ),
            201 =>
            array (
                'id' => 826,
                'name_ar' => 'العدل',
                'name_en' => 'al adel',
                'city_id' => 18,
                'neCoordinates' => '21.45225013,39.30612158',
                'swCoordinates' => '21.43583524,39.28003897',
            ),
            202 =>
            array (
                'id' => 827,
                'name_ar' => 'الهنداوية',
                'name_en' => 'al hindawiyah',
                'city_id' => 18,
                'neCoordinates' => '21.47851768,39.19946169',
                'swCoordinates' => '21.46779944,39.17735805',
            ),
            203 =>
            array (
                'id' => 828,
                'name_ar' => 'المحجر',
                'name_en' => 'al mahjar',
                'city_id' => 18,
                'neCoordinates' => '21.44953485,39.23566786',
                'swCoordinates' => '21.40678026,39.17243406',
            ),
            204 =>
            array (
                'id' => 829,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 18,
                'neCoordinates' => '21.63186724,39.14197755',
                'swCoordinates' => '21.60594327,39.11414758',
            ),
            205 =>
            array (
                'id' => 830,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 18,
                'neCoordinates' => '21.57440585,39.14414745',
                'swCoordinates' => '21.54644876,39.12616705',
            ),
            206 =>
            array (
                'id' => 831,
                'name_ar' => 'جامعة الملك عبدالعزيز',
                'name_en' => 'king abdul aziz university',
                'city_id' => 18,
                'neCoordinates' => '21.50252364,39.26910998',
                'swCoordinates' => '21.48325234,39.22632153',
            ),
            207 =>
            array (
                'id' => 832,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 18,
                'neCoordinates' => '21.54639302,39.28586942',
                'swCoordinates' => '21.51197225,39.23921211',
            ),
            208 =>
            array (
                'id' => 833,
                'name_ar' => 'البغدادية الشرقية',
                'name_en' => 'al baghdadiyah ash sharqiyah',
                'city_id' => 18,
                'neCoordinates' => '21.50374494,39.20426781',
                'swCoordinates' => '21.49023183,39.18475433',
            ),
            209 =>
            array (
                'id' => 834,
                'name_ar' => 'النزلة الشرقية',
                'name_en' => 'an nazlah ash sharqiyah',
                'city_id' => 18,
                'neCoordinates' => '21.48147263,39.23016101',
                'swCoordinates' => '21.46073096,39.21349254',
            ),
            210 =>
            array (
                'id' => 835,
                'name_ar' => 'البوادي',
                'name_en' => 'al bawadi',
                'city_id' => 18,
                'neCoordinates' => '21.61575122,39.17783507',
                'swCoordinates' => '21.58067828,39.15639298',
            ),
            211 =>
            array (
                'id' => 836,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 18,
                'neCoordinates' => '21.61359833,39.16620961',
                'swCoordinates' => '21.57440585,39.14197755',
            ),
            212 =>
            array (
                'id' => 837,
                'name_ar' => 'الثغر',
                'name_en' => 'ath thaghr',
                'city_id' => 18,
                'neCoordinates' => '21.48671441,39.24428681',
                'swCoordinates' => '21.47059849,39.20851707',
            ),
            213 =>
            array (
                'id' => 838,
                'name_ar' => 'الشرفية',
                'name_en' => 'ash sharafiyah',
                'city_id' => 18,
                'neCoordinates' => '21.53163454,39.19443472',
                'swCoordinates' => '21.50115457,39.18032583',
            ),
            214 =>
            array (
                'id' => 839,
                'name_ar' => 'قاعدة الملك فيصل البحرية',
                'name_en' => 'king faisal naval base',
                'city_id' => 18,
                'neCoordinates' => '21.41025032,39.20032062',
                'swCoordinates' => '21.32939870,39.12557389',
            ),
            215 =>
            array (
                'id' => 840,
                'name_ar' => 'الشفا',
                'name_en' => 'ash shefaa',
                'city_id' => 18,
                'neCoordinates' => '21.42243270,39.35191950',
                'swCoordinates' => '21.34192244,39.31309621',
            ),
            216 =>
            array (
                'id' => 841,
                'name_ar' => 'السنابل',
                'name_en' => 'as sanabel',
                'city_id' => 18,
                'neCoordinates' => '21.41028239,39.29699874',
                'swCoordinates' => '21.37315616,39.25527312',
            ),
            217 =>
            array (
                'id' => 842,
                'name_ar' => 'الهدى',
                'name_en' => 'al hada',
                'city_id' => 18,
                'neCoordinates' => '21.39303404,39.32255132',
                'swCoordinates' => '21.35249675,39.28628847',
            ),
            218 =>
            array (
                'id' => 843,
                'name_ar' => 'التضامن',
                'name_en' => 'at tadamon',
                'city_id' => 18,
                'neCoordinates' => '21.37501866,39.33941707',
                'swCoordinates' => '21.31936113,39.27988627',
            ),
            219 =>
            array (
                'id' => 844,
                'name_ar' => 'الكرامة',
                'name_en' => 'al karamah',
                'city_id' => 18,
                'neCoordinates' => '21.32292574,39.33404851',
                'swCoordinates' => '21.28639590,39.29718589',
            ),
            220 =>
            array (
                'id' => 845,
                'name_ar' => 'الرحمة',
                'name_en' => 'ar rahmah',
                'city_id' => 18,
                'neCoordinates' => '21.28670314,39.32617808',
                'swCoordinates' => '21.24277062,39.29718589',
            ),
            221 =>
            array (
                'id' => 846,
                'name_ar' => 'البركة',
                'name_en' => 'al barakah',
                'city_id' => 18,
                'neCoordinates' => '21.28639590,39.29767654',
                'swCoordinates' => '21.24283047,39.26304259',
            ),
            222 =>
            array (
                'id' => 847,
                'name_ar' => 'المسرة',
                'name_en' => 'al masarah',
                'city_id' => 18,
                'neCoordinates' => '21.28602767,39.26488001',
                'swCoordinates' => '21.24293462,39.23305615',
            ),
            223 =>
            array (
                'id' => 848,
                'name_ar' => 'المليساء',
                'name_en' => 'al moulysaa',
                'city_id' => 18,
                'neCoordinates' => '21.28553918,39.23364057',
                'swCoordinates' => '21.24302790,39.19337653',
            ),
            224 =>
            array (
                'id' => 849,
                'name_ar' => 'القوزين',
                'name_en' => 'al qouzeen',
                'city_id' => 18,
                'neCoordinates' => '21.28469846,39.19405598',
                'swCoordinates' => '21.24313779,39.13801764',
            ),
            225 =>
            array (
                'id' => 850,
                'name_ar' => 'الوادي',
                'name_en' => 'al wadi',
                'city_id' => 18,
                'neCoordinates' => '21.33303849,39.19337653',
                'swCoordinates' => '21.28381211,39.15311629',
            ),
            226 =>
            array (
                'id' => 851,
                'name_ar' => 'الفضيلة',
                'name_en' => 'al fadeylah',
                'city_id' => 18,
                'neCoordinates' => '21.32778979,39.29724636',
                'swCoordinates' => '21.28602743,39.26215084',
            ),
            227 =>
            array (
                'id' => 852,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawon',
                'city_id' => 18,
                'neCoordinates' => '21.37342266,39.27996684',
                'swCoordinates' => '21.32727895,39.26077713',
            ),
            228 =>
            array (
                'id' => 853,
                'name_ar' => 'السروات',
                'name_en' => 'as sarawat',
                'city_id' => 18,
                'neCoordinates' => '21.37663315,39.23732379',
                'swCoordinates' => '21.32605945,39.19279461',
            ),
            229 =>
            array (
                'id' => 854,
                'name_ar' => 'الخمرة',
                'name_en' => 'al khomrah',
                'city_id' => 18,
                'neCoordinates' => '21.37634227,39.26215084',
                'swCoordinates' => '21.32680640,39.22772442',
            ),
            230 =>
            array (
                'id' => 855,
                'name_ar' => 'الضاحية',
                'name_en' => 'ad dahiah',
                'city_id' => 18,
                'neCoordinates' => '21.33079105,39.23305615',
                'swCoordinates' => '21.28454950,39.19263735',
            ),
            231 =>
            array (
                'id' => 856,
                'name_ar' => 'القرينية',
                'name_en' => 'al qryniah',
                'city_id' => 18,
                'neCoordinates' => '21.32727895,39.26302014',
                'swCoordinates' => '21.28553918,39.23221784',
            ),
            232 =>
            array (
                'id' => 857,
                'name_ar' => 'النزلة اليمانية',
                'name_en' => 'an nazlah al yamaniyah',
                'city_id' => 18,
                'neCoordinates' => '21.48387115,39.22310302',
                'swCoordinates' => '21.45557428,39.19937869',
            ),
            233 =>
            array (
                'id' => 858,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 18,
                'neCoordinates' => '21.53166120,39.25328015',
                'swCoordinates' => '21.50892571,39.21066810',
            ),
            234 =>
            array (
                'id' => 859,
                'name_ar' => 'القريات',
                'name_en' => 'al quraiyat',
                'city_id' => 18,
                'neCoordinates' => '21.47323958,39.20835370',
                'swCoordinates' => '21.45842161,39.19319583',
            ),
            235 =>
            array (
                'id' => 860,
                'name_ar' => 'غليل',
                'name_en' => 'ghulail',
                'city_id' => 18,
                'neCoordinates' => '21.45857485,39.21757584',
                'swCoordinates' => '21.44470457,39.19873005',
            ),
            236 =>
            array (
                'id' => 861,
                'name_ar' => 'الكندرة',
                'name_en' => 'al kandarah',
                'city_id' => 18,
                'neCoordinates' => '21.50146530,39.20900588',
                'swCoordinates' => '21.48387115,39.19623901',
            ),
            237 =>
            array (
                'id' => 862,
                'name_ar' => 'العمارية',
                'name_en' => 'al ammariyah',
                'city_id' => 18,
                'neCoordinates' => '21.49597573,39.19879415',
                'swCoordinates' => '21.48749194,39.19021403',
            ),
            238 =>
            array (
                'id' => 863,
                'name_ar' => 'الصحيفة',
                'name_en' => 'as sahifah',
                'city_id' => 18,
                'neCoordinates' => '21.49112988,39.20058565',
                'swCoordinates' => '21.48435192,39.19113558',
            ),
            239 =>
            array (
                'id' => 864,
                'name_ar' => 'السبيل',
                'name_en' => 'as sabil',
                'city_id' => 18,
                'neCoordinates' => '21.48588109,39.20851707',
                'swCoordinates' => '21.47331706,39.19603582',
            ),
            240 =>
            array (
                'id' => 865,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 18,
                'neCoordinates' => '21.58067828,39.17459660',
                'swCoordinates' => '21.54790250,39.14353480',
            ),
            241 =>
            array (
                'id' => 866,
                'name_ar' => 'بنى مالك',
                'name_en' => 'bani malik',
                'city_id' => 18,
                'neCoordinates' => '21.54024746,39.24189256',
                'swCoordinates' => '21.52580184,39.19324763',
            ),
            242 =>
            array (
                'id' => 867,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 18,
                'neCoordinates' => '21.58692970,39.20293977',
                'swCoordinates' => '21.55554015,39.16620961',
            ),
            243 =>
            array (
                'id' => 868,
                'name_ar' => 'الرحاب',
                'name_en' => 'ar rihab',
                'city_id' => 18,
                'neCoordinates' => '21.56765383,39.23921211',
                'swCoordinates' => '21.53637438,39.21280147',
            ),
            244 =>
            array (
                'id' => 869,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 18,
                'neCoordinates' => '21.56384284,39.21613464',
                'swCoordinates' => '21.54139388,39.17459660',
            ),
            245 =>
            array (
                'id' => 870,
                'name_ar' => 'مشرفة',
                'name_en' => 'mishrifah',
                'city_id' => 18,
                'neCoordinates' => '21.54841841,39.21871208',
                'swCoordinates' => '21.52908953,39.17767841',
            ),
            246 =>
            array (
                'id' => 871,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 18,
                'neCoordinates' => '21.52642894,39.21817551',
                'swCoordinates' => '21.51057991,39.19339855',
            ),
            247 =>
            array (
                'id' => 872,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 18,
                'neCoordinates' => '21.57257195,39.25855909',
                'swCoordinates' => '21.54024746,39.23192018',
            ),
            248 =>
            array (
                'id' => 873,
                'name_ar' => 'ابرق الرغامة',
                'name_en' => 'abruq ar rughamah',
                'city_id' => 18,
                'neCoordinates' => '21.52156984,39.32270712',
                'swCoordinates' => '21.48173592,39.25328015',
            ),
            249 =>
            array (
                'id' => 874,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 18,
                'neCoordinates' => '21.51197225,39.26082338',
                'swCoordinates' => '21.50144207,39.24032631',
            ),
            250 =>
            array (
                'id' => 875,
                'name_ar' => 'الساحل',
                'name_en' => 'as sahil',
                'city_id' => 18,
                'neCoordinates' => '21.33560498,39.15559065',
                'swCoordinates' => '21.24955153,39.10418834',
            ),
            251 =>
            array (
                'id' => 876,
                'name_ar' => 'البشائر',
                'name_en' => 'al bashaer',
                'city_id' => 18,
                'neCoordinates' => '21.82848579,39.19937472',
                'swCoordinates' => '21.78314204,39.15506198',
            ),
            252 =>
            array (
                'id' => 877,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 18,
                'neCoordinates' => '21.67060671,39.14499270',
                'swCoordinates' => '21.62843445,39.11163681',
            ),
            253 =>
            array (
                'id' => 878,
                'name_ar' => 'الكوثر',
                'name_en' => 'al kawthar',
                'city_id' => 18,
                'neCoordinates' => '21.74450828,39.22269967',
                'swCoordinates' => '21.70849172,39.19003302',
            ),
            254 =>
            array (
                'id' => 879,
                'name_ar' => 'طيبة',
                'name_en' => 'taibah',
                'city_id' => 18,
                'neCoordinates' => '21.82618089,39.16004415',
                'swCoordinates' => '21.78521375,39.11660309',
            ),
            255 =>
            array (
                'id' => 880,
                'name_ar' => 'النعيم',
                'name_en' => 'an naim',
                'city_id' => 18,
                'neCoordinates' => '21.64436420,39.15639298',
                'swCoordinates' => '21.61055414,39.13132919',
            ),
            256 =>
            array (
                'id' => 881,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 18,
                'neCoordinates' => '21.70873208,39.12969066',
                'swCoordinates' => '21.66437556,39.10758317',
            ),
            257 =>
            array (
                'id' => 882,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 18,
                'neCoordinates' => '21.61937183,39.19933775',
                'swCoordinates' => '21.57926224,39.16773946',
            ),
            258 =>
            array (
                'id' => 883,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 18,
                'neCoordinates' => '21.63776281,39.18672865',
                'swCoordinates' => '21.61359833,39.15176137',
            ),
            259 =>
            array (
                'id' => 884,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 18,
                'neCoordinates' => '21.60792533,39.23192018',
                'swCoordinates' => '21.56193480,39.19311365',
            ),
            260 =>
            array (
                'id' => 885,
                'name_ar' => 'المروة',
                'name_en' => 'al marwah',
                'city_id' => 18,
                'neCoordinates' => '21.63523317,39.22201930',
                'swCoordinates' => '21.59950489,39.18296135',
            ),
            261 =>
            array (
                'id' => 886,
                'name_ar' => 'السامر',
                'name_en' => 'as samir',
                'city_id' => 18,
                'neCoordinates' => '21.59611493,39.26769486',
                'swCoordinates' => '21.56765383,39.22797593',
            ),
            262 =>
            array (
                'id' => 887,
                'name_ar' => 'الاجواد',
                'name_en' => 'al ajwad',
                'city_id' => 18,
                'neCoordinates' => '21.61520937,39.27075012',
                'swCoordinates' => '21.58802559,39.24536941',
            ),
            263 =>
            array (
                'id' => 888,
                'name_ar' => 'مطار الملك عبدالعزيز الدولي',
                'name_en' => 'king abdul aziz international airport',
                'city_id' => 18,
                'neCoordinates' => '21.77384413,39.21175055',
                'swCoordinates' => '21.63094616,39.11537304',
            ),
            264 =>
            array (
                'id' => 889,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 18,
                'neCoordinates' => '21.61398388,39.25062661',
                'swCoordinates' => '21.59000347,39.22201930',
            ),
            265 =>
            array (
                'id' => 890,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 18,
                'neCoordinates' => '21.42908854,39.26077713',
                'swCoordinates' => '21.37342266,39.21149245',
            ),
            266 =>
            array (
                'id' => 891,
                'name_ar' => 'الامير عبدالمجيد',
                'name_en' => 'al amir abdoulmajed',
                'city_id' => 18,
                'neCoordinates' => '21.44606095,39.29540457',
                'swCoordinates' => '21.39980183,39.25554147',
            ),
            267 =>
            array (
                'id' => 892,
                'name_ar' => 'الوزيريه',
                'name_en' => 'al waziriyah',
                'city_id' => 18,
                'neCoordinates' => '21.45557428,39.25606022',
                'swCoordinates' => '21.43105609,39.21173424',
            ),
            268 =>
            array (
                'id' => 893,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 18,
                'neCoordinates' => '21.44896791,39.27002490',
                'swCoordinates' => '21.40843707,39.23330791',
            ),
            269 =>
            array (
                'id' => 894,
                'name_ar' => 'الامير فواز الجنوبى',
                'name_en' => 'al amir fawaz al janouby',
                'city_id' => 18,
                'neCoordinates' => '21.44428847,39.31044840',
                'swCoordinates' => '21.41666963,39.27265884',
            ),
            270 =>
            array (
                'id' => 895,
                'name_ar' => 'المتنزهات',
                'name_en' => 'al mutanazahat',
                'city_id' => 18,
                'neCoordinates' => '21.48833429,39.31033877',
                'swCoordinates' => '21.44641597,39.26910998',
            ),
            271 =>
            array (
                'id' => 896,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 18,
                'neCoordinates' => '21.48715228,39.26368878',
                'swCoordinates' => '21.46012282,39.23812689',
            ),
            272 =>
            array (
                'id' => 897,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 18,
                'neCoordinates' => '21.48833429,39.28003897',
                'swCoordinates' => '21.45225013,39.26109653',
            ),
            273 =>
            array (
                'id' => 898,
                'name_ar' => 'الفضل',
                'name_en' => 'al fadel',
                'city_id' => 18,
                'neCoordinates' => '21.44939341,39.34993726',
                'swCoordinates' => '21.41494982,39.30460700',
            ),
            274 =>
            array (
                'id' => 899,
                'name_ar' => 'ام السلم',
                'name_en' => 'um asalam',
                'city_id' => 18,
                'neCoordinates' => '21.48321247,39.34566186',
                'swCoordinates' => '21.43794935,39.30621519',
            ),
            275 =>
            array (
                'id' => 900,
                'name_ar' => 'مدينة الملك عبدالعزيز الطبية',
                'name_en' => 'king abdul aziz medical city',
                'city_id' => 18,
                'neCoordinates' => '21.43246704,39.37259462',
                'swCoordinates' => '21.40797392,39.35742579',
            ),
            276 =>
            array (
                'id' => 901,
                'name_ar' => 'البغدادية الغربية',
                'name_en' => 'al baghdadiyah al gharbiyah',
                'city_id' => 18,
                'neCoordinates' => '21.51027929,39.18759770',
                'swCoordinates' => '21.48622996,39.16450439',
            ),
            277 =>
            array (
                'id' => 902,
                'name_ar' => 'ابحر الشمالية',
                'name_en' => 'abhur ash shamaliyah',
                'city_id' => 18,
                'neCoordinates' => '21.78340508,39.14871744',
                'swCoordinates' => '21.70679705,39.06855972',
            ),
            278 =>
            array (
                'id' => 903,
                'name_ar' => 'الرويس',
                'name_en' => 'ar ruwais',
                'city_id' => 18,
                'neCoordinates' => '21.52908953,39.18300505',
                'swCoordinates' => '21.49845645,39.16013318',
            ),
            279 =>
            array (
                'id' => 904,
                'name_ar' => 'بترومين',
                'name_en' => 'petromin',
                'city_id' => 18,
                'neCoordinates' => '21.46083962,39.20594801',
                'swCoordinates' => '21.42779890,39.15420702',
            ),
            280 =>
            array (
                'id' => 905,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 18,
                'neCoordinates' => '21.55554015,39.17766039',
                'swCoordinates' => '21.50643889,39.11281590',
            ),
            281 =>
            array (
                'id' => 906,
                'name_ar' => 'ابحر الجنوبية',
                'name_en' => 'abhur al janubiyah',
                'city_id' => 18,
                'neCoordinates' => '21.77187384,39.15106167',
                'swCoordinates' => '21.69943292,39.09726161',
            ),
            282 =>
            array (
                'id' => 907,
                'name_ar' => 'المرجان',
                'name_en' => 'al murjan',
                'city_id' => 18,
                'neCoordinates' => '21.71049442,39.11163681',
                'swCoordinates' => '21.65958787,39.08679573',
            ),
            283 =>
            array (
                'id' => 908,
                'name_ar' => 'السرورية',
                'name_en' => 'as sororyah',
                'city_id' => 18,
                'neCoordinates' => '21.41201673,39.23154024',
                'swCoordinates' => '21.37447439,39.19740432',
            ),
            284 =>
            array (
                'id' => 909,
                'name_ar' => 'الاجاويد',
                'name_en' => 'al ajaweed',
                'city_id' => 18,
                'neCoordinates' => '21.42543975,39.33349217',
                'swCoordinates' => '21.37524409,39.28335787',
            ),
            285 =>
            array (
                'id' => 910,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 18,
                'neCoordinates' => '21.66437556,39.13030114',
                'swCoordinates' => '21.54424588,39.09737225',
            ),
            286 =>
            array (
                'id' => 911,
                'name_ar' => 'مدائن الفهد',
                'name_en' => 'madain al fahd',
                'city_id' => 18,
                'neCoordinates' => '21.47416973,39.26116279',
                'swCoordinates' => '21.44896791,39.21757584',
            ),
            287 =>
            array (
                'id' => 912,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 18,
                'neCoordinates' => '21.61055414,39.14516084',
                'swCoordinates' => '21.57180353,39.12179449',
            ),
            288 =>
            array (
                'id' => 913,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 18,
                'neCoordinates' => '21.54147689,39.18032583',
                'swCoordinates' => '21.50850532,39.15054346',
            ),
            289 =>
            array (
                'id' => 914,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 18,
                'neCoordinates' => '21.51147070,39.24046589',
                'swCoordinates' => '21.48172668,39.19406099',
            ),
            290 =>
            array (
                'id' => 915,
                'name_ar' => 'حطين',
                'name_en' => 'hteen',
                'city_id' => 80,
                'neCoordinates' => '26.05810797,44.05777112',
                'swCoordinates' => '26.02441215,44.01722025',
            ),
            291 =>
            array (
                'id' => 916,
                'name_ar' => 'سنام',
                'name_en' => 'snam',
                'city_id' => 80,
                'neCoordinates' => '26.05222676,44.03425845',
                'swCoordinates' => '26.01609627,44.00458634',
            ),
            292 =>
            array (
                'id' => 917,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 80,
                'neCoordinates' => '26.04840108,44.01524633',
                'swCoordinates' => '26.01500140,43.98200172',
            ),
            293 =>
            array (
                'id' => 918,
                'name_ar' => 'الدوحة',
                'name_en' => 'ad dawhah',
                'city_id' => 80,
                'neCoordinates' => '26.05054241,43.98626976',
                'swCoordinates' => '26.02775490,43.97021139',
            ),
            294 =>
            array (
                'id' => 919,
                'name_ar' => 'الحاجب',
                'name_en' => 'al hajeb',
                'city_id' => 80,
                'neCoordinates' => '26.04629868,43.97030046',
                'swCoordinates' => '26.02729614,43.94991669',
            ),
            295 =>
            array (
                'id' => 920,
                'name_ar' => 'الرمال',
                'name_en' => 'ar rimal',
                'city_id' => 80,
                'neCoordinates' => '26.06888169,43.95636557',
                'swCoordinates' => '26.04072346,43.93101377',
            ),
            296 =>
            array (
                'id' => 921,
                'name_ar' => 'الحفيرة',
                'name_en' => 'al hufayrah',
                'city_id' => 80,
                'neCoordinates' => '26.09159045,43.94160701',
                'swCoordinates' => '26.05751514,43.90431481',
            ),
            297 =>
            array (
                'id' => 922,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 80,
                'neCoordinates' => '26.10236092,44.08106411',
                'swCoordinates' => '26.07102934,44.05306416',
            ),
            298 =>
            array (
                'id' => 923,
                'name_ar' => 'الملك خالد',
                'name_en' => 'king khalid',
                'city_id' => 80,
                'neCoordinates' => '26.09814232,44.05307956',
                'swCoordinates' => '26.07487000,44.02811672',
            ),
            299 =>
            array (
                'id' => 924,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 80,
                'neCoordinates' => '26.11768396,44.05592196',
                'swCoordinates' => '26.09273207,44.02382655',
            ),
            300 =>
            array (
                'id' => 925,
                'name_ar' => 'الرياضى',
                'name_en' => 'ar riyadi',
                'city_id' => 80,
                'neCoordinates' => '26.10798120,44.07012760',
                'swCoordinates' => '26.08167147,44.04599040',
            ),
            301 =>
            array (
                'id' => 926,
                'name_ar' => 'القيروان',
                'name_en' => 'al qirawan',
                'city_id' => 80,
                'neCoordinates' => '26.07210548,44.06216258',
                'swCoordinates' => '26.05804189,44.03923033',
            ),
            302 =>
            array (
                'id' => 927,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 80,
                'neCoordinates' => '26.06748506,44.04352846',
                'swCoordinates' => '26.05398852,44.02492519',
            ),
            303 =>
            array (
                'id' => 928,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 80,
                'neCoordinates' => '26.06421919,44.02863339',
                'swCoordinates' => '26.05094394,44.00881235',
            ),
            304 =>
            array (
                'id' => 929,
                'name_ar' => 'العقيق',
                'name_en' => 'al aqiq',
                'city_id' => 80,
                'neCoordinates' => '26.06315034,44.01722025',
                'swCoordinates' => '26.04830025,43.99704757',
            ),
            305 =>
            array (
                'id' => 930,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 80,
                'neCoordinates' => '26.08569979,44.00997975',
                'swCoordinates' => '26.07286194,43.99148512',
            ),
            306 =>
            array (
                'id' => 931,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 80,
                'neCoordinates' => '26.09183627,44.00353454',
                'swCoordinates' => '26.08162792,43.98841601',
            ),
            307 =>
            array (
                'id' => 932,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 80,
                'neCoordinates' => '26.09278435,44.01902143',
                'swCoordinates' => '26.07975830,43.99850066',
            ),
            308 =>
            array (
                'id' => 933,
                'name_ar' => 'الوسطى',
                'name_en' => 'al wusta',
                'city_id' => 80,
                'neCoordinates' => '26.08297870,44.01910120',
                'swCoordinates' => '26.07272886,44.00727447',
            ),
            309 =>
            array (
                'id' => 934,
                'name_ar' => 'المنطقة الصناعية الثانية',
                'name_en' => 'industrial area no2 district',
                'city_id' => 80,
                'neCoordinates' => '26.08353962,44.02720080',
                'swCoordinates' => '26.07272886,44.01890612',
            ),
            310 =>
            array (
                'id' => 935,
                'name_ar' => 'المنطقة الصناعية الاولى',
                'name_en' => 'industrial area no1 district',
                'city_id' => 80,
                'neCoordinates' => '26.09185663,44.02582788',
                'swCoordinates' => '26.08297870,44.01698948',
            ),
            311 =>
            array (
                'id' => 936,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 80,
                'neCoordinates' => '26.09270421,44.03238257',
                'swCoordinates' => '26.08242103,44.02286273',
            ),
            312 =>
            array (
                'id' => 937,
                'name_ar' => 'المستودعات',
                'name_en' => 'warehouse',
                'city_id' => 80,
                'neCoordinates' => '26.08331359,44.03596007',
                'swCoordinates' => '26.07376287,44.02582788',
            ),
            313 =>
            array (
                'id' => 938,
                'name_ar' => 'الهداء',
                'name_en' => 'al hadaa',
                'city_id' => 80,
                'neCoordinates' => '26.10056902,43.99867094',
                'swCoordinates' => '26.09025323,43.98594772',
            ),
            314 =>
            array (
                'id' => 939,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 80,
                'neCoordinates' => '26.10587969,43.99917494',
                'swCoordinates' => '26.09703434,43.98406691',
            ),
            315 =>
            array (
                'id' => 940,
                'name_ar' => 'المنتزة',
                'name_en' => 'al muntazah',
                'city_id' => 80,
                'neCoordinates' => '26.11879023,43.99934664',
                'swCoordinates' => '26.10501363,43.98420484',
            ),
            316 =>
            array (
                'id' => 941,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 80,
                'neCoordinates' => '26.12109889,43.98500626',
                'swCoordinates' => '26.10610978,43.96966580',
            ),
            317 =>
            array (
                'id' => 942,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 80,
                'neCoordinates' => '26.12517345,43.97701440',
                'swCoordinates' => '26.10691671,43.95908278',
            ),
            318 =>
            array (
                'id' => 943,
                'name_ar' => 'الرحمانية',
                'name_en' => 'ar rahmaniyah',
                'city_id' => 80,
                'neCoordinates' => '26.14112148,43.95941345',
                'swCoordinates' => '26.11154395,43.93918574',
            ),
            319 =>
            array (
                'id' => 944,
                'name_ar' => 'دمشية',
                'name_en' => 'damshiah',
                'city_id' => 80,
                'neCoordinates' => '26.13518576,43.94594705',
                'swCoordinates' => '26.11148316,43.90308394',
            ),
            320 =>
            array (
                'id' => 945,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 80,
                'neCoordinates' => '26.11577840,43.94500081',
                'swCoordinates' => '26.08979247,43.92286362',
            ),
            321 =>
            array (
                'id' => 946,
                'name_ar' => 'العبسة',
                'name_en' => 'al absiah',
                'city_id' => 80,
                'neCoordinates' => '26.15638503,43.95813575',
                'swCoordinates' => '26.12326624,43.89145646',
            ),
            322 =>
            array (
                'id' => 947,
                'name_ar' => 'بدر',
                'name_en' => 'badr',
                'city_id' => 80,
                'neCoordinates' => '26.14308936,43.90860315',
                'swCoordinates' => '26.10760749,43.87825724',
            ),
            323 =>
            array (
                'id' => 948,
                'name_ar' => 'الوهلان',
                'name_en' => 'al wahlan',
                'city_id' => 80,
                'neCoordinates' => '26.11781004,43.93063117',
                'swCoordinates' => '26.08873535,43.89194928',
            ),
            324 =>
            array (
                'id' => 949,
                'name_ar' => 'مليحة',
                'name_en' => 'mlihah',
                'city_id' => 80,
                'neCoordinates' => '26.10625750,43.95999566',
                'swCoordinates' => '26.08641532,43.94196680',
            ),
            325 =>
            array (
                'id' => 950,
                'name_ar' => 'مربيدة',
                'name_en' => 'marbidah',
                'city_id' => 80,
                'neCoordinates' => '26.10165800,43.97854523',
                'swCoordinates' => '26.08613640,43.95964637',
            ),
            326 =>
            array (
                'id' => 951,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 80,
                'neCoordinates' => '26.11154395,43.96624150',
                'swCoordinates' => '26.09980136,43.95941345',
            ),
            327 =>
            array (
                'id' => 952,
                'name_ar' => 'وسط المدينة',
                'name_en' => 'down town',
                'city_id' => 80,
                'neCoordinates' => '26.10860861,43.99018595',
                'swCoordinates' => '26.08423961,43.96318606',
            ),
            328 =>
            array (
                'id' => 953,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayan',
                'city_id' => 80,
                'neCoordinates' => '26.08618891,43.99254466',
                'swCoordinates' => '26.07475500,43.97596939',
            ),
            329 =>
            array (
                'id' => 954,
                'name_ar' => 'الفاخرية',
                'name_en' => 'al fakhriyah',
                'city_id' => 80,
                'neCoordinates' => '26.07875177,43.99704757',
                'swCoordinates' => '26.06061493,43.97354036',
            ),
            330 =>
            array (
                'id' => 955,
                'name_ar' => 'النقيلية',
                'name_en' => 'an nuqailiah',
                'city_id' => 80,
                'neCoordinates' => '26.06469750,43.98240528',
                'swCoordinates' => '26.05054241,43.97003248',
            ),
            331 =>
            array (
                'id' => 956,
                'name_ar' => 'السحيمية',
                'name_en' => 'as suhaymiyyah',
                'city_id' => 80,
                'neCoordinates' => '26.07775259,43.97569933',
                'swCoordinates' => '26.06469750,43.95962264',
            ),
            332 =>
            array (
                'id' => 957,
                'name_ar' => 'البديعة',
                'name_en' => 'al badiah',
                'city_id' => 80,
                'neCoordinates' => '26.08641532,43.97696382',
                'swCoordinates' => '26.07429863,43.95999566',
            ),
            333 =>
            array (
                'id' => 958,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 80,
                'neCoordinates' => '26.08979247,43.96023822',
                'swCoordinates' => '26.07068161,43.94109295',
            ),
            334 =>
            array (
                'id' => 959,
                'name_ar' => 'اشبيلية',
                'name_en' => 'ishbiliyah',
                'city_id' => 80,
                'neCoordinates' => '26.08297242,43.94963069',
                'swCoordinates' => '26.06787288,43.92977429',
            ),
            335 =>
            array (
                'id' => 960,
                'name_ar' => 'العونية',
                'name_en' => 'al awniyah',
                'city_id' => 80,
                'neCoordinates' => '26.09177514,43.94204174',
                'swCoordinates' => '26.07734864,43.92374892',
            ),
            336 =>
            array (
                'id' => 961,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 80,
                'neCoordinates' => '26.03390342,43.98619289',
                'swCoordinates' => '26.01668874,43.96495525',
            ),
            337 =>
            array (
                'id' => 962,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 80,
                'neCoordinates' => '26.05611496,44.00500664',
                'swCoordinates' => '26.04658874,43.98626976',
            ),
            338 =>
            array (
                'id' => 963,
                'name_ar' => 'الذهبي',
                'name_en' => 'ad dahbi',
                'city_id' => 80,
                'neCoordinates' => '26.06187846,43.99069741',
                'swCoordinates' => '26.04840108,43.97723547',
            ),
            339 =>
            array (
                'id' => 964,
                'name_ar' => 'الجامعي',
                'name_en' => 'al jamai',
                'city_id' => 80,
                'neCoordinates' => '26.12423972,44.08259060',
                'swCoordinates' => '26.09948899,44.05580273',
            ),
            340 =>
            array (
                'id' => 965,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 80,
                'neCoordinates' => '26.14204263,44.02780443',
                'swCoordinates' => '26.11486345,43.99917410',
            ),
            341 =>
            array (
                'id' => 966,
                'name_ar' => 'اليمامة',
                'name_en' => 'al yamamah',
                'city_id' => 80,
                'neCoordinates' => '26.11659567,44.02442196',
                'swCoordinates' => '26.10574105,44.00733732',
            ),
            342 =>
            array (
                'id' => 967,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 80,
                'neCoordinates' => '26.11739020,44.01239134',
                'swCoordinates' => '26.10562513,43.99917494',
            ),
            343 =>
            array (
                'id' => 968,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 80,
                'neCoordinates' => '26.10582862,44.02828188',
                'swCoordinates' => '26.09152511,44.01231626',
            ),
            344 =>
            array (
                'id' => 969,
                'name_ar' => 'الاشرفية',
                'name_en' => 'al ashrafiyah',
                'city_id' => 80,
                'neCoordinates' => '26.10574041,44.01239394',
                'swCoordinates' => '26.09183627,43.99812738',
            ),
            345 =>
            array (
                'id' => 970,
                'name_ar' => 'الخزامي',
                'name_en' => 'al kuzami',
                'city_id' => 80,
                'neCoordinates' => '26.14357893,44.00359988',
                'swCoordinates' => '26.11740683,43.98500626',
            ),
            346 =>
            array (
                'id' => 971,
                'name_ar' => 'الروغاني',
                'name_en' => 'ar rawghani',
                'city_id' => 80,
                'neCoordinates' => '26.16246189,43.99329194',
                'swCoordinates' => '26.11879023,43.95531520',
            ),
            347 =>
            array (
                'id' => 972,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 80,
                'neCoordinates' => '26.17173679,44.03622364',
                'swCoordinates' => '26.15450682,44.00639333',
            ),
            348 =>
            array (
                'id' => 973,
                'name_ar' => 'الصفراء',
                'name_en' => 'as safraa',
                'city_id' => 80,
                'neCoordinates' => '26.21769168,44.08661640',
                'swCoordinates' => '26.17084444,44.03622510',
            ),
            349 =>
            array (
                'id' => 974,
                'name_ar' => 'المباركية',
                'name_en' => 'al mubarkiah',
                'city_id' => 80,
                'neCoordinates' => '26.19398065,43.92884857',
                'swCoordinates' => '26.14381234,43.86869986',
            ),
            350 =>
            array (
                'id' => 975,
                'name_ar' => 'المدوية',
                'name_en' => 'al mudwiah',
                'city_id' => 80,
                'neCoordinates' => '26.18891471,43.89186065',
                'swCoordinates' => '26.12805199,43.83459930',
            ),
            351 =>
            array (
                'id' => 976,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 80,
                'neCoordinates' => '26.21542137,44.13007851',
                'swCoordinates' => '26.14152099,44.07970875',
            ),
            352 =>
            array (
                'id' => 977,
                'name_ar' => 'النظيم',
                'name_en' => 'an nazim',
                'city_id' => 80,
                'neCoordinates' => '26.14614002,44.13055978',
                'swCoordinates' => '26.09872650,44.06628451',
            ),
            353 =>
            array (
                'id' => 978,
                'name_ar' => 'التحلية',
                'name_en' => 'at tahliyah',
                'city_id' => 80,
                'neCoordinates' => '26.07183738,44.07604682',
                'swCoordinates' => '26.05826418,44.05755909',
            ),
            354 =>
            array (
                'id' => 979,
                'name_ar' => 'الجزيرة',
                'name_en' => 'al jazirah',
                'city_id' => 80,
                'neCoordinates' => '26.06051519,44.06996868',
                'swCoordinates' => '26.04265443,44.04383189',
            ),
            355 =>
            array (
                'id' => 980,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 80,
                'neCoordinates' => '26.07487000,44.03923033',
                'swCoordinates' => '26.06421919,44.02340647',
            ),
            356 =>
            array (
                'id' => 981,
                'name_ar' => 'الوفاء',
                'name_en' => 'al wafa',
                'city_id' => 80,
                'neCoordinates' => '26.07330035,44.02492519',
                'swCoordinates' => '26.06315034,44.00964171',
            ),
            357 =>
            array (
                'id' => 982,
                'name_ar' => 'الزاهر',
                'name_en' => 'az zahir',
                'city_id' => 80,
                'neCoordinates' => '26.07474912,44.01068971',
                'swCoordinates' => '26.06217785,43.99364535',
            ),
            358 =>
            array (
                'id' => 983,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 80,
                'neCoordinates' => '26.11756721,44.13125573',
                'swCoordinates' => '26.00475101,44.05792130',
            ),
            359 =>
            array (
                'id' => 984,
                'name_ar' => 'سوق الماشية',
                'name_en' => 'suq al mashiya',
                'city_id' => 80,
                'neCoordinates' => '26.02729614,43.97301922',
                'swCoordinates' => '25.99357821,43.92351682',
            ),
            360 =>
            array (
                'id' => 985,
                'name_ar' => 'الجلده',
                'name_en' => 'al jaldah',
                'city_id' => 80,
                'neCoordinates' => '26.02138513,44.02933716',
                'swCoordinates' => '25.99388012,43.96487455',
            ),
            361 =>
            array (
                'id' => 986,
                'name_ar' => 'الندى',
                'name_en' => 'an nada',
                'city_id' => 80,
                'neCoordinates' => '26.06694136,43.94991669',
                'swCoordinates' => '25.99330282,43.88713169',
            ),
            362 =>
            array (
                'id' => 987,
                'name_ar' => 'ربوة الحاجب',
                'name_en' => 'rabwat al hajeb',
                'city_id' => 80,
                'neCoordinates' => '26.04072346,43.96495525',
                'swCoordinates' => '25.99353987,43.91819988',
            ),
            363 =>
            array (
                'id' => 988,
                'name_ar' => 'الغضا',
                'name_en' => 'al kada',
                'city_id' => 80,
                'neCoordinates' => '26.08874682,43.92122658',
                'swCoordinates' => '25.99290364,43.83557915',
            ),
            364 =>
            array (
                'id' => 989,
                'name_ar' => 'الشعيب',
                'name_en' => 'ash shuaib',
                'city_id' => 80,
                'neCoordinates' => '26.17324666,43.90423360',
                'swCoordinates' => '26.07700551,43.83462461',
            ),
            365 =>
            array (
                'id' => 990,
                'name_ar' => 'البويطن',
                'name_en' => 'al buaiten',
                'city_id' => 80,
                'neCoordinates' => '26.17173710,44.00788052',
                'swCoordinates' => '26.15551341,43.98800325',
            ),
            366 =>
            array (
                'id' => 991,
                'name_ar' => 'النرجس',
                'name_en' => 'an narjis',
                'city_id' => 80,
                'neCoordinates' => '26.15601083,44.00605051',
                'swCoordinates' => '26.14203160,43.98861538',
            ),
            367 =>
            array (
                'id' => 992,
                'name_ar' => 'عكاظ',
                'name_en' => 'uqaz',
                'city_id' => 80,
                'neCoordinates' => '26.21705344,44.05208361',
                'swCoordinates' => '26.17136223,43.98668982',
            ),
            368 =>
            array (
                'id' => 993,
                'name_ar' => 'النفود',
                'name_en' => 'an nofoad',
                'city_id' => 80,
                'neCoordinates' => '26.20565302,43.95619940',
                'swCoordinates' => '26.15305135,43.88340385',
            ),
            369 =>
            array (
                'id' => 994,
                'name_ar' => 'الوادي',
                'name_en' => 'al wadi',
                'city_id' => 80,
                'neCoordinates' => '26.21463335,44.03338464',
                'swCoordinates' => '26.15232303,43.94365575',
            ),
            370 =>
            array (
                'id' => 995,
                'name_ar' => 'القصور',
                'name_en' => 'al qusor',
                'city_id' => 80,
                'neCoordinates' => '26.07567382,43.96017757',
                'swCoordinates' => '26.05989456,43.94271366',
            ),
            371 =>
            array (
                'id' => 996,
                'name_ar' => 'الحديقة',
                'name_en' => 'al hadiqah',
                'city_id' => 80,
                'neCoordinates' => '26.05882467,43.97723547',
                'swCoordinates' => '26.03396236,43.95280015',
            ),
            372 =>
            array (
                'id' => 997,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 80,
                'neCoordinates' => '26.11464082,43.95971395',
                'swCoordinates' => '26.09859857,43.94488596',
            ),
            373 =>
            array (
                'id' => 998,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 80,
                'neCoordinates' => '26.06734570,43.97478947',
                'swCoordinates' => '26.05370116,43.95575080',
            ),
            374 =>
            array (
                'id' => 999,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 80,
                'neCoordinates' => '26.06217785,43.99950809',
                'swCoordinates' => '26.05115234,43.98712487',
            ),
            375 =>
            array (
                'id' => 1000,
                'name_ar' => 'الثقافة',
                'name_en' => 'athaqafah',
                'city_id' => 80,
                'neCoordinates' => '26.13863959,44.06635600',
                'swCoordinates' => '26.10822051,44.02442196',
            ),
            376 =>
            array (
                'id' => 1001,
                'name_ar' => 'المروة',
                'name_en' => 'al marwah',
                'city_id' => 80,
                'neCoordinates' => '26.15392746,44.08364939',
                'swCoordinates' => '26.12427105,44.02761978',
            ),
            377 =>
            array (
                'id' => 1002,
                'name_ar' => 'الفخامة',
                'name_en' => 'al fakamah',
                'city_id' => 80,
                'neCoordinates' => '26.15554613,44.03050434',
                'swCoordinates' => '26.13866649,44.00369770',
            ),
            378 =>
            array (
                'id' => 1003,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 80,
                'neCoordinates' => '26.17136223,44.08661697',
                'swCoordinates' => '26.14083291,44.03036168',
            ),
            379 =>
            array (
                'id' => 1004,
                'name_ar' => 'الزغيبة',
                'name_en' => 'az zugaibah',
                'city_id' => 80,
                'neCoordinates' => '26.16439393,44.13035254',
                'swCoordinates' => '26.12711397,44.09284720',
            ),
            380 =>
            array (
                'id' => 1005,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 80,
                'neCoordinates' => '26.08166535,44.05730352',
                'swCoordinates' => '26.06748506,44.03596007',
            ),
            381 =>
            array (
                'id' => 1006,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 80,
                'neCoordinates' => '26.04280659,44.13132763',
                'swCoordinates' => '25.99432711,44.01650947',
            ),
            382 =>
            array (
                'id' => 1007,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salihiyah',
                'city_id' => 2213,
                'neCoordinates' => '30.98682336,41.05956817',
                'swCoordinates' => '30.96931215,41.04012145',
            ),
            383 =>
            array (
                'id' => 1008,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faysaliyah',
                'city_id' => 2213,
                'neCoordinates' => '30.99194514,41.04785686',
                'swCoordinates' => '30.97507154,41.02999903',
            ),
            384 =>
            array (
                'id' => 1009,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 2213,
                'neCoordinates' => '30.99723855,41.03780232',
                'swCoordinates' => '30.98007175,41.02176692',
            ),
            385 =>
            array (
                'id' => 1010,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasriyah',
                'city_id' => 2213,
                'neCoordinates' => '30.97507154,41.05178663',
                'swCoordinates' => '30.95076546,41.02597638',
            ),
            386 =>
            array (
                'id' => 1011,
                'name_ar' => 'الربوه',
                'name_en' => 'ar rabwah',
                'city_id' => 2213,
                'neCoordinates' => '31.01621566,41.06138496',
                'swCoordinates' => '30.98682336,41.03542592',
            ),
            387 =>
            array (
                'id' => 1012,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 2213,
                'neCoordinates' => '30.99710004,41.02875983',
                'swCoordinates' => '30.98314298,41.01266163',
            ),
            388 =>
            array (
                'id' => 1013,
                'name_ar' => 'بدنة',
                'name_en' => 'badanah',
                'city_id' => 2213,
                'neCoordinates' => '30.99763457,41.01415536',
                'swCoordinates' => '30.98707632,40.99307036',
            ),
            389 =>
            array (
                'id' => 1014,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 2213,
                'neCoordinates' => '30.98007175,41.04012145',
                'swCoordinates' => '30.97005777,41.02616464',
            ),
            390 =>
            array (
                'id' => 1015,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 2213,
                'neCoordinates' => '30.97490179,41.03269084',
                'swCoordinates' => '30.96081192,41.01755559',
            ),
            391 =>
            array (
                'id' => 1016,
                'name_ar' => 'المساعدية',
                'name_en' => 'al musaidiyah',
                'city_id' => 2213,
                'neCoordinates' => '30.97692635,41.02276081',
                'swCoordinates' => '30.96483321,40.99894865',
            ),
            392 =>
            array (
                'id' => 1017,
                'name_ar' => 'مشرف',
                'name_en' => 'mushrif',
                'city_id' => 2213,
                'neCoordinates' => '30.97151689,41.01609484',
                'swCoordinates' => '30.96105536,40.99766048',
            ),
            393 =>
            array (
                'id' => 1018,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2213,
                'neCoordinates' => '30.98314490,41.02999903',
                'swCoordinates' => '30.97308670,41.01663744',
            ),
            394 =>
            array (
                'id' => 1019,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 2213,
                'neCoordinates' => '30.98707632,41.02176810',
                'swCoordinates' => '30.97486189,41.00684342',
            ),
            395 =>
            array (
                'id' => 1020,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 2213,
                'neCoordinates' => '30.99323355,41.01266163',
                'swCoordinates' => '30.97267060,40.97771892',
            ),
            396 =>
            array (
                'id' => 1021,
                'name_ar' => 'مزهرة',
                'name_en' => 'mizhirah',
                'city_id' => 17,
                'neCoordinates' => '16.83040974,42.74164880',
                'swCoordinates' => '16.82215271,42.72876567',
            ),
            397 =>
            array (
                'id' => 1022,
                'name_ar' => 'بحرة',
                'name_en' => 'bahrah',
                'city_id' => 18,
                'neCoordinates' => '21.44338185,39.52879650',
                'swCoordinates' => '21.37395248,39.40877704',
            ),
            398 =>
            array (
                'id' => 1023,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 3347,
                'neCoordinates' => '17.49294001,47.12378376',
                'swCoordinates' => '17.48533621,47.11124966',
            ),
            399 =>
            array (
                'id' => 1024,
                'name_ar' => 'السوق',
                'name_en' => 'as suq',
                'city_id' => 3347,
                'neCoordinates' => '17.49313265,47.11489529',
                'swCoordinates' => '17.48137061,47.10824197',
            ),
            400 =>
            array (
                'id' => 1025,
                'name_ar' => 'جنوب المستشفى العسكري',
                'name_en' => 'janub al mustashfa al askari',
                'city_id' => 3347,
                'neCoordinates' => '17.47744064,47.10968403',
                'swCoordinates' => '17.47406659,47.09699296',
            ),
            401 =>
            array (
                'id' => 1026,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 3347,
                'neCoordinates' => '17.48226104,47.11696763',
                'swCoordinates' => '17.47544015,47.10898993',
            ),
            402 =>
            array (
                'id' => 1027,
                'name_ar' => 'المستشفى العسكري',
                'name_en' => 'al mustashfa al askari',
                'city_id' => 3347,
                'neCoordinates' => '17.48137061,47.10944972',
                'swCoordinates' => '17.47595273,47.09761165',
            ),
            403 =>
            array (
                'id' => 1028,
                'name_ar' => 'الروضة الشمالية',
                'name_en' => 'ar rawdah ash shamaliyyah',
                'city_id' => 3347,
                'neCoordinates' => '17.51237710,47.11132808',
                'swCoordinates' => '17.50317376,47.09694553',
            ),
            404 =>
            array (
                'id' => 1029,
                'name_ar' => 'مخطط ا',
                'name_en' => 'subdivision a',
                'city_id' => 3347,
                'neCoordinates' => '17.51058270,47.10288063',
                'swCoordinates' => '17.47176403,47.07894062',
            ),
            405 =>
            array (
                'id' => 1030,
                'name_ar' => 'مخطط ب',
                'name_en' => 'subdivision b',
                'city_id' => 3347,
                'neCoordinates' => '17.51039006,47.08823570',
                'swCoordinates' => '17.48795038,47.07031874',
            ),
            406 =>
            array (
                'id' => 1031,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiiyah',
                'city_id' => 3347,
                'neCoordinates' => '17.50294654,47.07718339',
                'swCoordinates' => '17.48457460,47.05237633',
            ),
            407 =>
            array (
                'id' => 1032,
                'name_ar' => ' الفهد',
                'name_en' => 'al fahd',
                'city_id' => 3347,
                'neCoordinates' => '17.49960455,47.10898991',
                'swCoordinates' => '17.47966814,47.09883605',
            ),
            408 =>
            array (
                'id' => 1033,
                'name_ar' => 'الروضة الجنوبية',
                'name_en' => 'ar rawdah al janubiyyah',
                'city_id' => 3347,
                'neCoordinates' => '17.50499028,47.11254186',
                'swCoordinates' => '17.49941876,47.10099987',
            ),
            409 =>
            array (
                'id' => 1038,
                'name_ar' => 'الصليب الشرقي',
                'name_en' => 'as silayyib ash sharqi',
                'city_id' => 377,
                'neCoordinates' => '22.83053076,39.05537602',
                'swCoordinates' => '22.81444692,39.02592045',
            ),
            410 =>
            array (
                'id' => 1039,
                'name_ar' => 'الصليب الغربي',
                'name_en' => 'as silayyib al gharbi',
                'city_id' => 377,
                'neCoordinates' => '22.84686541,39.03334697',
                'swCoordinates' => '22.81442164,39.00363779',
            ),
            411 =>
            array (
                'id' => 1042,
                'name_ar' => 'الصبوح',
                'name_en' => 'as sabuh',
                'city_id' => 377,
                'neCoordinates' => '22.81253694,39.05525095',
                'swCoordinates' => '22.79932027,39.03728603',
            ),
            412 =>
            array (
                'id' => 1043,
                'name_ar' => 'الفرنيسية الشرقية',
                'name_en' => 'al farnisiyyah ash sharqiyyah',
                'city_id' => 377,
                'neCoordinates' => '22.80039741,39.05525046',
                'swCoordinates' => '22.77647573,39.03756580',
            ),
            413 =>
            array (
                'id' => 1044,
                'name_ar' => 'السوق',
                'name_en' => 'as suq',
                'city_id' => 377,
                'neCoordinates' => '22.80888990,39.03756581',
                'swCoordinates' => '22.79884056,39.03286514',
            ),
            414 =>
            array (
                'id' => 1045,
                'name_ar' => 'الصمد',
                'name_en' => 'as samad',
                'city_id' => 377,
                'neCoordinates' => '22.80856580,39.03925402',
                'swCoordinates' => '22.78101855,39.02621911',
            ),
            415 =>
            array (
                'id' => 1046,
                'name_ar' => 'شمال الاذاعة',
                'name_en' => 'al idhaah north',
                'city_id' => 418,
                'neCoordinates' => '23.87122854,42.89750608',
                'swCoordinates' => '23.85879779,42.88687788',
            ),
            416 =>
            array (
                'id' => 1047,
                'name_ar' => 'المعارض',
                'name_en' => 'al maarid',
                'city_id' => 418,
                'neCoordinates' => '23.88834088,42.90520105',
                'swCoordinates' => '23.86891871,42.88938301',
            ),
            417 =>
            array (
                'id' => 1048,
                'name_ar' => 'الاذاعة',
                'name_en' => 'al idhaah',
                'city_id' => 418,
                'neCoordinates' => '23.88097836,42.91345231',
                'swCoordinates' => '23.85079277,42.89111001',
            ),
            418 =>
            array (
                'id' => 1049,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 418,
                'neCoordinates' => '23.90104754,42.91106792',
                'swCoordinates' => '23.88512595,42.89606436',
            ),
            419 =>
            array (
                'id' => 1050,
                'name_ar' => 'الملز',
                'name_en' => 'al malaz',
                'city_id' => 418,
                'neCoordinates' => '23.89737160,42.92131414',
                'swCoordinates' => '23.87683989,42.90321242',
            ),
            420 =>
            array (
                'id' => 1051,
                'name_ar' => 'الاصفر',
                'name_en' => 'al asfar',
                'city_id' => 418,
                'neCoordinates' => '23.90750432,42.91410802',
                'swCoordinates' => '23.89737160,42.90196046',
            ),
            421 =>
            array (
                'id' => 1052,
                'name_ar' => 'الحجاج',
                'name_en' => 'al hujjaj',
                'city_id' => 418,
                'neCoordinates' => '23.93426238,42.95457956',
                'swCoordinates' => '23.92522719,42.94640729',
            ),
            422 =>
            array (
                'id' => 1053,
                'name_ar' => 'المهنيين',
                'name_en' => 'al mihaniyin',
                'city_id' => 418,
                'neCoordinates' => '23.93172105,42.95792961',
                'swCoordinates' => '23.92617968,42.94946161',
            ),
            423 =>
            array (
                'id' => 1054,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 418,
                'neCoordinates' => '23.91110385,42.90552921',
                'swCoordinates' => '23.88877790,42.88863153',
            ),
            424 =>
            array (
                'id' => 1055,
                'name_ar' => 'الملك فيصل',
                'name_en' => 'king faisal',
                'city_id' => 418,
                'neCoordinates' => '23.90787220,42.92223235',
                'swCoordinates' => '23.89320512,42.91106792',
            ),
            425 =>
            array (
                'id' => 1056,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 418,
                'neCoordinates' => '23.90476028,42.92895765',
                'swCoordinates' => '23.89320509,42.91937722',
            ),
            426 =>
            array (
                'id' => 1057,
                'name_ar' => 'العود',
                'name_en' => 'al uud',
                'city_id' => 418,
                'neCoordinates' => '23.92028337,42.93807563',
                'swCoordinates' => '23.91176154,42.92210683',
            ),
            427 =>
            array (
                'id' => 1058,
                'name_ar' => 'المنفوحة',
                'name_en' => 'al manfuhah',
                'city_id' => 418,
                'neCoordinates' => '23.91217178,42.92701517',
                'swCoordinates' => '23.90357069,42.91695354',
            ),
            428 =>
            array (
                'id' => 1059,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 418,
                'neCoordinates' => '23.93122645,42.92582368',
                'swCoordinates' => '23.91612625,42.92145931',
            ),
            429 =>
            array (
                'id' => 1060,
                'name_ar' => 'الخزان',
                'name_en' => 'al khazzan',
                'city_id' => 418,
                'neCoordinates' => '23.91750949,42.93807140',
                'swCoordinates' => '23.90476028,42.92330282',
            ),
            430 =>
            array (
                'id' => 1061,
                'name_ar' => 'الملك خالد',
                'name_en' => 'king khalid',
                'city_id' => 418,
                'neCoordinates' => '23.91723578,42.92231315',
                'swCoordinates' => '23.90374372,42.90508673',
            ),
            431 =>
            array (
                'id' => 1062,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulaymaniyah',
                'city_id' => 418,
                'neCoordinates' => '23.93137920,42.92205622',
                'swCoordinates' => '23.91449227,42.90864379',
            ),
            432 =>
            array (
                'id' => 1063,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 243,
                'neCoordinates' => '25.92715780,49.60241964',
                'swCoordinates' => '25.91557734,49.58725449',
            ),
            433 =>
            array (
                'id' => 1064,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 243,
                'neCoordinates' => '25.94133145,49.62356803',
                'swCoordinates' => '25.92755016,49.60886076',
            ),
            434 =>
            array (
                'id' => 1065,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyyah',
                'city_id' => 243,
                'neCoordinates' => '25.92539851,49.65797139',
                'swCoordinates' => '25.91697978,49.65072800',
            ),
            435 =>
            array (
                'id' => 1066,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 243,
                'neCoordinates' => '25.92587025,49.65595817',
                'swCoordinates' => '25.91353236,49.64427522',
            ),
            436 =>
            array (
                'id' => 1067,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 243,
                'neCoordinates' => '25.94864605,49.65831728',
                'swCoordinates' => '25.93268839,49.64369879',
            ),
            437 =>
            array (
                'id' => 1068,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 243,
                'neCoordinates' => '25.92700783,49.64653152',
                'swCoordinates' => '25.91641238,49.63747899',
            ),
            438 =>
            array (
                'id' => 1069,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 243,
                'neCoordinates' => '25.93009924,49.62329003',
                'swCoordinates' => '25.91768993,49.61219868',
            ),
            439 =>
            array (
                'id' => 1070,
                'name_ar' => 'أشبيلية',
                'name_en' => 'ishbiliyah',
                'city_id' => 243,
                'neCoordinates' => '25.91766862,49.61219882',
                'swCoordinates' => '25.90535264,49.59285862',
            ),
            440 =>
            array (
                'id' => 1071,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 243,
                'neCoordinates' => '25.93476362,49.65959742',
                'swCoordinates' => '25.92267938,49.64188379',
            ),
            441 =>
            array (
                'id' => 1072,
                'name_ar' => 'المدينة',
                'name_en' => 'al madinah',
                'city_id' => 243,
                'neCoordinates' => '25.93221955,49.66722909',
                'swCoordinates' => '25.91688274,49.65602111',
            ),
            442 =>
            array (
                'id' => 1073,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 243,
                'neCoordinates' => '25.94116577,49.64170992',
                'swCoordinates' => '25.92070912,49.62001331',
            ),
            443 =>
            array (
                'id' => 1074,
                'name_ar' => 'الفردوس',
                'name_en' => 'al fardus',
                'city_id' => 243,
                'neCoordinates' => '25.94291497,49.65187158',
                'swCoordinates' => '25.93051897,49.64045549',
            ),
            444 =>
            array (
                'id' => 1075,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 243,
                'neCoordinates' => '25.92199123,49.62753963',
                'swCoordinates' => '25.90698392,49.61189360',
            ),
            445 =>
            array (
                'id' => 1076,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 47,
                'neCoordinates' => '28.42594281,46.06931382',
                'swCoordinates' => '28.38072283,46.02703049',
            ),
            446 =>
            array (
                'id' => 1077,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 47,
                'neCoordinates' => '28.34622189,45.98483488',
                'swCoordinates' => '28.30679091,45.95236387',
            ),
            447 =>
            array (
                'id' => 1078,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 47,
                'neCoordinates' => '28.26280207,45.95907146',
                'swCoordinates' => '28.21374454,45.92018023',
            ),
            448 =>
            array (
                'id' => 1079,
                'name_ar' => 'الرابية',
                'name_en' => 'ar rabiyah',
                'city_id' => 47,
                'neCoordinates' => '28.39591085,45.94670669',
                'swCoordinates' => '28.35995149,45.90893512',
            ),
            449 =>
            array (
                'id' => 1080,
                'name_ar' => 'التلال',
                'name_en' => 'at talal',
                'city_id' => 47,
                'neCoordinates' => '28.45554813,45.95169279',
                'swCoordinates' => '28.42513236,45.92453688',
            ),
            450 =>
            array (
                'id' => 1081,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 47,
                'neCoordinates' => '28.26634641,45.94257038',
                'swCoordinates' => '28.23234640,45.91036849',
            ),
            451 =>
            array (
                'id' => 1082,
                'name_ar' => 'الوادي',
                'name_en' => 'al wadi',
                'city_id' => 47,
                'neCoordinates' => '28.37793488,45.98534025',
                'swCoordinates' => '28.34477860,45.96262019',
            ),
            452 =>
            array (
                'id' => 1083,
                'name_ar' => 'البلدية',
                'name_en' => 'al baladiyah',
                'city_id' => 47,
                'neCoordinates' => '28.43751802,45.99603512',
                'swCoordinates' => '28.40859350,45.96888051',
            ),
            453 =>
            array (
                'id' => 1084,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 47,
                'neCoordinates' => '28.44216119,46.06335838',
                'swCoordinates' => '28.42035210,46.01690429',
            ),
            454 =>
            array (
                'id' => 1085,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 47,
                'neCoordinates' => '28.46035695,45.97421960',
                'swCoordinates' => '28.42932911,45.94471284',
            ),
            455 =>
            array (
                'id' => 1086,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 47,
                'neCoordinates' => '28.46397009,46.03504252',
                'swCoordinates' => '28.43860947,46.00382827',
            ),
            456 =>
            array (
                'id' => 1087,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 47,
                'neCoordinates' => '28.42932911,45.95815407',
                'swCoordinates' => '28.40278063,45.93149496',
            ),
            457 =>
            array (
                'id' => 1088,
                'name_ar' => 'الباطن',
                'name_en' => 'al batin',
                'city_id' => 47,
                'neCoordinates' => '28.46857900,46.00928020',
                'swCoordinates' => '28.43849711,45.98373780',
            ),
            458 =>
            array (
                'id' => 1089,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 47,
                'neCoordinates' => '28.39839271,45.99228152',
                'swCoordinates' => '28.36580838,45.96313943',
            ),
            459 =>
            array (
                'id' => 1090,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 47,
                'neCoordinates' => '28.43398751,45.97515576',
                'swCoordinates' => '28.40630842,45.95169279',
            ),
            460 =>
            array (
                'id' => 1091,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 47,
                'neCoordinates' => '28.45129302,45.93149496',
                'swCoordinates' => '28.42216825,45.90955270',
            ),
            461 =>
            array (
                'id' => 1092,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safaa',
                'city_id' => 47,
                'neCoordinates' => '28.38552116,46.01461665',
                'swCoordinates' => '28.35795780,45.98821575',
            ),
            462 =>
            array (
                'id' => 1093,
                'name_ar' => 'فليج',
                'name_en' => 'fulaij',
                'city_id' => 47,
                'neCoordinates' => '28.44161656,46.02077279',
                'swCoordinates' => '28.42440817,45.99358224',
            ),
            463 =>
            array (
                'id' => 1094,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 47,
                'neCoordinates' => '28.31241285,45.96840120',
                'swCoordinates' => '28.28690492,45.94867986',
            ),
            464 =>
            array (
                'id' => 1095,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 47,
                'neCoordinates' => '28.45743393,46.06096553',
                'swCoordinates' => '28.43882398,46.03304679',
            ),
            465 =>
            array (
                'id' => 1096,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 47,
                'neCoordinates' => '28.40841328,45.95352320',
                'swCoordinates' => '28.38607232,45.91621314',
            ),
            466 =>
            array (
                'id' => 1097,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 47,
                'neCoordinates' => '28.40859350,45.96888051',
                'swCoordinates' => '28.37793488,45.94667059',
            ),
            467 =>
            array (
                'id' => 1098,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 47,
                'neCoordinates' => '28.42513236,45.93652305',
                'swCoordinates' => '28.40392473,45.91632531',
            ),
            468 =>
            array (
                'id' => 1099,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 47,
                'neCoordinates' => '28.33768192,45.96320464',
                'swCoordinates' => '28.32018450,45.94928339',
            ),
            469 =>
            array (
                'id' => 1100,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 47,
                'neCoordinates' => '28.29019844,45.95992317',
                'swCoordinates' => '28.26230927,45.94280926',
            ),
            470 =>
            array (
                'id' => 1101,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayan',
                'city_id' => 47,
                'neCoordinates' => '28.35732073,45.96511253',
                'swCoordinates' => '28.33572439,45.93923078',
            ),
            471 =>
            array (
                'id' => 1102,
                'name_ar' => 'النايفية',
                'name_en' => 'an nayfiyah',
                'city_id' => 47,
                'neCoordinates' => '28.37855604,45.96402856',
                'swCoordinates' => '28.35407518,45.94351047',
            ),
            472 =>
            array (
                'id' => 1103,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 47,
                'neCoordinates' => '28.40165885,46.00365080',
                'swCoordinates' => '28.38222934,45.98384699',
            ),
            473 =>
            array (
                'id' => 1104,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 47,
                'neCoordinates' => '28.36883022,45.99606117',
                'swCoordinates' => '28.34630027,45.98336392',
            ),
            474 =>
            array (
                'id' => 1105,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 47,
                'neCoordinates' => '28.41102743,45.98384699',
                'swCoordinates' => '28.39455823,45.96460427',
            ),
            475 =>
            array (
                'id' => 1106,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 47,
                'neCoordinates' => '28.41433892,45.99924560',
                'swCoordinates' => '28.39839271,45.98038049',
            ),
            476 =>
            array (
                'id' => 1107,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 47,
                'neCoordinates' => '28.29019844,45.94873579',
                'swCoordinates' => '28.26224830,45.93332782',
            ),
            477 =>
            array (
                'id' => 1108,
                'name_ar' => 'ابو موسى الاشعري',
                'name_en' => 'abu musa al ashari',
                'city_id' => 47,
                'neCoordinates' => '28.46299296,45.99004884',
                'swCoordinates' => '28.43398751,45.96711058',
            ),
            478 =>
            array (
                'id' => 1109,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 47,
                'neCoordinates' => '28.45135241,46.08975977',
                'swCoordinates' => '28.42594281,46.06095763',
            ),
            479 =>
            array (
                'id' => 1110,
                'name_ar' => 'الرائد',
                'name_en' => 'ar raid',
                'city_id' => 47,
                'neCoordinates' => '28.36478594,46.01763567',
                'swCoordinates' => '28.34709386,45.99318282',
            ),
            480 =>
            array (
                'id' => 1111,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 47,
                'neCoordinates' => '28.32328494,45.95599442',
                'swCoordinates' => '28.29019170,45.93953916',
            ),
            481 =>
            array (
                'id' => 1112,
                'name_ar' => 'العمل',
                'name_en' => 'al amal',
                'city_id' => 3,
                'neCoordinates' => '24.65090145,46.73422257',
                'swCoordinates' => '24.63996102,46.71583452',
            ),
            482 =>
            array (
                'id' => 1113,
                'name_ar' => 'النموذجية',
                'name_en' => 'an namudhajiyah',
                'city_id' => 3,
                'neCoordinates' => '24.66787099,46.70292598',
                'swCoordinates' => '24.64580927,46.68565725',
            ),
            483 =>
            array (
                'id' => 1114,
                'name_ar' => 'الجرادية',
                'name_en' => 'al jaradiyah',
                'city_id' => 3,
                'neCoordinates' => '24.62670981,46.70753474',
                'swCoordinates' => '24.60975388,46.69196738',
            ),
            484 =>
            array (
                'id' => 1115,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 3,
                'neCoordinates' => '24.65374967,46.76259395',
                'swCoordinates' => '24.62984754,46.73143592',
            ),
            485 =>
            array (
                'id' => 1116,
                'name_ar' => 'منفوحة الجديدة',
                'name_en' => 'manfuhah al jadidah',
                'city_id' => 3,
                'neCoordinates' => '24.62058384,46.72900867',
                'swCoordinates' => '24.60545282,46.71072801',
            ),
            486 =>
            array (
                'id' => 1117,
                'name_ar' => 'الفاخرية',
                'name_en' => 'al fakhriyah',
                'city_id' => 3,
                'neCoordinates' => '24.64718160,46.69388220',
                'swCoordinates' => '24.63342568,46.67305974',
            ),
            487 =>
            array (
                'id' => 1118,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 3,
                'neCoordinates' => '24.63803277,46.71847438',
                'swCoordinates' => '24.62242108,46.70455769',
            ),
            488 =>
            array (
                'id' => 1119,
                'name_ar' => 'ام الحمام الشرقي',
                'name_en' => 'umm al hamam ash sharqi',
                'city_id' => 3,
                'neCoordinates' => '24.70152887,46.66969644',
                'swCoordinates' => '24.67407889,46.65025512',
            ),
            489 =>
            array (
                'id' => 1120,
                'name_ar' => 'الشرفية',
                'name_en' => 'ash sharafiyah',
                'city_id' => 3,
                'neCoordinates' => '24.67104975,46.67936304',
                'swCoordinates' => '24.64892885,46.65945447',
            ),
            490 =>
            array (
                'id' => 1121,
                'name_ar' => 'الهدا',
                'name_en' => 'al hada',
                'city_id' => 3,
                'neCoordinates' => '24.68655917,46.66789221',
                'swCoordinates' => '24.64056551,46.60498995',
            ),
            491 =>
            array (
                'id' => 1122,
                'name_ar' => 'المعذر الشمالي',
                'name_en' => 'al madhar ash shamali',
                'city_id' => 3,
                'neCoordinates' => '24.70806022,46.67907524',
                'swCoordinates' => '24.67452930,46.65476604',
            ),
            492 =>
            array (
                'id' => 1123,
                'name_ar' => 'ام الحمام الغربي',
                'name_en' => 'umm al hamam al gharbi',
                'city_id' => 3,
                'neCoordinates' => '24.70405059,46.65771410',
                'swCoordinates' => '24.67418645,46.63050855',
            ),
            493 =>
            array (
                'id' => 1124,
                'name_ar' => 'الرحمانية',
                'name_en' => 'ar rahmaniyah',
                'city_id' => 3,
                'neCoordinates' => '24.72740059,46.67265439',
                'swCoordinates' => '24.70335646,46.64752226',
            ),
            494 =>
            array (
                'id' => 1125,
                'name_ar' => 'لبن',
                'name_en' => 'laban',
                'city_id' => 3,
                'neCoordinates' => '24.65658001,46.65157764',
                'swCoordinates' => '24.60016054,46.56407252',
            ),
            495 =>
            array (
                'id' => 1126,
                'name_ar' => 'الرفيعة',
                'name_en' => 'ar rafiah',
                'city_id' => 3,
                'neCoordinates' => '24.65011324,46.67762590',
                'swCoordinates' => '24.62483212,46.64454466',
            ),
            496 =>
            array (
                'id' => 1127,
                'name_ar' => 'الشهداء',
                'name_en' => 'al shohada',
                'city_id' => 3,
                'neCoordinates' => '24.79977218,46.74921308',
                'swCoordinates' => '24.77580184,46.72298311',
            ),
            497 =>
            array (
                'id' => 1128,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 3,
                'neCoordinates' => '24.75308555,46.68583873',
                'swCoordinates' => '24.72740059,46.65621952',
            ),
            498 =>
            array (
                'id' => 1129,
                'name_ar' => 'الطريف الجديدة',
                'name_en' => 'at tarif al jadidah',
                'city_id' => 828,
                'neCoordinates' => '24.75112803,46.58021158',
                'swCoordinates' => '24.73811833,46.56981223',
            ),
            499 =>
            array (
                'id' => 1130,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 828,
                'neCoordinates' => '24.75362820,46.58823454',
                'swCoordinates' => '24.73781828,46.57604185',
            ),
        ));
        DB::table('neighborhoods')->insert(array (
            0 =>
            array (
                'id' => 1131,
                'name_ar' => 'السويدي',
                'name_en' => 'as suwaidi',
                'city_id' => 3,
                'neCoordinates' => '24.60426417,46.70725719',
                'swCoordinates' => '24.57652088,46.65268490',
            ),
            1 =>
            array (
                'id' => 1132,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 3,
                'neCoordinates' => '24.56940656,46.67639012',
                'swCoordinates' => '24.51666263,46.62332166',
            ),
            2 =>
            array (
                'id' => 1133,
                'name_ar' => 'عتيقة',
                'name_en' => 'utaiqah',
                'city_id' => 3,
                'neCoordinates' => '24.61689255,46.71254711',
                'swCoordinates' => '24.58539365,46.70377668',
            ),
            3 =>
            array (
                'id' => 1134,
                'name_ar' => 'المربع',
                'name_en' => 'al murabba',
                'city_id' => 3,
                'neCoordinates' => '24.68107906,46.71889439',
                'swCoordinates' => '24.64412207,46.69652091',
            ),
            4 =>
            array (
                'id' => 1135,
                'name_ar' => 'الفلاح',
                'name_en' => 'al falah',
                'city_id' => 3,
                'neCoordinates' => '24.80869932,46.72298311',
                'swCoordinates' => '24.78468623,46.69674786',
            ),
            5 =>
            array (
                'id' => 1136,
                'name_ar' => 'الندى',
                'name_en' => 'an nada',
                'city_id' => 3,
                'neCoordinates' => '24.81745489,46.69674786',
                'swCoordinates' => '24.79351508,46.67053265',
            ),
            6 =>
            array (
                'id' => 1137,
                'name_ar' => 'المرسلات',
                'name_en' => 'al mursalat',
                'city_id' => 3,
                'neCoordinates' => '24.76064117,46.70379946',
                'swCoordinates' => '24.73633286,46.67738797',
            ),
            7 =>
            array (
                'id' => 1138,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 3,
                'neCoordinates' => '24.76822194,46.72186614',
                'swCoordinates' => '24.74390881,46.69530411',
            ),
            8 =>
            array (
                'id' => 1139,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 3,
                'neCoordinates' => '24.73633286,46.69360574',
                'swCoordinates' => '24.71168183,46.66468612',
            ),
            9 =>
            array (
                'id' => 1140,
                'name_ar' => 'الملك فيصل',
                'name_en' => 'king faisal',
                'city_id' => 3,
                'neCoordinates' => '24.77596240,46.79089138',
                'swCoordinates' => '24.74666738,46.75982297',
            ),
            10 =>
            array (
                'id' => 1141,
                'name_ar' => 'المدينة الصناعية الجديدة',
                'name_en' => 'new industrial area',
                'city_id' => 3,
                'neCoordinates' => '24.58581049,46.94727975',
                'swCoordinates' => '24.50222656,46.85058956',
            ),
            11 =>
            array (
                'id' => 1142,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 3,
                'neCoordinates' => '24.61201744,46.80942494',
                'swCoordinates' => '24.56101934,46.73796516',
            ),
            12 =>
            array (
                'id' => 1143,
                'name_ar' => 'المنصورة',
                'name_en' => 'al mansurah',
                'city_id' => 3,
                'neCoordinates' => '24.62162804,46.76599610',
                'swCoordinates' => '24.59391018,46.72900867',
            ),
            13 =>
            array (
                'id' => 1144,
                'name_ar' => 'غبيرة',
                'name_en' => 'ghubairah',
                'city_id' => 3,
                'neCoordinates' => '24.62984754,46.74807372',
                'swCoordinates' => '24.61056556,46.72605041',
            ),
            14 =>
            array (
                'id' => 1145,
                'name_ar' => 'الفاروق',
                'name_en' => 'al faruq',
                'city_id' => 3,
                'neCoordinates' => '24.66657908,46.79264081',
                'swCoordinates' => '24.64029979,46.75522752',
            ),
            15 =>
            array (
                'id' => 1146,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 3,
                'neCoordinates' => '24.65319930,46.80529000',
                'swCoordinates' => '24.61517029,46.76069230',
            ),
            16 =>
            array (
                'id' => 1147,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 3,
                'neCoordinates' => '24.63386269,46.76821179',
                'swCoordinates' => '24.61201744,46.73987550',
            ),
            17 =>
            array (
                'id' => 1148,
                'name_ar' => 'الجزيرة',
                'name_en' => 'al jazirah',
                'city_id' => 3,
                'neCoordinates' => '24.68571142,46.81594962',
                'swCoordinates' => '24.64294953,46.77825155',
            ),
            18 =>
            array (
                'id' => 1149,
                'name_ar' => 'السعادة',
                'name_en' => 'as saadah',
                'city_id' => 3,
                'neCoordinates' => '24.71716608,46.85651778',
                'swCoordinates' => '24.67728871,46.81744291',
            ),
            19 =>
            array (
                'id' => 1150,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasriyah',
                'city_id' => 3,
                'neCoordinates' => '24.66054713,46.69359099',
                'swCoordinates' => '24.64248343,46.67060591',
            ),
            20 =>
            array (
                'id' => 1151,
                'name_ar' => 'المناخ',
                'name_en' => 'al manakh',
                'city_id' => 3,
                'neCoordinates' => '24.62943985,46.84901772',
                'swCoordinates' => '24.58708370,46.76599610',
            ),
            21 =>
            array (
                'id' => 1152,
                'name_ar' => 'الدفاع',
                'name_en' => 'ad difa',
                'city_id' => 3,
                'neCoordinates' => '24.59801970,46.85665038',
                'swCoordinates' => '24.57321413,46.80942494',
            ),
            22 =>
            array (
                'id' => 1153,
                'name_ar' => 'النور',
                'name_en' => 'an nur',
                'city_id' => 3,
                'neCoordinates' => '24.65148928,46.83569849',
                'swCoordinates' => '24.61152015,46.79776042',
            ),
            23 =>
            array (
                'id' => 1154,
                'name_ar' => 'الملك عبدالله',
                'name_en' => 'king abdullah',
                'city_id' => 3,
                'neCoordinates' => '24.75947838,46.76248255',
                'swCoordinates' => '24.70340846,46.72186614',
            ),
            24 =>
            array (
                'id' => 1155,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 3,
                'neCoordinates' => '24.75152584,46.73101420',
                'swCoordinates' => '24.72641808,46.70379946',
            ),
            25 =>
            array (
                'id' => 1156,
                'name_ar' => 'صلاح الدين',
                'name_en' => 'salah ad din',
                'city_id' => 3,
                'neCoordinates' => '24.74390881,46.71251511',
                'swCoordinates' => '24.72094817,46.68583873',
            ),
            26 =>
            array (
                'id' => 1157,
                'name_ar' => 'الملك عبدالعزيز',
                'name_en' => 'king abdul aziz',
                'city_id' => 3,
                'neCoordinates' => '24.73358784,46.74524327',
                'swCoordinates' => '24.69202874,46.69314594',
            ),
            27 =>
            array (
                'id' => 1158,
                'name_ar' => 'الوزارات',
                'name_en' => 'al wazarat',
                'city_id' => 3,
                'neCoordinates' => '24.69202874,46.71914444',
                'swCoordinates' => '24.66554936,46.70868506',
            ),
            28 =>
            array (
                'id' => 1159,
                'name_ar' => 'سكيرينة',
                'name_en' => 'skirinah',
                'city_id' => 3,
                'neCoordinates' => '24.62011486,46.72184348',
                'swCoordinates' => '24.61193642,46.71500306',
            ),
            29 =>
            array (
                'id' => 1160,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 3,
                'neCoordinates' => '24.71413811,46.77825155',
                'swCoordinates' => '24.67269508,46.73239385',
            ),
            30 =>
            array (
                'id' => 1161,
                'name_ar' => 'جرير',
                'name_en' => 'jarir',
                'city_id' => 3,
                'neCoordinates' => '24.68796137,46.76109027',
                'swCoordinates' => '24.66582558,46.74155090',
            ),
            31 =>
            array (
                'id' => 1162,
                'name_ar' => 'المعذر',
                'name_en' => 'al madhar',
                'city_id' => 3,
                'neCoordinates' => '24.67517233,46.68565725',
                'swCoordinates' => '24.65614810,46.65323977',
            ),
            32 =>
            array (
                'id' => 1163,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 3,
                'neCoordinates' => '24.63919016,46.73987550',
                'swCoordinates' => '24.62873387,46.72949375',
            ),
            33 =>
            array (
                'id' => 1164,
                'name_ar' => 'الملز',
                'name_en' => 'al malaz',
                'city_id' => 3,
                'neCoordinates' => '24.68139381,46.75522752',
                'swCoordinates' => '24.64718290,46.71679556',
            ),
            34 =>
            array (
                'id' => 1165,
                'name_ar' => 'منفوحة',
                'name_en' => 'manfuhah',
                'city_id' => 3,
                'neCoordinates' => '24.61056556,46.73796516',
                'swCoordinates' => '24.58762235,46.72021629',
            ),
            35 =>
            array (
                'id' => 1166,
                'name_ar' => 'عليشة',
                'name_en' => 'ilaishah',
                'city_id' => 3,
                'neCoordinates' => '24.64106726,46.69361747',
                'swCoordinates' => '24.62482461,46.67593686',
            ),
            36 =>
            array (
                'id' => 1167,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 3,
                'neCoordinates' => '24.78075633,46.84195892',
                'swCoordinates' => '24.73959735,46.79089136',
            ),
            37 =>
            array (
                'id' => 1168,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 3,
                'neCoordinates' => '24.79638601,46.83008947',
                'swCoordinates' => '24.75639710,46.77709671',
            ),
            38 =>
            array (
                'id' => 1169,
                'name_ar' => 'الضباط',
                'name_en' => 'adh dhubbat',
                'city_id' => 3,
                'neCoordinates' => '24.69319559,46.72891397',
                'swCoordinates' => '24.66605800,46.71871464',
            ),
            39 =>
            array (
                'id' => 1170,
                'name_ar' => 'السويدي الغربي',
                'name_en' => 'as suwaidi al gharbi',
                'city_id' => 3,
                'neCoordinates' => '24.58823223,46.64517651',
                'swCoordinates' => '24.55983450,46.60571524',
            ),
            40 =>
            array (
                'id' => 1171,
                'name_ar' => 'ديراب',
                'name_en' => 'dirab',
                'city_id' => 3,
                'neCoordinates' => '24.53807494,46.64587848',
                'swCoordinates' => '24.48188109,46.59405982',
            ),
            41 =>
            array (
                'id' => 1172,
                'name_ar' => 'احد',
                'name_en' => 'uhud',
                'city_id' => 3,
                'neCoordinates' => '24.50715633,46.65581665',
                'swCoordinates' => '24.47200884,46.61532156',
            ),
            42 =>
            array (
                'id' => 1173,
                'name_ar' => 'نمار',
                'name_en' => 'namar',
                'city_id' => 3,
                'neCoordinates' => '24.58577676,46.70597407',
                'swCoordinates' => '24.55694985,46.66719402',
            ),
            43 =>
            array (
                'id' => 1174,
                'name_ar' => 'الشفا',
                'name_en' => 'ash shifa',
                'city_id' => 3,
                'neCoordinates' => '24.58560830,46.72423715',
                'swCoordinates' => '24.54364387,46.67542289',
            ),
            44 =>
            array (
                'id' => 1175,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 3,
                'neCoordinates' => '24.74416305,46.66468612',
                'swCoordinates' => '24.72014501,46.63433832',
            ),
            45 =>
            array (
                'id' => 1176,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 3,
                'neCoordinates' => '24.72094805,46.71871464',
                'swCoordinates' => '24.67513396,46.68262860',
            ),
            46 =>
            array (
                'id' => 1177,
                'name_ar' => 'المروة',
                'name_en' => 'al marwah',
                'city_id' => 3,
                'neCoordinates' => '24.55606169,46.69337632',
                'swCoordinates' => '24.52449888,46.65964749',
            ),
            47 =>
            array (
                'id' => 1178,
                'name_ar' => 'عكاظ',
                'name_en' => 'uqaz',
                'city_id' => 3,
                'neCoordinates' => '24.53701592,46.70253674',
                'swCoordinates' => '24.48848426,46.63700555',
            ),
            48 =>
            array (
                'id' => 1179,
                'name_ar' => 'شبرا',
                'name_en' => 'shubra',
                'city_id' => 3,
                'neCoordinates' => '24.59619181,46.69519500',
                'swCoordinates' => '24.56072805,46.64237495',
            ),
            49 =>
            array (
                'id' => 1180,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 3,
                'neCoordinates' => '24.59201431,46.66195822',
                'swCoordinates' => '24.56456175,46.63103110',
            ),
            50 =>
            array (
                'id' => 1181,
                'name_ar' => 'صياح',
                'name_en' => 'siyah',
                'city_id' => 3,
                'neCoordinates' => '24.61383049,46.70774112',
                'swCoordinates' => '24.60154336,46.69636921',
            ),
            51 =>
            array (
                'id' => 1182,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 3,
                'neCoordinates' => '24.61680728,46.70040141',
                'swCoordinates' => '24.59515060,46.67896612',
            ),
            52 =>
            array (
                'id' => 1183,
                'name_ar' => 'اليمامة',
                'name_en' => 'al yamamah',
                'city_id' => 3,
                'neCoordinates' => '24.60690949,46.72568613',
                'swCoordinates' => '24.58472750,46.70737840',
            ),
            53 =>
            array (
                'id' => 1184,
                'name_ar' => 'البديعة',
                'name_en' => 'al badiah',
                'city_id' => 3,
                'neCoordinates' => '24.62602421,46.69346105',
                'swCoordinates' => '24.60571214,46.67019660',
            ),
            54 =>
            array (
                'id' => 1185,
                'name_ar' => 'المصانع',
                'name_en' => 'al masani',
                'city_id' => 3,
                'neCoordinates' => '24.59391018,46.77900193',
                'swCoordinates' => '24.50853734,46.71112580',
            ),
            55 =>
            array (
                'id' => 1186,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 3,
                'neCoordinates' => '24.83907494,46.85063883',
                'swCoordinates' => '24.79979598,46.79855128',
            ),
            56 =>
            array (
                'id' => 1187,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 3,
                'neCoordinates' => '24.67924877,46.78531123',
                'swCoordinates' => '24.65374967,46.74891443',
            ),
            57 =>
            array (
                'id' => 1188,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 3,
                'neCoordinates' => '24.71610111,46.70412252',
                'swCoordinates' => '24.66787099,46.66428271',
            ),
            58 =>
            array (
                'id' => 1189,
                'name_ar' => 'الدريهمية',
                'name_en' => 'ad duraihimiyah',
                'city_id' => 3,
                'neCoordinates' => '24.59574180,46.70597407',
                'swCoordinates' => '24.58244018,46.68604982',
            ),
            59 =>
            array (
                'id' => 1190,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 3,
                'neCoordinates' => '24.58886139,46.86973662',
                'swCoordinates' => '24.55821483,46.82711761',
            ),
            60 =>
            array (
                'id' => 1191,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 3,
                'neCoordinates' => '24.72235775,46.82830062',
                'swCoordinates' => '24.69243843,46.79543084',
            ),
            61 =>
            array (
                'id' => 1192,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 3,
                'neCoordinates' => '24.73777748,46.81185013',
                'swCoordinates' => '24.71214801,46.78399157',
            ),
            62 =>
            array (
                'id' => 1193,
                'name_ar' => 'النسيم الشرقي',
                'name_en' => 'an nasim ash sharqi',
                'city_id' => 3,
                'neCoordinates' => '24.76452665,46.87038725',
                'swCoordinates' => '24.71281834,46.82088841',
            ),
            63 =>
            array (
                'id' => 1194,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 3,
                'neCoordinates' => '24.76732699,46.77065769',
                'swCoordinates' => '24.73970216,46.73955826',
            ),
            64 =>
            array (
                'id' => 1195,
                'name_ar' => 'الوادي',
                'name_en' => 'al wadi',
                'city_id' => 3,
                'neCoordinates' => '24.80110004,46.70501527',
                'swCoordinates' => '24.77711706,46.67872784',
            ),
            65 =>
            array (
                'id' => 1196,
                'name_ar' => 'النفل',
                'name_en' => 'an nafl',
                'city_id' => 3,
                'neCoordinates' => '24.79351508,46.68705640',
                'swCoordinates' => '24.76953391,46.66082757',
            ),
            66 =>
            array (
                'id' => 1197,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 3,
                'neCoordinates' => '24.77711706,46.69530411',
                'swCoordinates' => '24.75308555,46.66904529',
            ),
            67 =>
            array (
                'id' => 1198,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawn',
                'city_id' => 3,
                'neCoordinates' => '24.78468623,46.71329742',
                'swCoordinates' => '24.76064117,46.68705640',
            ),
            68 =>
            array (
                'id' => 1199,
                'name_ar' => 'الازدهار',
                'name_en' => 'al izdihar',
                'city_id' => 3,
                'neCoordinates' => '24.79223997,46.73128176',
                'swCoordinates' => '24.76822194,46.70501163',
            ),
            69 =>
            array (
                'id' => 1200,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 3,
                'neCoordinates' => '24.75639710,46.80332068',
                'swCoordinates' => '24.72988762,46.77521213',
            ),
            70 =>
            array (
                'id' => 1201,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 3,
                'neCoordinates' => '24.75280101,46.78770134',
                'swCoordinates' => '24.71413811,46.74952103',
            ),
            71 =>
            array (
                'id' => 1202,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 3,
                'neCoordinates' => '24.71214801,46.81016003',
                'swCoordinates' => '24.67924877,46.77416192',
            ),
            72 =>
            array (
                'id' => 1203,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayan',
                'city_id' => 3,
                'neCoordinates' => '24.72754774,46.79543084',
                'swCoordinates' => '24.69431848,46.76248255',
            ),
            73 =>
            array (
                'id' => 1204,
                'name_ar' => 'المريح',
                'name_en' => 'al marih',
                'city_id' => 828,
                'neCoordinates' => '24.73543840,46.57964168',
                'swCoordinates' => '24.73224846,46.57655182',
            ),
            74 =>
            array (
                'id' => 1205,
                'name_ar' => 'البجيري',
                'name_en' => 'al bujayri',
                'city_id' => 828,
                'neCoordinates' => '24.73912834,46.57856173',
                'swCoordinates' => '24.73451843,46.57316188',
            ),
            75 =>
            array (
                'id' => 1206,
                'name_ar' => 'سمحان',
                'name_en' => 'samhan',
                'city_id' => 828,
                'neCoordinates' => '24.74651823,46.57482191',
                'swCoordinates' => '24.73564836,46.56522232',
            ),
            76 =>
            array (
                'id' => 1207,
                'name_ar' => 'الدرعية',
                'name_en' => 'ad diriyah',
                'city_id' => 828,
                'neCoordinates' => '24.74049929,46.59118445',
                'swCoordinates' => '24.72451861,46.57614170',
            ),
            77 =>
            array (
                'id' => 1208,
                'name_ar' => 'ظهرة البديعة',
                'name_en' => 'dhahrat al badiah',
                'city_id' => 3,
                'neCoordinates' => '24.61341852,46.68669295',
                'swCoordinates' => '24.58004447,46.62344774',
            ),
            78 =>
            array (
                'id' => 1209,
                'name_ar' => 'النظيم',
                'name_en' => 'an nazim',
                'city_id' => 3,
                'neCoordinates' => '24.82751747,46.91776346',
                'swCoordinates' => '24.77236031,46.86226813',
            ),
            79 =>
            array (
                'id' => 1210,
                'name_ar' => 'الرماية',
                'name_en' => 'ar rimayah',
                'city_id' => 3,
                'neCoordinates' => '24.79602574,46.90655497',
                'swCoordinates' => '24.74389709,46.84195894',
            ),
            80 =>
            array (
                'id' => 1211,
                'name_ar' => 'البرية',
                'name_en' => 'al bariah',
                'city_id' => 3,
                'neCoordinates' => '24.59585226,47.00890510',
                'swCoordinates' => '24.49915745,46.86973662',
            ),
            81 =>
            array (
                'id' => 1212,
                'name_ar' => 'طيبة',
                'name_en' => 'taibah',
                'city_id' => 3,
                'neCoordinates' => '24.57321413,46.86558663',
                'swCoordinates' => '24.50956675,46.79641539',
            ),
            82 =>
            array (
                'id' => 1213,
                'name_ar' => 'المنصورية',
                'name_en' => 'mansuriyah',
                'city_id' => 3,
                'neCoordinates' => '24.55476043,46.83517629',
                'swCoordinates' => '24.48297284,46.76978230',
            ),
            83 =>
            array (
                'id' => 1214,
                'name_ar' => 'ضاحية نمار',
                'name_en' => 'dahiat namar',
                'city_id' => 3,
                'neCoordinates' => '24.55426126,46.64801065',
                'swCoordinates' => '24.43021084,46.41399159',
            ),
            84 =>
            array (
                'id' => 1215,
                'name_ar' => 'المصفاة',
                'name_en' => 'al misfat',
                'city_id' => 3,
                'neCoordinates' => '24.54861059,46.89859315',
                'swCoordinates' => '24.49741242,46.84336760',
            ),
            85 =>
            array (
                'id' => 1216,
                'name_ar' => 'السفارات',
                'name_en' => 'as safarat',
                'city_id' => 3,
                'neCoordinates' => '24.70355713,46.64014837',
                'swCoordinates' => '24.65937243,46.60914688',
            ),
            86 =>
            array (
                'id' => 1217,
                'name_ar' => 'خشم العان',
                'name_en' => 'khashm al an',
                'city_id' => 3,
                'neCoordinates' => '24.76270649,47.00850082',
                'swCoordinates' => '24.56833352,46.85586893',
            ),
            87 =>
            array (
                'id' => 1218,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 3,
                'neCoordinates' => '24.83996537,46.75864314',
                'swCoordinates' => '24.79223997,46.71428534',
            ),
            88 =>
            array (
                'id' => 1219,
                'name_ar' => 'طويق',
                'name_en' => 'tuwaiq',
                'city_id' => 3,
                'neCoordinates' => '24.61126036,46.59603309',
                'swCoordinates' => '24.52380497,46.44026100',
            ),
            89 =>
            array (
                'id' => 1220,
                'name_ar' => 'ظهرة نمار',
                'name_en' => 'dhahrat namar',
                'city_id' => 3,
                'neCoordinates' => '24.57638200,46.64756368',
                'swCoordinates' => '24.54406277,46.58053073',
            ),
            90 =>
            array (
                'id' => 1221,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 3,
                'neCoordinates' => '24.80989579,46.67872784',
                'swCoordinates' => '24.77895783,46.64405872',
            ),
            91 =>
            array (
                'id' => 1222,
                'name_ar' => 'المغرزات',
                'name_en' => 'al mughrizat',
                'city_id' => 3,
                'neCoordinates' => '24.77580184,46.73955826',
                'swCoordinates' => '24.75152584,46.71329742',
            ),
            92 =>
            array (
                'id' => 1223,
                'name_ar' => 'السلي',
                'name_en' => 'as sulai',
                'city_id' => 3,
                'neCoordinates' => '24.69083821,46.90723893',
                'swCoordinates' => '24.61651991,46.80696009',
            ),
            93 =>
            array (
                'id' => 1224,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 828,
                'neCoordinates' => '24.76839229,46.58295631',
                'swCoordinates' => '24.74651823,46.56097266',
            ),
            94 =>
            array (
                'id' => 1225,
                'name_ar' => 'العقيق',
                'name_en' => 'al aqiq',
                'city_id' => 3,
                'neCoordinates' => '24.79333684,46.64791074',
                'swCoordinates' => '24.75301102,46.61344663',
            ),
            95 =>
            array (
                'id' => 1226,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 3,
                'neCoordinates' => '24.76062183,46.65621952',
                'swCoordinates' => '24.72346647,46.59118445',
            ),
            96 =>
            array (
                'id' => 1227,
                'name_ar' => 'الغدير',
                'name_en' => 'al ghadir',
                'city_id' => 3,
                'neCoordinates' => '24.78595724,46.66904529',
                'swCoordinates' => '24.76062183,46.64147871',
            ),
            97 =>
            array (
                'id' => 1228,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 3,
                'neCoordinates' => '24.76953391,46.67738797',
                'swCoordinates' => '24.74416305,46.64791074',
            ),
            98 =>
            array (
                'id' => 1229,
                'name_ar' => 'العود',
                'name_en' => 'al ud',
                'city_id' => 3,
                'neCoordinates' => '24.63541994,46.73607658',
                'swCoordinates' => '24.61728356,46.71799150',
            ),
            99 =>
            array (
                'id' => 1230,
                'name_ar' => 'ثليم',
                'name_en' => 'thulaim',
                'city_id' => 3,
                'neCoordinates' => '24.64466312,46.73723851',
                'swCoordinates' => '24.63760441,46.71847438',
            ),
            100 =>
            array (
                'id' => 1231,
                'name_ar' => 'الشميسي',
                'name_en' => 'ash shimaisi',
                'city_id' => 3,
                'neCoordinates' => '24.63066084,46.70727201',
                'swCoordinates' => '24.61689255,46.69292076',
            ),
            101 =>
            array (
                'id' => 1232,
                'name_ar' => 'الوشام',
                'name_en' => 'al wisham',
                'city_id' => 3,
                'neCoordinates' => '24.64986437,46.70455769',
                'swCoordinates' => '24.63666286,46.69338634',
            ),
            102 =>
            array (
                'id' => 1233,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 3,
                'neCoordinates' => '24.62590954,46.71188566',
                'swCoordinates' => '24.61654719,46.70650272',
            ),
            103 =>
            array (
                'id' => 1234,
                'name_ar' => 'الدوبية',
                'name_en' => 'ad dubiyah',
                'city_id' => 3,
                'neCoordinates' => '24.62626456,46.71500306',
                'swCoordinates' => '24.61662546,46.71072801',
            ),
            104 =>
            array (
                'id' => 1235,
                'name_ar' => 'المعكال',
                'name_en' => 'al mikal',
                'city_id' => 3,
                'neCoordinates' => '24.62680374,46.71830397',
                'swCoordinates' => '24.61858726,46.71264382',
            ),
            105 =>
            array (
                'id' => 1236,
                'name_ar' => 'جبرة',
                'name_en' => 'jabrah',
                'city_id' => 3,
                'neCoordinates' => '24.62963450,46.72453654',
                'swCoordinates' => '24.62047573,46.71552300',
            ),
            106 =>
            array (
                'id' => 1237,
                'name_ar' => 'القرى',
                'name_en' => 'al qura',
                'city_id' => 3,
                'neCoordinates' => '24.62907946,46.71799104',
                'swCoordinates' => '24.62655929,46.71467486',
            ),
            107 =>
            array (
                'id' => 1238,
                'name_ar' => 'المرقب',
                'name_en' => 'al marqab',
                'city_id' => 3,
                'neCoordinates' => '24.63947887,46.73725934',
                'swCoordinates' => '24.62963450,46.71709544',
            ),
            108 =>
            array (
                'id' => 1239,
                'name_ar' => 'الفوطة',
                'name_en' => 'al futah',
                'city_id' => 3,
                'neCoordinates' => '24.64615979,46.71856436',
                'swCoordinates' => '24.63735918,46.70369462',
            ),
            109 =>
            array (
                'id' => 1240,
                'name_ar' => 'ام سليم',
                'name_en' => 'umm salim',
                'city_id' => 3,
                'neCoordinates' => '24.63735918,46.70536263',
                'swCoordinates' => '24.62944742,46.69302392',
            ),
            110 =>
            array (
                'id' => 1241,
                'name_ar' => 'الصحافة',
                'name_en' => 'as sahafah',
                'city_id' => 3,
                'neCoordinates' => '24.81872032,46.65365590',
                'swCoordinates' => '24.77331735,46.62311412',
            ),
            111 =>
            array (
                'id' => 1243,
                'name_ar' => 'الرائد',
                'name_en' => 'ar raid',
                'city_id' => 3,
                'neCoordinates' => '24.72014501,46.65312957',
                'swCoordinates' => '24.69383426,46.62393166',
            ),
            112 =>
            array (
                'id' => 1244,
                'name_ar' => 'العريجاء الغربية',
                'name_en' => 'al uraija al gharbiyah',
                'city_id' => 3,
                'neCoordinates' => '24.61832088,46.62503827',
                'swCoordinates' => '24.57257490,46.57578947',
            ),
            113 =>
            array (
                'id' => 1245,
                'name_ar' => 'العريجاء',
                'name_en' => 'al uraija',
                'city_id' => 3,
                'neCoordinates' => '24.63573033,46.67386648',
                'swCoordinates' => '24.61522071,46.64032812',
            ),
            114 =>
            array (
                'id' => 1246,
                'name_ar' => 'العريجاء الوسطى',
                'name_en' => 'al uraija al wusta',
                'city_id' => 3,
                'neCoordinates' => '24.61910720,46.67084628',
                'swCoordinates' => '24.59039919,46.61238611',
            ),
            115 =>
            array (
                'id' => 1247,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 3,
                'neCoordinates' => '24.79086021,46.77709671',
                'swCoordinates' => '24.75947838,46.73128175',
            ),
            116 =>
            array (
                'id' => 1248,
                'name_ar' => 'الدار البيضاء',
                'name_en' => 'ad dar al baida',
                'city_id' => 3,
                'neCoordinates' => '24.58708370,46.82711761',
                'swCoordinates' => '24.54215548,46.75874644',
            ),
            117 =>
            array (
                'id' => 1249,
                'name_ar' => 'البطحاء',
                'name_en' => 'al batha',
                'city_id' => 3,
                'neCoordinates' => '24.62282620,46.72301255',
                'swCoordinates' => '24.62022577,46.71855243',
            ),
            118 =>
            array (
                'id' => 1250,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 3,
                'neCoordinates' => '24.69506864,46.74155090',
                'swCoordinates' => '24.67849901,46.72388687',
            ),
            119 =>
            array (
                'id' => 1251,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 3,
                'neCoordinates' => '24.69554483,46.82771920',
                'swCoordinates' => '24.66752894,46.79664785',
            ),
            120 =>
            array (
                'id' => 1252,
                'name_ar' => 'المؤتمرات',
                'name_en' => 'al mutamarat',
                'city_id' => 3,
                'neCoordinates' => '24.67842978,46.69652091',
                'swCoordinates' => '24.66054713,46.67887014',
            ),
            121 =>
            array (
                'id' => 1253,
                'name_ar' => 'الوسيطاء',
                'name_en' => 'al wusayta',
                'city_id' => 3,
                'neCoordinates' => '24.62752583,46.71939603',
                'swCoordinates' => '24.62011486,46.71365839',
            ),
            122 =>
            array (
                'id' => 1254,
                'name_ar' => 'الجنادرية',
                'name_en' => 'al janadriyah',
                'city_id' => 3,
                'neCoordinates' => '24.94454777,46.99848744',
                'swCoordinates' => '24.78700609,46.84645890',
            ),
            123 =>
            array (
                'id' => 1255,
                'name_ar' => 'اشبيلية',
                'name_en' => 'ishbiliyah',
                'city_id' => 3,
                'neCoordinates' => '24.80888958,46.81868016',
                'swCoordinates' => '24.77596240,46.76700190',
            ),
            124 =>
            array (
                'id' => 1256,
                'name_ar' => 'المعيزلة',
                'name_en' => 'al maizilah',
                'city_id' => 3,
                'neCoordinates' => '24.81818552,46.86037805',
                'swCoordinates' => '24.76452665,46.81618030',
            ),
            125 =>
            array (
                'id' => 1257,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 3,
                'neCoordinates' => '24.82407557,46.80956321',
                'swCoordinates' => '24.79086021,46.75880417',
            ),
            126 =>
            array (
                'id' => 1258,
                'name_ar' => 'المونسية',
                'name_en' => 'al munsiyah',
                'city_id' => 3,
                'neCoordinates' => '24.85746494,46.79456152',
                'swCoordinates' => '24.80721611,46.74321412',
            ),
            127 =>
            array (
                'id' => 1259,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 3,
                'neCoordinates' => '24.73596000,46.62393166',
                'swCoordinates' => '24.69092345,46.56919207',
            ),
            128 =>
            array (
                'id' => 1260,
                'name_ar' => 'عرقة',
                'name_en' => 'irqah',
                'city_id' => 3,
                'neCoordinates' => '24.70875890,46.61662963',
                'swCoordinates' => '24.66719055,46.48296243',
            ),
            129 =>
            array (
                'id' => 1261,
                'name_ar' => 'الدرعية',
                'name_en' => 'ad diriyah',
                'city_id' => 828,
                'neCoordinates' => '24.76972106,46.57610716',
                'swCoordinates' => '24.74056837,46.55562291',
            ),
            130 =>
            array (
                'id' => 1262,
                'name_ar' => 'الدرعية الجديدة',
                'name_en' => 'ad diriyah al jadidah',
                'city_id' => 828,
                'neCoordinates' => '24.76217789,46.55745279',
                'swCoordinates' => '24.74386842,46.51988442',
            ),
            131 =>
            array (
                'id' => 1263,
                'name_ar' => 'ظهرة لبن',
                'name_en' => 'dhahrat laban',
                'city_id' => 3,
                'neCoordinates' => '24.66286998,46.60498995',
                'swCoordinates' => '24.59737170,46.45747695',
            ),
            132 =>
            array (
                'id' => 1264,
                'name_ar' => 'الطريف',
                'name_en' => 'at tarif',
                'city_id' => 828,
                'neCoordinates' => '24.73530844,46.57851169',
                'swCoordinates' => '24.73137844,46.57327190',
            ),
            133 =>
            array (
                'id' => 1265,
                'name_ar' => 'الروقية',
                'name_en' => 'ar ruqiyah',
                'city_id' => 828,
                'neCoordinates' => '24.74283829,46.56720221',
                'swCoordinates' => '24.73802838,46.56141251',
            ),
            134 =>
            array (
                'id' => 1266,
                'name_ar' => 'حطين',
                'name_en' => 'hittin',
                'city_id' => 3,
                'neCoordinates' => '24.78579063,46.63005538',
                'swCoordinates' => '24.73596000,46.57327212',
            ),
            135 =>
            array (
                'id' => 1267,
                'name_ar' => 'الملقا',
                'name_en' => 'al malqa',
                'city_id' => 3,
                'neCoordinates' => '24.82620534,46.63141942',
                'swCoordinates' => '24.77442759,46.56559260',
            ),
            136 =>
            array (
                'id' => 1268,
                'name_ar' => 'القيروان',
                'name_en' => 'al qirawan',
                'city_id' => 3,
                'neCoordinates' => '24.95041792,46.61482538',
                'swCoordinates' => '24.79637715,46.49768078',
            ),
            137 =>
            array (
                'id' => 1269,
                'name_ar' => 'الياسمين',
                'name_en' => 'al yasmin',
                'city_id' => 3,
                'neCoordinates' => '24.84266465,46.67053265',
                'swCoordinates' => '24.80022902,46.61482538',
            ),
            138 =>
            array (
                'id' => 1270,
                'name_ar' => 'العارض',
                'name_en' => 'al arid',
                'city_id' => 3,
                'neCoordinates' => '24.97041041,46.65403318',
                'swCoordinates' => '24.82620534,46.55171730',
            ),
            139 =>
            array (
                'id' => 1271,
                'name_ar' => 'مطار الملك خالد',
                'name_en' => 'king khalid airport',
                'city_id' => 3,
                'neCoordinates' => '25.02039201,46.80535359',
                'swCoordinates' => '24.81855605,46.59555686',
            ),
            140 =>
            array (
                'id' => 1272,
                'name_ar' => 'النرجس',
                'name_en' => 'an narjis',
                'city_id' => 3,
                'neCoordinates' => '24.97967194,46.70182688',
                'swCoordinates' => '24.80989579,46.58884073',
            ),
            141 =>
            array (
                'id' => 1273,
                'name_ar' => 'جامعة الامام',
                'name_en' => 'al imam university',
                'city_id' => 3,
                'neCoordinates' => '24.82521585,46.71934525',
                'swCoordinates' => '24.80110004,46.68843551',
            ),
            142 =>
            array (
                'id' => 1274,
                'name_ar' => 'بنبان',
                'name_en' => 'banban',
                'city_id' => 3,
                'neCoordinates' => '25.05699910,46.61221665',
                'swCoordinates' => '24.91289217,46.45714895',
            ),
            143 =>
            array (
                'id' => 1275,
                'name_ar' => 'الرمال',
                'name_en' => 'ar rimal',
                'city_id' => 3,
                'neCoordinates' => '25.02173100,46.85173880',
                'swCoordinates' => '24.82239553,46.66820375',
            ),
            144 =>
            array (
                'id' => 1276,
                'name_ar' => 'الشرق',
                'name_en' => 'ash sharq',
                'city_id' => 3,
                'neCoordinates' => '24.98126520,47.02152082',
                'swCoordinates' => '24.83907494,46.83477195',
            ),
            145 =>
            array (
                'id' => 1277,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 3,
                'neCoordinates' => '24.80728410,46.76700190',
                'swCoordinates' => '24.78337150,46.74091420',
            ),
            146 =>
            array (
                'id' => 1279,
                'name_ar' => 'الدحو',
                'name_en' => 'al dho',
                'city_id' => 3,
                'neCoordinates' => '24.63071612,46.71693292',
                'swCoordinates' => '24.62751248,46.71281863',
            ),
            147 =>
            array (
                'id' => 1280,
                'name_ar' => 'العماجية',
                'name_en' => 'al umjiah',
                'city_id' => 3,
                'neCoordinates' => '24.44423425,46.98350193',
                'swCoordinates' => '24.43529122,46.97267623',
            ),
            148 =>
            array (
                'id' => 1281,
                'name_ar' => 'هيت',
                'name_en' => 'hyt',
                'city_id' => 3,
                'neCoordinates' => '24.51721463,47.02342117',
                'swCoordinates' => '24.43857746,46.93622003',
            ),
            149 =>
            array (
                'id' => 1282,
                'name_ar' => 'الحائر',
                'name_en' => 'al haeer',
                'city_id' => 3,
                'neCoordinates' => '24.48775305,46.88523457',
                'swCoordinates' => '24.38307642,46.79893475',
            ),
            150 =>
            array (
                'id' => 1284,
                'name_ar' => 'ام الشعال',
                'name_en' => 'um alshal',
                'city_id' => 3,
                'neCoordinates' => '24.40634991,46.99033183',
                'swCoordinates' => '24.30968823,46.94327413',
            ),
            151 =>
            array (
                'id' => 1285,
                'name_ar' => ' الغنامية',
                'name_en' => 'al ghnamiah',
                'city_id' => 3,
                'neCoordinates' => '24.49626342,46.85195801',
                'swCoordinates' => '24.45487558,46.79036399',
            ),
            152 =>
            array (
                'id' => 1286,
                'name_ar' => 'عريض',
                'name_en' => 'areed',
                'city_id' => 3,
                'neCoordinates' => '24.50321138,46.83204255',
                'swCoordinates' => '24.38461555,46.61108857',
            ),
            153 =>
            array (
                'id' => 1287,
                'name_ar' => 'بدر',
                'name_en' => 'badr',
                'city_id' => 3,
                'neCoordinates' => '24.56980631,46.78422406',
                'swCoordinates' => '24.49459840,46.67788725',
            ),
            154 =>
            array (
                'id' => 1288,
                'name_ar' => 'المهدية',
                'name_en' => 'al mahdiyah',
                'city_id' => 3,
                'neCoordinates' => '24.67553869,46.60558671',
                'swCoordinates' => '24.61842469,46.46633624',
            ),
            155 =>
            array (
                'id' => 1289,
                'name_ar' => 'جامعة الملك سعود',
                'name_en' => 'king saud university',
                'city_id' => 3,
                'neCoordinates' => '24.74378827,46.64752226',
                'swCoordinates' => '24.70355713,46.60284675',
            ),
            156 =>
            array (
                'id' => 1290,
                'name_ar' => 'النسيم الغربي',
                'name_en' => 'an nasim al gharbi',
                'city_id' => 3,
                'neCoordinates' => '24.75051359,46.84885949',
                'swCoordinates' => '24.70009307,46.80041077',
            ),
            157 =>
            array (
                'id' => 1291,
                'name_ar' => 'التحلية',
                'name_en' => 'at tahliyah',
                'city_id' => 31,
                'neCoordinates' => '26.20104134,50.21687308',
                'swCoordinates' => '26.15077946,50.17741844',
            ),
            158 =>
            array (
                'id' => 1292,
                'name_ar' => 'ابن سيناء',
                'name_en' => 'ibn sina',
                'city_id' => 31,
                'neCoordinates' => '26.25028821,50.21463359',
                'swCoordinates' => '26.23341390,50.19496247',
            ),
            159 =>
            array (
                'id' => 1293,
                'name_ar' => 'الحزام الاخضر',
                'name_en' => 'al hizam al akhdar',
                'city_id' => 31,
                'neCoordinates' => '26.31265178,50.21157009',
                'swCoordinates' => '26.30216507,50.19048766',
            ),
            160 =>
            array (
                'id' => 1294,
                'name_ar' => 'صناعية الثقبة',
                'name_en' => 'sinaiyah ath thuqbah',
                'city_id' => 31,
                'neCoordinates' => '26.26287587,50.20528629',
                'swCoordinates' => '26.24891904,50.19175368',
            ),
            161 =>
            array (
                'id' => 1295,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawn',
                'city_id' => 31,
                'neCoordinates' => '26.24200094,50.19703586',
                'swCoordinates' => '26.21354281,50.17240977',
            ),
            162 =>
            array (
                'id' => 1296,
                'name_ar' => 'الراكة الجنوبية',
                'name_en' => 'ar rakah al janubiyah',
                'city_id' => 31,
                'neCoordinates' => '26.36622151,50.21209861',
                'swCoordinates' => '26.33616944,50.18851602',
            ),
            163 =>
            array (
                'id' => 1297,
                'name_ar' => 'الخبر الشمالية',
                'name_en' => 'al khubar ash shamaliyah',
                'city_id' => 31,
                'neCoordinates' => '26.30216507,50.22262717',
                'swCoordinates' => '26.27864360,50.20528417',
            ),
            164 =>
            array (
                'id' => 1298,
                'name_ar' => 'مدينة العمال',
                'name_en' => 'madinat al ummal',
                'city_id' => 31,
                'neCoordinates' => '26.30344724,50.21020519',
                'swCoordinates' => '26.28120071,50.19802842',
            ),
            165 =>
            array (
                'id' => 1299,
                'name_ar' => 'العقربية',
                'name_en' => 'al aqrabiyah',
                'city_id' => 31,
                'neCoordinates' => '26.30616927,50.20216181',
                'swCoordinates' => '26.28335836,50.18396815',
            ),
            166 =>
            array (
                'id' => 1300,
                'name_ar' => 'الخبر الجنوبية',
                'name_en' => 'al khubar al janubiyah',
                'city_id' => 31,
                'neCoordinates' => '26.28335836,50.21828367',
                'swCoordinates' => '26.26288988,50.19752505',
            ),
            167 =>
            array (
                'id' => 1301,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 31,
                'neCoordinates' => '26.33842863,50.21519688',
                'swCoordinates' => '26.32462541,50.20031384',
            ),
            168 =>
            array (
                'id' => 1302,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmok',
                'city_id' => 31,
                'neCoordinates' => '26.32253987,50.22436483',
                'swCoordinates' => '26.30009110,50.21612648',
            ),
            169 =>
            array (
                'id' => 1303,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 31,
                'neCoordinates' => '26.35376942,50.20031384',
                'swCoordinates' => '26.33215554,50.17923758',
            ),
            170 =>
            array (
                'id' => 1304,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 31,
                'neCoordinates' => '26.33616944,50.20644084',
                'swCoordinates' => '26.32128595,50.18863516',
            ),
            171 =>
            array (
                'id' => 1305,
                'name_ar' => 'الحزام الذهبي',
                'name_en' => 'al hizam adh dhahabi',
                'city_id' => 31,
                'neCoordinates' => '26.32462541,50.21204351',
                'swCoordinates' => '26.30940094,50.18996629',
            ),
            172 =>
            array (
                'id' => 1306,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 31,
                'neCoordinates' => '26.33381085,50.19195970',
                'swCoordinates' => '26.31265178,50.17959536',
            ),
            173 =>
            array (
                'id' => 1307,
                'name_ar' => 'الهدا',
                'name_en' => 'al hada',
                'city_id' => 31,
                'neCoordinates' => '26.31454687,50.19190395',
                'swCoordinates' => '26.30538644,50.17627284',
            ),
            174 =>
            array (
                'id' => 1308,
                'name_ar' => 'البندرية',
                'name_en' => 'al bandariyah',
                'city_id' => 31,
                'neCoordinates' => '26.31721857,50.21808669',
                'swCoordinates' => '26.30092141,50.21020519',
            ),
            175 =>
            array (
                'id' => 1309,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 31,
                'neCoordinates' => '26.32634500,50.21712585',
                'swCoordinates' => '26.31661566,50.20644084',
            ),
            176 =>
            array (
                'id' => 1310,
                'name_ar' => 'الثقبة',
                'name_en' => 'ath thuqbah',
                'city_id' => 31,
                'neCoordinates' => '26.28976653,50.20528335',
                'swCoordinates' => '26.25816961,50.17678379',
            ),
            177 =>
            array (
                'id' => 1311,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 31,
                'neCoordinates' => '26.30773693,50.18983221',
                'swCoordinates' => '26.28577194,50.16562533',
            ),
            178 =>
            array (
                'id' => 1312,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 31,
                'neCoordinates' => '26.26584700,50.21584765',
                'swCoordinates' => '26.24948073,50.20333470',
            ),
            179 =>
            array (
                'id' => 1313,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 31,
                'neCoordinates' => '26.23511782,50.21433249',
                'swCoordinates' => '26.21737346,50.19499995',
            ),
            180 =>
            array (
                'id' => 1314,
                'name_ar' => 'الجسر',
                'name_en' => 'al jisr',
                'city_id' => 31,
                'neCoordinates' => '26.21886251,50.21377506',
                'swCoordinates' => '26.20057824,50.19624147',
            ),
            181 =>
            array (
                'id' => 1315,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 31,
                'neCoordinates' => '26.21737346,50.19785679',
                'swCoordinates' => '26.19491046,50.17246367',
            ),
            182 =>
            array (
                'id' => 1316,
                'name_ar' => 'الدوحة الجنوبية',
                'name_en' => 'ad dawhah al janubiyah',
                'city_id' => 227,
                'neCoordinates' => '26.33415821,50.17999939',
                'swCoordinates' => '26.29761493,50.15028570',
            ),
            183 =>
            array (
                'id' => 1317,
                'name_ar' => 'الدانة الشمالية',
                'name_en' => 'ad danah ash shamaliyah',
                'city_id' => 227,
                'neCoordinates' => '26.34434816,50.15483532',
                'swCoordinates' => '26.32804158,50.13288422',
            ),
            184 =>
            array (
                'id' => 1318,
                'name_ar' => 'القصور',
                'name_en' => 'al qusur',
                'city_id' => 227,
                'neCoordinates' => '26.36177202,50.16590198',
                'swCoordinates' => '26.33538159,50.13711566',
            ),
            185 =>
            array (
                'id' => 1319,
                'name_ar' => 'الدوحة الشمالية',
                'name_en' => 'ad dawhah ash shamaliyah',
                'city_id' => 227,
                'neCoordinates' => '26.34419740,50.17959536',
                'swCoordinates' => '26.32910481,50.15391009',
            ),
            186 =>
            array (
                'id' => 1320,
                'name_ar' => 'الدانة الجنوبية',
                'name_en' => 'ad danah al janubiyah',
                'city_id' => 227,
                'neCoordinates' => '26.33332608,50.15586702',
                'swCoordinates' => '26.32085581,50.14202538',
            ),
            187 =>
            array (
                'id' => 1321,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 227,
                'neCoordinates' => '26.35309556,50.14596194',
                'swCoordinates' => '26.33353764,50.11451210',
            ),
            188 =>
            array (
                'id' => 1322,
                'name_ar' => 'الخالدية الشمالية',
                'name_en' => 'al khalidiyah ash shamaliyah',
                'city_id' => 13,
                'neCoordinates' => '26.43107848,50.16200835',
                'swCoordinates' => '26.39557245,50.13173162',
            ),
            189 =>
            array (
                'id' => 1323,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasriyah',
                'city_id' => 13,
                'neCoordinates' => '26.42989434,50.13049070',
                'swCoordinates' => '26.41372899,50.11553429',
            ),
            190 =>
            array (
                'id' => 1324,
                'name_ar' => 'الصناعية الاولى',
                'name_en' => 'industrial area no1',
                'city_id' => 13,
                'neCoordinates' => '26.41197471,50.15228409',
                'swCoordinates' => '26.38382513,50.12959698',
            ),
            191 =>
            array (
                'id' => 1325,
                'name_ar' => 'المدينة الرياضية',
                'name_en' => 'sporting city',
                'city_id' => 31,
                'neCoordinates' => '26.37018832,50.19093160',
                'swCoordinates' => '26.34815478,50.17867370',
            ),
            192 =>
            array (
                'id' => 1326,
                'name_ar' => 'الفنار',
                'name_en' => 'al fanar',
                'city_id' => 13,
                'neCoordinates' => '26.42189631,50.22083972',
                'swCoordinates' => '26.39523417,50.18147811',
            ),
            193 =>
            array (
                'id' => 1327,
                'name_ar' => 'الأثير',
                'name_en' => 'al athir',
                'city_id' => 13,
                'neCoordinates' => '26.44044607,50.07076336',
                'swCoordinates' => '26.42148188,50.05073127',
            ),
            194 =>
            array (
                'id' => 1328,
                'name_ar' => 'الجلوية',
                'name_en' => 'al jalawiyah',
                'city_id' => 13,
                'neCoordinates' => '26.44182125,50.08561934',
                'swCoordinates' => '26.42617982,50.06513670',
            ),
            195 =>
            array (
                'id' => 1329,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 13,
                'neCoordinates' => '26.44290586,50.09702485',
                'swCoordinates' => '26.43353336,50.08216578',
            ),
            196 =>
            array (
                'id' => 1330,
                'name_ar' => 'القزاز',
                'name_en' => 'al qazaz',
                'city_id' => 13,
                'neCoordinates' => '26.43808057,50.09701861',
                'swCoordinates' => '26.43245878,50.08561934',
            ),
            197 =>
            array (
                'id' => 1331,
                'name_ar' => 'البادية',
                'name_en' => 'al badiyah',
                'city_id' => 13,
                'neCoordinates' => '26.43249524,50.09701138',
                'swCoordinates' => '26.42034775,50.08586636',
            ),
            198 =>
            array (
                'id' => 1332,
                'name_ar' => 'الدواسر',
                'name_en' => 'ad dawasir',
                'city_id' => 13,
                'neCoordinates' => '26.44819943,50.10868764',
                'swCoordinates' => '26.44178336,50.09700386',
            ),
            199 =>
            array (
                'id' => 1333,
                'name_ar' => 'العنود',
                'name_en' => 'al anud',
                'city_id' => 13,
                'neCoordinates' => '26.45304014,50.08214808',
                'swCoordinates' => '26.44044607,50.06303903',
            ),
            200 =>
            array (
                'id' => 1334,
                'name_ar' => 'الحرس الوطني',
                'name_en' => 'al haras al watani',
                'city_id' => 227,
                'neCoordinates' => '26.39366454,50.17950589',
                'swCoordinates' => '26.33722772,50.14556169',
            ),
            201 =>
            array (
                'id' => 1335,
                'name_ar' => 'الشاطئ الغربي',
                'name_en' => 'ash shati al gharbi',
                'city_id' => 13,
                'neCoordinates' => '26.49785236,50.13051144',
                'swCoordinates' => '26.45306249,50.11213239',
            ),
            202 =>
            array (
                'id' => 1336,
                'name_ar' => 'الضباب',
                'name_en' => 'ad dabab',
                'city_id' => 13,
                'neCoordinates' => '26.43723889,50.06819869',
                'swCoordinates' => '26.40596254,50.04092904',
            ),
            203 =>
            array (
                'id' => 1337,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 13,
                'neCoordinates' => '26.39700224,50.06255310',
                'swCoordinates' => '26.35440711,50.02200854',
            ),
            204 =>
            array (
                'id' => 1338,
                'name_ar' => 'النور',
                'name_en' => 'an nur',
                'city_id' => 13,
                'neCoordinates' => '26.44264882,50.04092904',
                'swCoordinates' => '26.41572251,50.01143257',
            ),
            205 =>
            array (
                'id' => 1339,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 13,
                'neCoordinates' => '26.45837008,50.10912570',
                'swCoordinates' => '26.44605309,50.09700386',
            ),
            206 =>
            array (
                'id' => 1340,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 13,
                'neCoordinates' => '26.45867800,50.09781411',
                'swCoordinates' => '26.44819943,50.08120678',
            ),
            207 =>
            array (
                'id' => 1341,
                'name_ar' => 'المريكبات',
                'name_en' => 'al muraikabat',
                'city_id' => 13,
                'neCoordinates' => '26.42000727,50.11077204',
                'swCoordinates' => '26.40322321,50.09062850',
            ),
            208 =>
            array (
                'id' => 1342,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 13,
                'neCoordinates' => '26.39061927,50.15012690',
                'swCoordinates' => '26.36437510,50.13217673',
            ),
            209 =>
            array (
                'id' => 1343,
                'name_ar' => 'ضاحية الملك فهد',
                'name_en' => 'dahiyat al malik fahd',
                'city_id' => 13,
                'neCoordinates' => '26.46956866,50.02200854',
                'swCoordinates' => '26.37077800,49.96821173',
            ),
            210 =>
            array (
                'id' => 1344,
                'name_ar' => 'السيف',
                'name_en' => 'as saif',
                'city_id' => 13,
                'neCoordinates' => '26.40544142,50.23468329',
                'swCoordinates' => '26.37470619,50.18960876',
            ),
            211 =>
            array (
                'id' => 1345,
                'name_ar' => 'الصناعية',
                'name_en' => 'industrial',
                'city_id' => 13,
                'neCoordinates' => '26.46758560,50.04025359',
                'swCoordinates' => '26.43247175,50.00868567',
            ),
            212 =>
            array (
                'id' => 1346,
                'name_ar' => 'احد',
                'name_en' => 'uhud',
                'city_id' => 13,
                'neCoordinates' => '26.42922505,50.06098597',
                'swCoordinates' => '26.39700224,50.02637943',
            ),
            213 =>
            array (
                'id' => 1347,
                'name_ar' => 'بدر',
                'name_en' => 'badr',
                'city_id' => 13,
                'neCoordinates' => '26.42095679,50.04328225',
                'swCoordinates' => '26.38403965,50.01259757',
            ),
            214 =>
            array (
                'id' => 1348,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 13,
                'neCoordinates' => '26.44971159,50.09702485',
                'swCoordinates' => '26.44178377,50.08100284',
            ),
            215 =>
            array (
                'id' => 1349,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 13,
                'neCoordinates' => '26.41452399,50.09537163',
                'swCoordinates' => '26.38652668,50.06819869',
            ),
            216 =>
            array (
                'id' => 1350,
                'name_ar' => 'طيبة',
                'name_en' => 'taybah',
                'city_id' => 13,
                'neCoordinates' => '26.37432465,50.07369513',
                'swCoordinates' => '26.33875154,50.03070843',
            ),
            217 =>
            array (
                'id' => 1351,
                'name_ar' => 'الجامعيين',
                'name_en' => 'al jamiyin',
                'city_id' => 13,
                'neCoordinates' => '26.40322298,50.10516597',
                'swCoordinates' => '26.38189353,50.08958407',
            ),
            218 =>
            array (
                'id' => 1352,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 13,
                'neCoordinates' => '26.41344049,50.10420283',
                'swCoordinates' => '26.39588065,50.08310053',
            ),
            219 =>
            array (
                'id' => 1353,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 13,
                'neCoordinates' => '26.42617982,50.07794902',
                'swCoordinates' => '26.40965627,50.06177397',
            ),
            220 =>
            array (
                'id' => 1354,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 13,
                'neCoordinates' => '26.43353336,50.08935141',
                'swCoordinates' => '26.41452399,50.07076336',
            ),
            221 =>
            array (
                'id' => 1355,
                'name_ar' => 'تهامة',
                'name_en' => 'tihamah',
                'city_id' => 227,
                'neCoordinates' => '26.36036629,50.13711566',
                'swCoordinates' => '26.34840075,50.12764695',
            ),
            222 =>
            array (
                'id' => 1356,
                'name_ar' => 'العدامة',
                'name_en' => 'al adamah',
                'city_id' => 13,
                'neCoordinates' => '26.43808057,50.10828852',
                'swCoordinates' => '26.42420778,50.09700065',
            ),
            223 =>
            array (
                'id' => 1357,
                'name_ar' => 'الامير محمد بن سعود',
                'name_en' => 'al amir muhammed ibn saud',
                'city_id' => 13,
                'neCoordinates' => '26.43800795,50.11848729',
                'swCoordinates' => '26.42461101,50.10823624',
            ),
            224 =>
            array (
                'id' => 1358,
                'name_ar' => 'الطبيشي',
                'name_en' => 'at tubayshi',
                'city_id' => 13,
                'neCoordinates' => '26.44040315,50.13108003',
                'swCoordinates' => '26.42424192,50.11843835',
            ),
            225 =>
            array (
                'id' => 1359,
                'name_ar' => 'المزروعية',
                'name_en' => 'al mazruiyah',
                'city_id' => 13,
                'neCoordinates' => '26.45306249,50.13236944',
                'swCoordinates' => '26.43229545,50.11843982',
            ),
            226 =>
            array (
                'id' => 1360,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 13,
                'neCoordinates' => '26.40217355,50.19550256',
                'swCoordinates' => '26.37293103,50.17591805',
            ),
            227 =>
            array (
                'id' => 1361,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 13,
                'neCoordinates' => '26.38484594,50.13976284',
                'swCoordinates' => '26.36837729,50.12192708',
            ),
            228 =>
            array (
                'id' => 1362,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 13,
                'neCoordinates' => '26.41077729,50.11952193',
                'swCoordinates' => '26.37460950,50.10420303',
            ),
            229 =>
            array (
                'id' => 1363,
                'name_ar' => 'الفردوس',
                'name_en' => 'al firdaws',
                'city_id' => 13,
                'neCoordinates' => '26.39061600,50.12479202',
                'swCoordinates' => '26.37277048,50.11077975',
            ),
            230 =>
            array (
                'id' => 1364,
                'name_ar' => 'قصر الخليج',
                'name_en' => 'qasr al khalij',
                'city_id' => 13,
                'neCoordinates' => '26.37277053,50.14694985',
                'swCoordinates' => '26.35309556,50.12479176',
            ),
            231 =>
            array (
                'id' => 1365,
                'name_ar' => 'المدينة الصناعية الثانية',
                'name_en' => 'industrial city 2',
                'city_id' => 13,
                'neCoordinates' => '26.26793493,50.00316047',
                'swCoordinates' => '26.22752854,49.96592770',
            ),
            232 =>
            array (
                'id' => 1366,
                'name_ar' => 'مطار الملك فهد الدولي',
                'name_en' => 'king fahd international airport',
                'city_id' => 13,
                'neCoordinates' => '26.52682218,49.92215714',
                'swCoordinates' => '26.42301354,49.74809909',
            ),
            233 =>
            array (
                'id' => 1367,
                'name_ar' => 'الخضرية',
                'name_en' => 'al kuthriah',
                'city_id' => 13,
                'neCoordinates' => '26.46499008,50.05857569',
                'swCoordinates' => '26.43723889,50.03020235',
            ),
            234 =>
            array (
                'id' => 1368,
                'name_ar' => 'مدينة العمال',
                'name_en' => 'madinat al umal',
                'city_id' => 13,
                'neCoordinates' => '26.42816255,50.11553429',
                'swCoordinates' => '26.41544307,50.10095443',
            ),
            235 =>
            array (
                'id' => 1369,
                'name_ar' => 'العمامرة',
                'name_en' => 'al amamrah',
                'city_id' => 13,
                'neCoordinates' => '26.44605309,50.11851730',
                'swCoordinates' => '26.44177100,50.10820032',
            ),
            236 =>
            array (
                'id' => 1370,
                'name_ar' => 'البديع',
                'name_en' => 'al badi',
                'city_id' => 13,
                'neCoordinates' => '26.45574145,50.12017470',
                'swCoordinates' => '26.44569369,50.10868764',
            ),
            237 =>
            array (
                'id' => 1371,
                'name_ar' => 'النابية',
                'name_en' => 'an nabiyah',
                'city_id' => 454,
                'neCoordinates' => '26.48232290,50.01457630',
                'swCoordinates' => '26.46830802,50.00002016',
            ),
            238 =>
            array (
                'id' => 1372,
                'name_ar' => 'الساحل',
                'name_en' => 'as sahil',
                'city_id' => 67,
                'neCoordinates' => '26.55789709,50.05484970',
                'swCoordinates' => '26.54615687,50.03789617',
            ),
            239 =>
            array (
                'id' => 1373,
                'name_ar' => 'المرجان',
                'name_en' => 'al murjan',
                'city_id' => 67,
                'neCoordinates' => '26.55871296,50.07506874',
                'swCoordinates' => '26.54370442,50.05439858',
            ),
            240 =>
            array (
                'id' => 1374,
                'name_ar' => 'الشاطئ الشرقي',
                'name_en' => 'ash shati ash sharqi',
                'city_id' => 13,
                'neCoordinates' => '26.49698381,50.13468756',
                'swCoordinates' => '26.45075314,50.12017470',
            ),
            241 =>
            array (
                'id' => 1375,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 13,
                'neCoordinates' => '26.45007942,50.05073127',
                'swCoordinates' => '26.42922505,50.02936630',
            ),
            242 =>
            array (
                'id' => 1376,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 13,
                'neCoordinates' => '26.42461101,50.12949550',
                'swCoordinates' => '26.39274947,50.10972420',
            ),
            243 =>
            array (
                'id' => 1377,
                'name_ar' => 'الراكة الشمالية',
                'name_en' => 'ar rakah ash shamaliyah',
                'city_id' => 13,
                'neCoordinates' => '26.37968959,50.20593607',
                'swCoordinates' => '26.35834007,50.17858325',
            ),
            244 =>
            array (
                'id' => 1378,
                'name_ar' => 'النورس',
                'name_en' => 'an nawras',
                'city_id' => 13,
                'neCoordinates' => '26.44435049,50.21451407',
                'swCoordinates' => '26.40217355,50.17516698',
            ),
            245 =>
            array (
                'id' => 1379,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 13,
                'neCoordinates' => '26.40965627,50.08208309',
                'swCoordinates' => '26.37432465,50.04328225',
            ),
            246 =>
            array (
                'id' => 1380,
                'name_ar' => 'الاتصالات',
                'name_en' => 'al itisalat',
                'city_id' => 13,
                'neCoordinates' => '26.42034775,50.09629801',
                'swCoordinates' => '26.40627119,50.07794902',
            ),
            247 =>
            array (
                'id' => 1381,
                'name_ar' => 'ابن خلدون',
                'name_en' => 'ibn khaldun',
                'city_id' => 13,
                'neCoordinates' => '26.42620773,50.10536816',
                'swCoordinates' => '26.41839497,50.08935141',
            ),
            248 =>
            array (
                'id' => 1382,
                'name_ar' => 'السوق',
                'name_en' => 'as suq',
                'city_id' => 13,
                'neCoordinates' => '26.44290586,50.10826340',
                'swCoordinates' => '26.43800795,50.09701861',
            ),
            249 =>
            array (
                'id' => 1383,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 13,
                'neCoordinates' => '26.44178336,50.11848743',
                'swCoordinates' => '26.43800544,50.10820032',
            ),
            250 =>
            array (
                'id' => 1384,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 13,
                'neCoordinates' => '26.48043903,50.09794977',
                'swCoordinates' => '26.45837008,50.08594390',
            ),
            251 =>
            array (
                'id' => 1385,
                'name_ar' => 'البحيرة',
                'name_en' => 'al buhayrah',
                'city_id' => 13,
                'neCoordinates' => '26.47370235,50.07314431',
                'swCoordinates' => '26.46219491,50.05889215',
            ),
            252 =>
            array (
                'id' => 1386,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 13,
                'neCoordinates' => '26.47463425,50.08637144',
                'swCoordinates' => '26.45851117,50.06733941',
            ),
            253 =>
            array (
                'id' => 1387,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 454,
                'neCoordinates' => '26.48814625,50.04238132',
                'swCoordinates' => '26.47559873,50.03304606',
            ),
            254 =>
            array (
                'id' => 1388,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 454,
                'neCoordinates' => '26.48287730,50.05889215',
                'swCoordinates' => '26.46696861,50.04594018',
            ),
            255 =>
            array (
                'id' => 1389,
                'name_ar' => 'الرابية',
                'name_en' => 'ar rabiyah',
                'city_id' => 13,
                'neCoordinates' => '26.46608517,50.04030459',
                'swCoordinates' => '26.45915941,50.02681782',
            ),
            256 =>
            array (
                'id' => 1390,
                'name_ar' => 'الفردوس',
                'name_en' => 'al firdaws',
                'city_id' => 454,
                'neCoordinates' => '26.48020161,50.04858549',
                'swCoordinates' => '26.46863654,50.04238132',
            ),
            257 =>
            array (
                'id' => 1391,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 454,
                'neCoordinates' => '26.47900639,50.04449699',
                'swCoordinates' => '26.47194795,50.03373879',
            ),
            258 =>
            array (
                'id' => 1392,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 454,
                'neCoordinates' => '26.50824050,50.04253836',
                'swCoordinates' => '26.49432009,50.02902834',
            ),
            259 =>
            array (
                'id' => 1393,
                'name_ar' => 'الدانة',
                'name_en' => 'ad danah',
                'city_id' => 13,
                'neCoordinates' => '26.46863194,50.04809866',
                'swCoordinates' => '26.46240554,50.03872688',
            ),
            260 =>
            array (
                'id' => 1394,
                'name_ar' => 'الطف',
                'name_en' => 'at tif',
                'city_id' => 454,
                'neCoordinates' => '26.49753585,50.03524338',
                'swCoordinates' => '26.48766234,50.02490334',
            ),
            261 =>
            array (
                'id' => 1395,
                'name_ar' => 'الخصاب',
                'name_en' => 'al khisab',
                'city_id' => 454,
                'neCoordinates' => '26.49834149,50.04053807',
                'swCoordinates' => '26.48785777,50.03152956',
            ),
            262 =>
            array (
                'id' => 1396,
                'name_ar' => 'الغدير',
                'name_en' => 'al ghadir',
                'city_id' => 454,
                'neCoordinates' => '26.49854122,50.05526536',
                'swCoordinates' => '26.48603495,50.04270269',
            ),
            263 =>
            array (
                'id' => 1397,
                'name_ar' => 'النقى',
                'name_en' => 'an naqa',
                'city_id' => 454,
                'neCoordinates' => '26.49037690,50.03396528',
                'swCoordinates' => '26.47462263,50.02847154',
            ),
            264 =>
            array (
                'id' => 1398,
                'name_ar' => 'المنتزة',
                'name_en' => 'al muntazah',
                'city_id' => 454,
                'neCoordinates' => '26.49615405,50.05390725',
                'swCoordinates' => '26.48020161,50.03464515',
            ),
            265 =>
            array (
                'id' => 1399,
                'name_ar' => 'الكوثر',
                'name_en' => 'al kawthar',
                'city_id' => 454,
                'neCoordinates' => '26.48932026,50.06727039',
                'swCoordinates' => '26.47085994,50.05017859',
            ),
            266 =>
            array (
                'id' => 1400,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 454,
                'neCoordinates' => '26.51356934,50.05019275',
                'swCoordinates' => '26.49588431,50.03560077',
            ),
            267 =>
            array (
                'id' => 1401,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 454,
                'neCoordinates' => '26.47559873,50.03824558',
                'swCoordinates' => '26.46481814,50.02089551',
            ),
            268 =>
            array (
                'id' => 1402,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 454,
                'neCoordinates' => '26.47381359,50.04660889',
                'swCoordinates' => '26.46222851,50.02396154',
            ),
            269 =>
            array (
                'id' => 1403,
                'name_ar' => 'النور',
                'name_en' => 'an nur',
                'city_id' => 454,
                'neCoordinates' => '26.48923864,50.04594018',
                'swCoordinates' => '26.47900639,50.03852656',
            ),
            270 =>
            array (
                'id' => 1404,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 13,
                'neCoordinates' => '26.47085994,50.06513670',
                'swCoordinates' => '26.43987718,50.04728746',
            ),
            271 =>
            array (
                'id' => 1405,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 13,
                'neCoordinates' => '26.46365619,50.08159192',
                'swCoordinates' => '26.44971159,50.06171162',
            ),
            272 =>
            array (
                'id' => 1406,
                'name_ar' => 'غرب النابية',
                'name_en' => 'gharb an nabiyah',
                'city_id' => 454,
                'neCoordinates' => '26.49150250,50.00903469',
                'swCoordinates' => '26.46424688,49.98912511',
            ),
            273 =>
            array (
                'id' => 1407,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 13,
                'neCoordinates' => '26.38811730,50.10494690',
                'swCoordinates' => '26.37048910,50.08222816',
            ),
            274 =>
            array (
                'id' => 1408,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 13,
                'neCoordinates' => '26.41393861,50.13160915',
                'swCoordinates' => '26.38243827,50.11889456',
            ),
            275 =>
            array (
                'id' => 1409,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 13,
                'neCoordinates' => '26.41856255,50.12723553',
                'swCoordinates' => '26.41047912,50.11904870',
            ),
            276 =>
            array (
                'id' => 1410,
                'name_ar' => 'القشلة',
                'name_en' => 'al qashlah',
                'city_id' => 227,
                'neCoordinates' => '26.37656965,50.17900138',
                'swCoordinates' => '26.35790516,50.16771659',
            ),
            277 =>
            array (
                'id' => 1411,
                'name_ar' => 'الصدفة',
                'name_en' => 'as sadafah',
                'city_id' => 13,
                'neCoordinates' => '26.38519390,50.24121951',
                'swCoordinates' => '26.36329827,50.19877907',
            ),
            278 =>
            array (
                'id' => 1412,
                'name_ar' => 'البحر',
                'name_en' => 'al bahar',
                'city_id' => 31,
                'neCoordinates' => '26.36646986,50.23447185',
                'swCoordinates' => '26.33768759,50.20685299',
            ),
            279 =>
            array (
                'id' => 1413,
                'name_ar' => 'مدينة الملك فيصل الجامعية',
                'name_en' => 'king faysal university',
                'city_id' => 13,
                'neCoordinates' => '26.41174760,50.22288065',
                'swCoordinates' => '26.38910149,50.18577139',
            ),
            280 =>
            array (
                'id' => 1414,
                'name_ar' => 'الحسام',
                'name_en' => 'al hussam',
                'city_id' => 13,
                'neCoordinates' => '26.41153133,50.18147811',
                'swCoordinates' => '26.37018832,50.16502309',
            ),
            281 =>
            array (
                'id' => 1415,
                'name_ar' => 'ميناء الملك عبدالعزيز',
                'name_en' => 'king abdul aziz seaport',
                'city_id' => 13,
                'neCoordinates' => '26.52491980,50.22014406',
                'swCoordinates' => '26.41153133,50.16202638',
            ),
            282 =>
            array (
                'id' => 1416,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 13,
                'neCoordinates' => '26.50390805,50.19345918',
                'swCoordinates' => '26.41956467,50.13305277',
            ),
            283 =>
            array (
                'id' => 1417,
                'name_ar' => 'الخالدية الجنوبية',
                'name_en' => 'al khalidiyah al janubiyah',
                'city_id' => 13,
                'neCoordinates' => '26.41956467,50.17516698',
                'swCoordinates' => '26.38232523,50.15008882',
            ),
            284 =>
            array (
                'id' => 1418,
                'name_ar' => 'الشعلة',
                'name_en' => 'ash shulah',
                'city_id' => 13,
                'neCoordinates' => '26.37048910,50.10860342',
                'swCoordinates' => '26.32857816,50.07358130',
            ),
            285 =>
            array (
                'id' => 1419,
                'name_ar' => 'هجر',
                'name_en' => 'hajr',
                'city_id' => 227,
                'neCoordinates' => '26.37497639,50.12988848',
                'swCoordinates' => '26.33654715,50.09354196',
            ),
            286 =>
            array (
                'id' => 1420,
                'name_ar' => 'غرب الظهران',
                'name_en' => 'gharb adh dhahran',
                'city_id' => 227,
                'neCoordinates' => '26.34018503,50.15405147',
                'swCoordinates' => '26.28249354,50.09282847',
            ),
            287 =>
            array (
                'id' => 1421,
                'name_ar' => 'جامعة الملك فهد للبترول والمعادن',
                'name_en' => 'kfupm',
                'city_id' => 227,
                'neCoordinates' => '26.32085581,50.16558610',
                'swCoordinates' => '26.29099367,50.13501519',
            ),
            288 =>
            array (
                'id' => 1422,
                'name_ar' => 'الأنوار',
                'name_en' => 'al anwar',
                'city_id' => 13,
                'neCoordinates' => '26.38403965,50.03070843',
                'swCoordinates' => '26.34597746,49.98842615',
            ),
            289 =>
            array (
                'id' => 1423,
                'name_ar' => 'الأمل',
                'name_en' => 'al amal',
                'city_id' => 13,
                'neCoordinates' => '26.35440711,50.03395065',
                'swCoordinates' => '26.33243819,50.00946562',
            ),
            290 =>
            array (
                'id' => 1424,
                'name_ar' => 'الشرق',
                'name_en' => 'ash sharq',
                'city_id' => 13,
                'neCoordinates' => '26.36980194,49.97332581',
                'swCoordinates' => '26.35861083,49.96473007',
            ),
            291 =>
            array (
                'id' => 1425,
                'name_ar' => 'الهضبة',
                'name_en' => 'al hadabah',
                'city_id' => 13,
                'neCoordinates' => '26.36238951,49.95750096',
                'swCoordinates' => '26.32727431,49.91909169',
            ),
            292 =>
            array (
                'id' => 1426,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 13,
                'neCoordinates' => '26.41170209,49.95620777',
                'swCoordinates' => '26.35313378,49.92712372',
            ),
            293 =>
            array (
                'id' => 1427,
                'name_ar' => 'الأمانة',
                'name_en' => 'al amanah',
                'city_id' => 13,
                'neCoordinates' => '26.39442957,49.97854994',
                'swCoordinates' => '26.37085910,49.95774165',
            ),
            294 =>
            array (
                'id' => 1428,
                'name_ar' => 'الفرسان',
                'name_en' => 'al fursan',
                'city_id' => 13,
                'neCoordinates' => '26.37595759,49.97261682',
                'swCoordinates' => '26.33613650,49.95563236',
            ),
            295 =>
            array (
                'id' => 1429,
                'name_ar' => 'الكورنيش',
                'name_en' => 'al kurnaish',
                'city_id' => 31,
                'neCoordinates' => '26.34005295,50.22951082',
                'swCoordinates' => '26.27457139,50.21209861',
            ),
            296 =>
            array (
                'id' => 1430,
                'name_ar' => 'صناعية الفوازية',
                'name_en' => 'sinaiyah al foaziah',
                'city_id' => 31,
                'neCoordinates' => '26.25066880,50.21597177',
                'swCoordinates' => '26.23718611,50.21183789',
            ),
            297 =>
            array (
                'id' => 1431,
                'name_ar' => 'الساحل',
                'name_en' => 'as sahil',
                'city_id' => 31,
                'neCoordinates' => '26.27850352,50.22106964',
                'swCoordinates' => '26.23769073,50.21376173',
            ),
            298 =>
            array (
                'id' => 1432,
                'name_ar' => 'الخور',
                'name_en' => 'al khawr',
                'city_id' => 31,
                'neCoordinates' => '26.23581349,50.22116548',
                'swCoordinates' => '26.21886251,50.21376760',
            ),
            299 =>
            array (
                'id' => 1433,
                'name_ar' => 'اشبيليا',
                'name_en' => 'ishbiliya',
                'city_id' => 31,
                'neCoordinates' => '26.21942905,50.22122458',
                'swCoordinates' => '26.18022469,50.21288140',
            ),
            300 =>
            array (
                'id' => 1434,
                'name_ar' => 'البحيرة',
                'name_en' => 'al buhayrah',
                'city_id' => 31,
                'neCoordinates' => '26.20089556,50.19230836',
                'swCoordinates' => '26.18146337,50.17076732',
            ),
            301 =>
            array (
                'id' => 1435,
                'name_ar' => 'الشراع',
                'name_en' => 'ash sheraa',
                'city_id' => 31,
                'neCoordinates' => '26.17633935,50.16330284',
                'swCoordinates' => '26.15103660,50.13297040',
            ),
            302 =>
            array (
                'id' => 1436,
                'name_ar' => 'الكوثر',
                'name_en' => 'al kawthar',
                'city_id' => 31,
                'neCoordinates' => '26.15863868,50.13297040',
                'swCoordinates' => '26.13901491,50.10146730',
            ),
            303 =>
            array (
                'id' => 1437,
                'name_ar' => 'الرجاء',
                'name_en' => 'ar raja',
                'city_id' => 31,
                'neCoordinates' => '26.17903542,50.13694594',
                'swCoordinates' => '26.15549338,50.11240059',
            ),
            304 =>
            array (
                'id' => 1438,
                'name_ar' => 'الصواري',
                'name_en' => 'as sawari',
                'city_id' => 31,
                'neCoordinates' => '26.19901329,50.16646034',
                'swCoordinates' => '26.17239844,50.13691073',
            ),
            305 =>
            array (
                'id' => 1439,
                'name_ar' => 'العقيق',
                'name_en' => 'al aqiq',
                'city_id' => 31,
                'neCoordinates' => '26.11017167,50.15775932',
                'swCoordinates' => '26.08114659,50.12847175',
            ),
            306 =>
            array (
                'id' => 1440,
                'name_ar' => 'المها',
                'name_en' => 'al maha',
                'city_id' => 31,
                'neCoordinates' => '26.19961402,50.14119764',
                'swCoordinates' => '26.17652465,50.12437667',
            ),
            307 =>
            array (
                'id' => 1441,
                'name_ar' => 'الامواج',
                'name_en' => 'al amwaj',
                'city_id' => 31,
                'neCoordinates' => '26.15549338,50.16252992',
                'swCoordinates' => '26.12738556,50.12896566',
            ),
            308 =>
            array (
                'id' => 1442,
                'name_ar' => 'اللؤلؤ',
                'name_en' => 'al lulu',
                'city_id' => 31,
                'neCoordinates' => '26.13309847,50.15886972',
                'swCoordinates' => '26.10381793,50.12802717',
            ),
            309 =>
            array (
                'id' => 1443,
                'name_ar' => 'المرجان',
                'name_en' => 'al murjan',
                'city_id' => 31,
                'neCoordinates' => '26.13919068,50.13010731',
                'swCoordinates' => '26.08778180,50.09784190',
            ),
            310 =>
            array (
                'id' => 1444,
                'name_ar' => 'السفن',
                'name_en' => 'as sufun',
                'city_id' => 31,
                'neCoordinates' => '26.17963536,50.17777501',
                'swCoordinates' => '26.09027271,50.15650321',
            ),
            311 =>
            array (
                'id' => 1445,
                'name_ar' => 'التلال',
                'name_en' => 'at talal',
                'city_id' => 2167,
                'neCoordinates' => '26.56415026,49.94895229',
                'swCoordinates' => '26.51247241,49.89712334',
            ),
            312 =>
            array (
                'id' => 1446,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 2167,
                'neCoordinates' => '26.55438087,49.91378086',
                'swCoordinates' => '26.53281980,49.88730077',
            ),
            313 =>
            array (
                'id' => 1447,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 2167,
                'neCoordinates' => '26.56657556,49.89712334',
                'swCoordinates' => '26.54764879,49.87604252',
            ),
            314 =>
            array (
                'id' => 1448,
                'name_ar' => 'الاوجام',
                'name_en' => 'al aujam',
                'city_id' => 2167,
                'neCoordinates' => '26.57648655,49.95611747',
                'swCoordinates' => '26.54695317,49.92914058',
            ),
            315 =>
            array (
                'id' => 1449,
                'name_ar' => 'البديع',
                'name_en' => 'al badia',
                'city_id' => 67,
                'neCoordinates' => '26.55902807,49.95935107',
                'swCoordinates' => '26.53508885,49.95418788',
            ),
            316 =>
            array (
                'id' => 1450,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 2167,
                'neCoordinates' => '26.59477647,49.93611286',
                'swCoordinates' => '26.55438087,49.88209690',
            ),
            317 =>
            array (
                'id' => 1451,
                'name_ar' => 'الريحان',
                'name_en' => 'ar raihan',
                'city_id' => 2167,
                'neCoordinates' => '26.51634925,49.94571268',
                'swCoordinates' => '26.49961454,49.93200147',
            ),
            318 =>
            array (
                'id' => 1452,
                'name_ar' => 'المها',
                'name_en' => 'al maha',
                'city_id' => 13,
                'neCoordinates' => '26.50648755,49.94811183',
                'swCoordinates' => '26.46348301,49.91989410',
            ),
            319 =>
            array (
                'id' => 1453,
                'name_ar' => 'العقيق',
                'name_en' => 'al aqiq',
                'city_id' => 2171,
                'neCoordinates' => '26.53309584,50.02942697',
                'swCoordinates' => '26.52610660,50.01314894',
            ),
            320 =>
            array (
                'id' => 1454,
                'name_ar' => 'منطقة المستودعات',
                'name_en' => 'warehouse area',
                'city_id' => 67,
                'neCoordinates' => '26.55022158,50.02804073',
                'swCoordinates' => '26.53267765,50.01015336',
            ),
            321 =>
            array (
                'id' => 1455,
                'name_ar' => 'البدر',
                'name_en' => 'al badr',
                'city_id' => 2171,
                'neCoordinates' => '26.51416632,50.03602589',
                'swCoordinates' => '26.50793467,50.02475300',
            ),
            322 =>
            array (
                'id' => 1456,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 2171,
                'neCoordinates' => '26.51950087,50.03568969',
                'swCoordinates' => '26.51312379,50.03009203',
            ),
            323 =>
            array (
                'id' => 1457,
                'name_ar' => 'المحار',
                'name_en' => 'al mahar',
                'city_id' => 2171,
                'neCoordinates' => '26.53157651,50.03420354',
                'swCoordinates' => '26.51856340,50.02538262',
            ),
            324 =>
            array (
                'id' => 1458,
                'name_ar' => 'عنك',
                'name_en' => 'anak',
                'city_id' => 2171,
                'neCoordinates' => '26.52943038,50.03072506',
                'swCoordinates' => '26.51222994,50.01662265',
            ),
            325 =>
            array (
                'id' => 1459,
                'name_ar' => 'الانوار',
                'name_en' => 'al anwar',
                'city_id' => 2171,
                'neCoordinates' => '26.53206365,50.01784724',
                'swCoordinates' => '26.51670064,49.99953084',
            ),
            326 =>
            array (
                'id' => 1460,
                'name_ar' => 'الملاحة',
                'name_en' => 'al mallahah',
                'city_id' => 2171,
                'neCoordinates' => '26.51895450,50.01007951',
                'swCoordinates' => '26.50529129,49.99507793',
            ),
            327 =>
            array (
                'id' => 1461,
                'name_ar' => 'المجيدية',
                'name_en' => 'al majidiyah',
                'city_id' => 67,
                'neCoordinates' => '26.55304270,50.03246444',
                'swCoordinates' => '26.53123423,50.01647035',
            ),
            328 =>
            array (
                'id' => 1462,
                'name_ar' => 'ام الحمام',
                'name_en' => 'umm al hamam',
                'city_id' => 2171,
                'neCoordinates' => '26.52744104,50.00079071',
                'swCoordinates' => '26.51489350,49.99506100',
            ),
            329 =>
            array (
                'id' => 1463,
                'name_ar' => 'الجش',
                'name_en' => 'al jish',
                'city_id' => 2171,
                'neCoordinates' => '26.52151341,49.99555224',
                'swCoordinates' => '26.51024900,49.98453142',
            ),
            330 =>
            array (
                'id' => 1464,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 456,
                'neCoordinates' => '26.56068044,50.08678417',
                'swCoordinates' => '26.54826331,50.07215057',
            ),
            331 =>
            array (
                'id' => 1465,
                'name_ar' => 'دارين',
                'name_en' => 'darin',
                'city_id' => 456,
                'neCoordinates' => '26.54841320,50.08091007',
                'swCoordinates' => '26.54145085,50.07097899',
            ),
            332 =>
            array (
                'id' => 1466,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 67,
                'neCoordinates' => '26.56905623,50.05439858',
                'swCoordinates' => '26.55593814,50.03625373',
            ),
            333 =>
            array (
                'id' => 1467,
                'name_ar' => 'الفتح',
                'name_en' => 'al fath',
                'city_id' => 67,
                'neCoordinates' => '26.57362674,50.05277629',
                'swCoordinates' => '26.56709207,50.03554523',
            ),
            334 =>
            array (
                'id' => 1468,
                'name_ar' => 'الزمرد',
                'name_en' => 'az zomorod',
                'city_id' => 456,
                'neCoordinates' => '26.57016036,50.07004496',
                'swCoordinates' => '26.56751004,50.06564265',
            ),
            335 =>
            array (
                'id' => 1469,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 67,
                'neCoordinates' => '26.58086357,50.03215812',
                'swCoordinates' => '26.57025617,50.02245345',
            ),
            336 =>
            array (
                'id' => 1470,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 67,
                'neCoordinates' => '26.59072637,50.05172848',
                'swCoordinates' => '26.58168486,50.04487123',
            ),
            337 =>
            array (
                'id' => 1471,
                'name_ar' => 'الصدفة',
                'name_en' => 'as sadafah',
                'city_id' => 456,
                'neCoordinates' => '26.57027523,50.08365038',
                'swCoordinates' => '26.55677245,50.06098134',
            ),
            338 =>
            array (
                'id' => 1472,
                'name_ar' => 'المناخ',
                'name_en' => 'al manakh',
                'city_id' => 456,
                'neCoordinates' => '26.57566572,50.07215057',
                'swCoordinates' => '26.55609748,50.05210995',
            ),
            339 =>
            array (
                'id' => 1473,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 67,
                'neCoordinates' => '26.59008154,50.04611973',
                'swCoordinates' => '26.57987421,50.02977360',
            ),
            340 =>
            array (
                'id' => 1474,
                'name_ar' => 'النرجس',
                'name_en' => 'an narjis',
                'city_id' => 456,
                'neCoordinates' => '26.59386127,50.08113236',
                'swCoordinates' => '26.58191966,50.07017908',
            ),
            341 =>
            array (
                'id' => 1475,
                'name_ar' => 'الربيعية',
                'name_en' => 'ar rabeiyah',
                'city_id' => 456,
                'neCoordinates' => '26.57668710,50.08471864',
                'swCoordinates' => '26.56151438,50.07334050',
            ),
            342 =>
            array (
                'id' => 1476,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 456,
                'neCoordinates' => '26.57973182,50.06783295',
                'swCoordinates' => '26.57199500,50.06015625',
            ),
            343 =>
            array (
                'id' => 1477,
                'name_ar' => 'اللؤلؤ',
                'name_en' => 'al lulu',
                'city_id' => 456,
                'neCoordinates' => '26.58279323,50.06043922',
                'swCoordinates' => '26.57371435,50.05172848',
            ),
            344 =>
            array (
                'id' => 1478,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 67,
                'neCoordinates' => '26.58234525,50.05306458',
                'swCoordinates' => '26.57123556,50.03090023',
            ),
            345 =>
            array (
                'id' => 1479,
                'name_ar' => 'الجامعيين',
                'name_en' => 'al jamiyin',
                'city_id' => 456,
                'neCoordinates' => '26.59783441,50.06366124',
                'swCoordinates' => '26.58103178,50.05050688',
            ),
            346 =>
            array (
                'id' => 1480,
                'name_ar' => 'سنابس',
                'name_en' => 'sanabis',
                'city_id' => 456,
                'neCoordinates' => '26.58738127,50.08799304',
                'swCoordinates' => '26.57708074,50.07938860',
            ),
            347 =>
            array (
                'id' => 1481,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 67,
                'neCoordinates' => '26.58559222,50.03099770',
                'swCoordinates' => '26.57919445,50.02455472',
            ),
            348 =>
            array (
                'id' => 1482,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 456,
                'neCoordinates' => '26.57296351,50.06760587',
                'swCoordinates' => '26.56962014,50.06358702',
            ),
            349 =>
            array (
                'id' => 1483,
                'name_ar' => 'الزور',
                'name_en' => 'az zour',
                'city_id' => 456,
                'neCoordinates' => '26.59605498,50.07955985',
                'swCoordinates' => '26.59286613,50.07548290',
            ),
            350 =>
            array (
                'id' => 1484,
                'name_ar' => 'الرضا',
                'name_en' => 'ar rida',
                'city_id' => 67,
                'neCoordinates' => '26.57164448,50.03789799',
                'swCoordinates' => '26.55564029,50.02315207',
            ),
            351 =>
            array (
                'id' => 1485,
                'name_ar' => 'اليمامة',
                'name_en' => 'al yamamah',
                'city_id' => 456,
                'neCoordinates' => '26.57780590,50.07728478',
                'swCoordinates' => '26.56867158,50.06699905',
            ),
            352 =>
            array (
                'id' => 1486,
                'name_ar' => 'الصواري',
                'name_en' => 'as sawari',
                'city_id' => 456,
                'neCoordinates' => '26.57820355,50.08947077',
                'swCoordinates' => '26.56055045,50.08268696',
            ),
            353 =>
            array (
                'id' => 1487,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 456,
                'neCoordinates' => '26.58628019,50.08395826',
                'swCoordinates' => '26.57468359,50.07416944',
            ),
            354 =>
            array (
                'id' => 1488,
                'name_ar' => 'الجبل',
                'name_en' => 'al jabal',
                'city_id' => 456,
                'neCoordinates' => '26.57619771,50.06569964',
                'swCoordinates' => '26.56932046,50.05871077',
            ),
            355 =>
            array (
                'id' => 1489,
                'name_ar' => 'الجارودية',
                'name_en' => 'al jarudiyah',
                'city_id' => 67,
                'neCoordinates' => '26.54738950,49.99482649',
                'swCoordinates' => '26.53600647,49.98048841',
            ),
            356 =>
            array (
                'id' => 1490,
                'name_ar' => 'الاسكان',
                'name_en' => 'al iskan',
                'city_id' => 2171,
                'neCoordinates' => '26.52548875,49.98347284',
                'swCoordinates' => '26.51282644,49.96940485',
            ),
            357 =>
            array (
                'id' => 1491,
                'name_ar' => 'حلة محيش',
                'name_en' => 'halat mahish',
                'city_id' => 67,
                'neCoordinates' => '26.54175745,50.00313608',
                'swCoordinates' => '26.53454370,49.99263517',
            ),
            358 =>
            array (
                'id' => 1492,
                'name_ar' => 'الياقوت',
                'name_en' => 'al yaqut',
                'city_id' => 67,
                'neCoordinates' => '26.54571797,49.98624440',
                'swCoordinates' => '26.52493205,49.96765233',
            ),
            359 =>
            array (
                'id' => 1493,
                'name_ar' => 'البديعة',
                'name_en' => 'al badiah',
                'city_id' => 67,
                'neCoordinates' => '26.54351597,49.97989407',
                'swCoordinates' => '26.52540253,49.96260757',
            ),
            360 =>
            array (
                'id' => 1494,
                'name_ar' => 'الراية',
                'name_en' => 'ar rayah',
                'city_id' => 2171,
                'neCoordinates' => '26.52586292,49.98754942',
                'swCoordinates' => '26.50770402,49.97231341',
            ),
            361 =>
            array (
                'id' => 1495,
                'name_ar' => 'الدبابية',
                'name_en' => 'ad dababiyyah',
                'city_id' => 67,
                'neCoordinates' => '26.55448814,50.00499219',
                'swCoordinates' => '26.54801031,49.99971840',
            ),
            362 =>
            array (
                'id' => 1496,
                'name_ar' => 'الخامسة',
                'name_en' => 'al khamisah',
                'city_id' => 67,
                'neCoordinates' => '26.56070850,50.02250847',
                'swCoordinates' => '26.55022158,50.01328397',
            ),
            363 =>
            array (
                'id' => 1497,
                'name_ar' => 'ام الجزم',
                'name_en' => 'umm al jazm',
                'city_id' => 67,
                'neCoordinates' => '26.55313006,50.00156796',
                'swCoordinates' => '26.55080239,49.99907136',
            ),
            364 =>
            array (
                'id' => 1498,
                'name_ar' => 'بديعة البصري',
                'name_en' => 'badiah al basri',
                'city_id' => 67,
                'neCoordinates' => '26.56074601,50.01072038',
                'swCoordinates' => '26.55487232,50.00705105',
            ),
            365 =>
            array (
                'id' => 1499,
                'name_ar' => 'المشتل',
                'name_en' => 'al mashtal',
                'city_id' => 67,
                'neCoordinates' => '26.57540570,49.98338075',
                'swCoordinates' => '26.56040955,49.96641511',
            ),
            366 =>
            array (
                'id' => 1500,
                'name_ar' => 'الزمرد',
                'name_en' => 'az zomorod',
                'city_id' => 67,
                'neCoordinates' => '26.55080239,50.00381891',
                'swCoordinates' => '26.54337978,49.99382424',
            ),
            367 =>
            array (
                'id' => 1501,
                'name_ar' => 'الناصرة',
                'name_en' => 'an nasirah',
                'city_id' => 67,
                'neCoordinates' => '26.58396757,50.02391204',
                'swCoordinates' => '26.56711023,50.00220594',
            ),
            368 =>
            array (
                'id' => 1502,
                'name_ar' => 'البحاري',
                'name_en' => 'al bahari',
                'city_id' => 67,
                'neCoordinates' => '26.57200771,49.99854874',
                'swCoordinates' => '26.56390807,49.98843197',
            ),
            369 =>
            array (
                'id' => 1503,
                'name_ar' => 'مياس',
                'name_en' => 'mayyas',
                'city_id' => 67,
                'neCoordinates' => '26.55737061,50.00488893',
                'swCoordinates' => '26.55356724,50.00177013',
            ),
            370 =>
            array (
                'id' => 1504,
                'name_ar' => 'الجواهر',
                'name_en' => 'al jawahir',
                'city_id' => 67,
                'neCoordinates' => '26.58997220,50.01059841',
                'swCoordinates' => '26.58170786,50.00360043',
            ),
            371 =>
            array (
                'id' => 1505,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 67,
                'neCoordinates' => '26.57014089,50.02422122',
                'swCoordinates' => '26.56033796,50.01209526',
            ),
            372 =>
            array (
                'id' => 1506,
                'name_ar' => 'التوبي',
                'name_en' => 'at tawbi',
                'city_id' => 67,
                'neCoordinates' => '26.55861911,49.99971840',
                'swCoordinates' => '26.54946277,49.99064433',
            ),
            373 =>
            array (
                'id' => 1507,
                'name_ar' => 'الجراري',
                'name_en' => 'al jarrari',
                'city_id' => 67,
                'neCoordinates' => '26.55905691,50.00451755',
                'swCoordinates' => '26.55730826,50.00175932',
            ),
            374 =>
            array (
                'id' => 1508,
                'name_ar' => 'الشهباء',
                'name_en' => 'ash shahba',
                'city_id' => 67,
                'neCoordinates' => '26.56505979,49.99854413',
                'swCoordinates' => '26.55604387,49.96671497',
            ),
            375 =>
            array (
                'id' => 1509,
                'name_ar' => 'القديح',
                'name_en' => 'al qadih',
                'city_id' => 67,
                'neCoordinates' => '26.57569113,49.99241360',
                'swCoordinates' => '26.56308557,49.98040519',
            ),
            376 =>
            array (
                'id' => 1510,
                'name_ar' => 'المدارس',
                'name_en' => 'al madaris',
                'city_id' => 67,
                'neCoordinates' => '26.55737284,50.00203231',
                'swCoordinates' => '26.55497998,49.99867379',
            ),
            377 =>
            array (
                'id' => 1511,
                'name_ar' => 'الشماسيه',
                'name_en' => 'ash shamasiyyah',
                'city_id' => 67,
                'neCoordinates' => '26.56256503,50.00693474',
                'swCoordinates' => '26.56082461,50.00438639',
            ),
            378 =>
            array (
                'id' => 1512,
                'name_ar' => 'باب الساب',
                'name_en' => 'bab as sab',
                'city_id' => 67,
                'neCoordinates' => '26.56730002,50.00442296',
                'swCoordinates' => '26.56186772,49.99857240',
            ),
            379 =>
            array (
                'id' => 1513,
                'name_ar' => 'الجميمة',
                'name_en' => 'al jamiymah',
                'city_id' => 67,
                'neCoordinates' => '26.59063124,49.98338691',
                'swCoordinates' => '26.57819495,49.97159983',
            ),
            380 =>
            array (
                'id' => 1514,
                'name_ar' => 'المسعودية',
                'name_en' => 'al masudiyah',
                'city_id' => 67,
                'neCoordinates' => '26.55103038,50.00816146',
                'swCoordinates' => '26.54050858,50.00221290',
            ),
            381 =>
            array (
                'id' => 1515,
                'name_ar' => 'الخويلدية',
                'name_en' => 'al khuwaildiyah',
                'city_id' => 67,
                'neCoordinates' => '26.55367238,49.99442180',
                'swCoordinates' => '26.54654003,49.98577138',
            ),
            382 =>
            array (
                'id' => 1516,
                'name_ar' => 'العوامية',
                'name_en' => 'al awamiyah',
                'city_id' => 67,
                'neCoordinates' => '26.59528234,49.98707535',
                'swCoordinates' => '26.57929624,49.97986249',
            ),
            383 =>
            array (
                'id' => 1517,
                'name_ar' => 'الدويج',
                'name_en' => 'ad doij',
                'city_id' => 67,
                'neCoordinates' => '26.55541980,50.00215227',
                'swCoordinates' => '26.55305197,49.99884432',
            ),
            384 =>
            array (
                'id' => 1518,
                'name_ar' => 'الرابعة',
                'name_en' => 'ar rabiah',
                'city_id' => 67,
                'neCoordinates' => '26.56592511,50.01418799',
                'swCoordinates' => '26.55536834,50.00950461',
            ),
            385 =>
            array (
                'id' => 1519,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 67,
                'neCoordinates' => '26.56288757,50.00445012',
                'swCoordinates' => '26.56097372,50.00135377',
            ),
            386 =>
            array (
                'id' => 1520,
                'name_ar' => 'الجزيرة',
                'name_en' => 'al jazirah',
                'city_id' => 67,
                'neCoordinates' => '26.55594760,50.01647035',
                'swCoordinates' => '26.54878343,50.01072038',
            ),
            387 =>
            array (
                'id' => 1521,
                'name_ar' => 'الشريعة',
                'name_en' => 'ash shariah',
                'city_id' => 67,
                'neCoordinates' => '26.55820027,50.00744866',
                'swCoordinates' => '26.55448814,50.00452048',
            ),
            388 =>
            array (
                'id' => 1522,
                'name_ar' => 'الوسادة',
                'name_en' => 'al wasadah',
                'city_id' => 67,
                'neCoordinates' => '26.56578519,50.00184589',
                'swCoordinates' => '26.56067373,49.99683392',
            ),
            389 =>
            array (
                'id' => 1523,
                'name_ar' => 'القلعة',
                'name_en' => 'al qalah',
                'city_id' => 67,
                'neCoordinates' => '26.56229635,50.01045756',
                'swCoordinates' => '26.55726843,50.00435273',
            ),
            390 =>
            array (
                'id' => 1524,
                'name_ar' => 'البوادي',
                'name_en' => 'al bawadi',
                'city_id' => 67,
                'neCoordinates' => '26.59419895,49.97431701',
                'swCoordinates' => '26.57533185,49.96368399',
            ),
            391 =>
            array (
                'id' => 1525,
                'name_ar' => 'الحسين',
                'name_en' => 'al husain',
                'city_id' => 67,
                'neCoordinates' => '26.58322468,50.00425167',
                'swCoordinates' => '26.56577603,49.99239926',
            ),
            392 =>
            array (
                'id' => 1526,
                'name_ar' => 'المدني',
                'name_en' => 'al madani',
                'city_id' => 67,
                'neCoordinates' => '26.56097749,50.00238433',
                'swCoordinates' => '26.55727232,49.99833241',
            ),
            393 =>
            array (
                'id' => 1527,
                'name_ar' => 'الثريا',
                'name_en' => 'ath thuraiya',
                'city_id' => 67,
                'neCoordinates' => '26.60775809,49.98796372',
                'swCoordinates' => '26.59454125,49.97995195',
            ),
            394 =>
            array (
                'id' => 1528,
                'name_ar' => 'الريف',
                'name_en' => 'ar rif',
                'city_id' => 67,
                'neCoordinates' => '26.60804560,49.98180661',
                'swCoordinates' => '26.58969034,49.97019870',
            ),
            395 =>
            array (
                'id' => 1529,
                'name_ar' => 'باب الشمال',
                'name_en' => 'bab madinah ash shamal',
                'city_id' => 67,
                'neCoordinates' => '26.56121241,50.00447037',
                'swCoordinates' => '26.55818322,50.00188374',
            ),
            396 =>
            array (
                'id' => 1530,
                'name_ar' => 'البحر',
                'name_en' => 'al bahr',
                'city_id' => 67,
                'neCoordinates' => '26.56843231,50.01246688',
                'swCoordinates' => '26.56208332,50.00409561',
            ),
            397 =>
            array (
                'id' => 1531,
                'name_ar' => 'الشويكة',
                'name_en' => 'ash shweikah',
                'city_id' => 67,
                'neCoordinates' => '26.55096793,50.01346695',
                'swCoordinates' => '26.54547295,50.00453026',
            ),
            398 =>
            array (
                'id' => 1532,
                'name_ar' => 'الوديعه',
                'name_en' => 'al wadiah',
                'city_id' => 67,
                'neCoordinates' => '26.55536834,50.01240388',
                'swCoordinates' => '26.54987767,50.00849419',
            ),
            399 =>
            array (
                'id' => 1533,
                'name_ar' => 'الكويكب',
                'name_en' => 'kuwaikib',
                'city_id' => 67,
                'neCoordinates' => '26.55502627,50.00952581',
                'swCoordinates' => '26.54952927,50.00480493',
            ),
            400 =>
            array (
                'id' => 1534,
                'name_ar' => 'النرجس',
                'name_en' => 'an narjis',
                'city_id' => 67,
                'neCoordinates' => '26.59521265,49.99730595',
                'swCoordinates' => '26.58465832,49.98184551',
            ),
            401 =>
            array (
                'id' => 1535,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 67,
                'neCoordinates' => '26.62793550,50.02169259',
                'swCoordinates' => '26.58238814,50.00526474',
            ),
            402 =>
            array (
                'id' => 1536,
                'name_ar' => 'الزارة',
                'name_en' => 'az zarah',
                'city_id' => 67,
                'neCoordinates' => '26.58550465,49.99789841',
                'swCoordinates' => '26.58198065,49.99005470',
            ),
            403 =>
            array (
                'id' => 1537,
                'name_ar' => 'الرمال',
                'name_en' => 'ar rimal',
                'city_id' => 2171,
                'neCoordinates' => '26.50451713,49.99123044',
                'swCoordinates' => '26.49331329,49.98622704',
            ),
            404 =>
            array (
                'id' => 1538,
                'name_ar' => 'الصناعية',
                'name_en' => 'industrial',
                'city_id' => 454,
                'neCoordinates' => '26.47336425,50.02089439',
                'swCoordinates' => '26.45875595,50.00570097',
            ),
            405 =>
            array (
                'id' => 1539,
                'name_ar' => 'الدريدي',
                'name_en' => 'ad duraydi',
                'city_id' => 2167,
                'neCoordinates' => '26.66102109,49.90217493',
                'swCoordinates' => '26.65204276,49.88793405',
            ),
            406 =>
            array (
                'id' => 1540,
                'name_ar' => 'المروة',
                'name_en' => 'al marwah',
                'city_id' => 2167,
                'neCoordinates' => '26.65530562,49.96560366',
                'swCoordinates' => '26.64220493,49.95560767',
            ),
            407 =>
            array (
                'id' => 1541,
                'name_ar' => 'الرويحة',
                'name_en' => 'ar ruwaihah',
                'city_id' => 2167,
                'neCoordinates' => '26.65414638,49.82908022',
                'swCoordinates' => '26.63708618,49.81092110',
            ),
            408 =>
            array (
                'id' => 1542,
                'name_ar' => 'الرحاب',
                'name_en' => 'ar rihab',
                'city_id' => 2167,
                'neCoordinates' => '26.67429426,49.92753436',
                'swCoordinates' => '26.65343620,49.90758193',
            ),
            409 =>
            array (
                'id' => 1543,
                'name_ar' => 'ابو معن',
                'name_en' => 'abu main',
                'city_id' => 2167,
                'neCoordinates' => '26.67284616,49.82024583',
                'swCoordinates' => '26.65570254,49.79450146',
            ),
            410 =>
            array (
                'id' => 1544,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 2167,
                'neCoordinates' => '26.66030431,49.96378315',
                'swCoordinates' => '26.65224255,49.95215094',
            ),
            411 =>
            array (
                'id' => 1545,
                'name_ar' => 'المصيف',
                'name_en' => 'al masif',
                'city_id' => 2167,
                'neCoordinates' => '26.66412275,49.84775014',
                'swCoordinates' => '26.65561000,49.81920039',
            ),
            412 =>
            array (
                'id' => 1546,
                'name_ar' => 'البدور',
                'name_en' => 'al budur',
                'city_id' => 2167,
                'neCoordinates' => '26.66806518,49.95339218',
                'swCoordinates' => '26.63746490,49.91712220',
            ),
            413 =>
            array (
                'id' => 1547,
                'name_ar' => 'العروبة',
                'name_en' => 'al urubah',
                'city_id' => 2167,
                'neCoordinates' => '26.65667848,49.95525676',
                'swCoordinates' => '26.63689851,49.94073344',
            ),
            414 =>
            array (
                'id' => 1548,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safaa',
                'city_id' => 2167,
                'neCoordinates' => '26.64478284,49.96532730',
                'swCoordinates' => '26.63836383,49.95611524',
            ),
            415 =>
            array (
                'id' => 1549,
                'name_ar' => 'الخترشية',
                'name_en' => 'al khatrashiyah',
                'city_id' => 2167,
                'neCoordinates' => '26.62472345,49.93086614',
                'swCoordinates' => '26.61744144,49.92451520',
            ),
            416 =>
            array (
                'id' => 1550,
                'name_ar' => 'ام الساهك',
                'name_en' => 'umm as sahik',
                'city_id' => 2167,
                'neCoordinates' => '26.65575168,49.91800900',
                'swCoordinates' => '26.64709446,49.91123938',
            ),
            417 =>
            array (
                'id' => 1551,
                'name_ar' => 'العمل',
                'name_en' => 'al amal',
                'city_id' => 2167,
                'neCoordinates' => '26.64341795,49.96792314',
                'swCoordinates' => '26.63038635,49.95216717',
            ),
            418 =>
            array (
                'id' => 1552,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 2167,
                'neCoordinates' => '26.64858023,49.92446844',
                'swCoordinates' => '26.62776232,49.90019583',
            ),
            419 =>
            array (
                'id' => 1553,
                'name_ar' => 'حزم',
                'name_en' => 'hazm',
                'city_id' => 2167,
                'neCoordinates' => '26.65717657,49.96103136',
                'swCoordinates' => '26.64249892,49.94720431',
            ),
            420 =>
            array (
                'id' => 1554,
                'name_ar' => 'المنار',
                'name_en' => 'al manar',
                'city_id' => 2167,
                'neCoordinates' => '26.66660102,49.95438103',
                'swCoordinates' => '26.65667848,49.94744298',
            ),
            421 =>
            array (
                'id' => 1555,
                'name_ar' => 'الشورى',
                'name_en' => 'ash shura',
                'city_id' => 2167,
                'neCoordinates' => '26.66493010,50.00979679',
                'swCoordinates' => '26.64504022,49.97074039',
            ),
            422 =>
            array (
                'id' => 1556,
                'name_ar' => 'الندى',
                'name_en' => 'an nada',
                'city_id' => 13,
                'neCoordinates' => '26.38820826,50.09354196',
                'swCoordinates' => '26.36089705,50.06255310',
            ),
            423 =>
            array (
                'id' => 1558,
                'name_ar' => 'البصرة',
                'name_en' => 'al basrah',
                'city_id' => 24,
                'neCoordinates' => '25.95177638,45.36767311',
                'swCoordinates' => '25.94033642,45.35600124',
            ),
            424 =>
            array (
                'id' => 1559,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 24,
                'neCoordinates' => '25.95634571,45.35709528',
                'swCoordinates' => '25.94021822,45.34501233',
            ),
            425 =>
            array (
                'id' => 1560,
                'name_ar' => 'الرفيعة',
                'name_en' => 'ar rafiah',
                'city_id' => 24,
                'neCoordinates' => '25.93210878,45.33750119',
                'swCoordinates' => '25.91674521,45.32072634',
            ),
            426 =>
            array (
                'id' => 1561,
                'name_ar' => 'المرقب',
                'name_en' => 'al marqab',
                'city_id' => 24,
                'neCoordinates' => '25.91555455,45.34595061',
                'swCoordinates' => '25.89661944,45.32923686',
            ),
            427 =>
            array (
                'id' => 1562,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 24,
                'neCoordinates' => '25.92488027,45.36716997',
                'swCoordinates' => '25.90901852,45.35115513',
            ),
            428 =>
            array (
                'id' => 1563,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 24,
                'neCoordinates' => '25.91346993,45.35964427',
                'swCoordinates' => '25.89409209,45.34595061',
            ),
            429 =>
            array (
                'id' => 1564,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 24,
                'neCoordinates' => '25.91026096,45.35368925',
                'swCoordinates' => '25.88890245,45.33693264',
            ),
            430 =>
            array (
                'id' => 1565,
                'name_ar' => 'الامير سلمان',
                'name_en' => 'al amir salman',
                'city_id' => 24,
                'neCoordinates' => '25.89835875,45.37193738',
                'swCoordinates' => '25.88205055,45.35202406',
            ),
            431 =>
            array (
                'id' => 1566,
                'name_ar' => 'الملك عبدالعزيز',
                'name_en' => 'king abdul aziz',
                'city_id' => 24,
                'neCoordinates' => '25.91569559,45.37286834',
                'swCoordinates' => '25.89496329,45.35475166',
            ),
            432 =>
            array (
                'id' => 1567,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 24,
                'neCoordinates' => '25.92964831,45.38168400',
                'swCoordinates' => '25.91113815,45.36398590',
            ),
            433 =>
            array (
                'id' => 1568,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 24,
                'neCoordinates' => '25.92505104,45.39072834',
                'swCoordinates' => '25.90647610,45.37286834',
            ),
            434 =>
            array (
                'id' => 1569,
                'name_ar' => 'الملك عبدالله',
                'name_en' => 'king abdullah',
                'city_id' => 24,
                'neCoordinates' => '25.92030093,45.40078621',
                'swCoordinates' => '25.90132686,45.38195657',
            ),
            435 =>
            array (
                'id' => 1572,
                'name_ar' => 'الجامعيين',
                'name_en' => 'al jamiyin',
                'city_id' => 24,
                'neCoordinates' => '25.91113815,45.38195657',
                'swCoordinates' => '25.89721964,45.36703536',
            ),
            436 =>
            array (
                'id' => 1573,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 24,
                'neCoordinates' => '25.90212942,45.37180726',
                'swCoordinates' => '25.89542556,45.36459424',
            ),
            437 =>
            array (
                'id' => 1574,
                'name_ar' => 'الصواير',
                'name_en' => 'as sawaer',
                'city_id' => 1514,
                'neCoordinates' => '19.93692815,42.68126977',
                'swCoordinates' => '19.89583634,42.64452599',
            ),
            438 =>
            array (
                'id' => 1575,
                'name_ar' => 'الرمال',
                'name_en' => 'ar rimal',
                'city_id' => 1514,
                'neCoordinates' => '19.89889996,42.67989042',
                'swCoordinates' => '19.85550363,42.64418328',
            ),
            439 =>
            array (
                'id' => 1576,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 1514,
                'neCoordinates' => '19.89927984,42.64634828',
                'swCoordinates' => '19.85865799,42.62969248',
            ),
            440 =>
            array (
                'id' => 1577,
                'name_ar' => 'الخزان',
                'name_en' => 'al khazzan',
                'city_id' => 1514,
                'neCoordinates' => '20.09243694,42.72016670',
                'swCoordinates' => '20.02304976,42.66104030',
            ),
            441 =>
            array (
                'id' => 1578,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 1514,
                'neCoordinates' => '20.08826082,42.68403347',
                'swCoordinates' => '20.03343489,42.64210738',
            ),
            442 =>
            array (
                'id' => 1579,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 1514,
                'neCoordinates' => '20.15246935,42.68308611',
                'swCoordinates' => '20.04718217,42.59954143',
            ),
            443 =>
            array (
                'id' => 1580,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 1514,
                'neCoordinates' => '20.02722874,42.63307630',
                'swCoordinates' => '20.00036734,42.60610358',
            ),
            444 =>
            array (
                'id' => 1581,
                'name_ar' => 'الفهد',
                'name_en' => 'al fahd',
                'city_id' => 1514,
                'neCoordinates' => '20.00993452,42.61870211',
                'swCoordinates' => '19.98619990,42.59257779',
            ),
            445 =>
            array (
                'id' => 1582,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 1514,
                'neCoordinates' => '20.04638197,42.59044527',
                'swCoordinates' => '20.00772006,42.52534540',
            ),
            446 =>
            array (
                'id' => 1583,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 1514,
                'neCoordinates' => '20.04817544,42.62057744',
                'swCoordinates' => '19.99509241,42.56969747',
            ),
            447 =>
            array (
                'id' => 1584,
                'name_ar' => 'الورود',
                'name_en' => 'alwurud',
                'city_id' => 1514,
                'neCoordinates' => '20.10559427,42.70527314',
                'swCoordinates' => '20.06774549,42.67105341',
            ),
            448 =>
            array (
                'id' => 1585,
                'name_ar' => 'التضامن',
                'name_en' => 'al tdhamun',
                'city_id' => 1514,
                'neCoordinates' => '20.07520448,42.58354206',
                'swCoordinates' => '20.03711423,42.52022638',
            ),
            449 =>
            array (
                'id' => 1586,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 1514,
                'neCoordinates' => '20.17403887,42.66265746',
                'swCoordinates' => '20.04537001,42.58299892',
            ),
            450 =>
            array (
                'id' => 1587,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 1514,
                'neCoordinates' => '20.03001620,42.71830845',
                'swCoordinates' => '20.00046830,42.66522658',
            ),
            451 =>
            array (
                'id' => 1588,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 1514,
                'neCoordinates' => '20.01206121,42.71488617',
                'swCoordinates' => '19.92512749,42.64427981',
            ),
            452 =>
            array (
                'id' => 1589,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1514,
                'neCoordinates' => '20.10537674,42.67105341',
                'swCoordinates' => '20.03927914,42.61186073',
            ),
            453 =>
            array (
                'id' => 1590,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 1514,
                'neCoordinates' => '20.12079147,42.68884098',
                'swCoordinates' => '20.08826082,42.65084658',
            ),
            454 =>
            array (
                'id' => 1591,
                'name_ar' => 'البوادي',
                'name_en' => 'al bawadi',
                'city_id' => 1514,
                'neCoordinates' => '20.02971093,42.56980897',
                'swCoordinates' => '19.93103280,42.52985794',
            ),
            455 =>
            array (
                'id' => 1592,
                'name_ar' => 'الملك عبدالله',
                'name_en' => 'king abdullah',
                'city_id' => 1514,
                'neCoordinates' => '19.99702077,42.60849607',
                'swCoordinates' => '19.95151711,42.58119184',
            ),
            456 =>
            array (
                'id' => 1593,
                'name_ar' => 'المطار',
                'name_en' => 'airport dist',
                'city_id' => 1514,
                'neCoordinates' => '20.01918148,42.65662269',
                'swCoordinates' => '19.93692815,42.60422064',
            ),
            457 =>
            array (
                'id' => 1594,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 1514,
                'neCoordinates' => '20.03427929,42.67968177',
                'swCoordinates' => '20.00767394,42.64572601',
            ),
            458 =>
            array (
                'id' => 1595,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 1514,
                'neCoordinates' => '20.04606287,42.65915004',
                'swCoordinates' => '20.01537533,42.61428950',
            ),
            459 =>
            array (
                'id' => 1596,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 1514,
                'neCoordinates' => '19.91547070,42.61720134',
                'swCoordinates' => '19.86071418,42.56204734',
            ),
            460 =>
            array (
                'id' => 1597,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 1514,
                'neCoordinates' => '19.89970813,42.63099013',
                'swCoordinates' => '19.85993605,42.61398856',
            ),
            461 =>
            array (
                'id' => 1598,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 1514,
                'neCoordinates' => '19.94860256,42.64601642',
                'swCoordinates' => '19.89889996,42.60638254',
            ),
            462 =>
            array (
                'id' => 1599,
                'name_ar' => 'الوادي',
                'name_en' => 'al wadi',
                'city_id' => 1514,
                'neCoordinates' => '19.91136538,42.58890932',
                'swCoordinates' => '19.86563002,42.53844078',
            ),
            463 =>
            array (
                'id' => 1600,
                'name_ar' => 'الامير سلطان ',
                'name_en' => 'al amir sultan',
                'city_id' => 1514,
                'neCoordinates' => '19.95494200,42.61175328',
                'swCoordinates' => '19.91002694,42.58971168',
            ),
            464 =>
            array (
                'id' => 1601,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 1514,
                'neCoordinates' => '20.00764953,42.59218024',
                'swCoordinates' => '19.90647305,42.54564200',
            ),
            465 =>
            array (
                'id' => 1602,
                'name_ar' => 'مشرفة',
                'name_en' => 'mishrifah',
                'city_id' => 669,
                'neCoordinates' => '24.48270051,44.37155952',
                'swCoordinates' => '24.45373103,44.35152827',
            ),
            466 =>
            array (
                'id' => 1603,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzaha',
                'city_id' => 669,
                'neCoordinates' => '24.55364572,44.46449788',
                'swCoordinates' => '24.53686518,44.43942990',
            ),
            467 =>
            array (
                'id' => 1604,
                'name_ar' => 'حطين',
                'name_en' => 'hatin',
                'city_id' => 669,
                'neCoordinates' => '24.55191963,44.43828359',
                'swCoordinates' => '24.53390551,44.41679989',
            ),
            468 =>
            array (
                'id' => 1605,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 669,
                'neCoordinates' => '24.54435452,44.43163292',
                'swCoordinates' => '24.52710279,44.41106448',
            ),
            469 =>
            array (
                'id' => 1606,
                'name_ar' => 'الحرمين',
                'name_en' => 'al harmin',
                'city_id' => 669,
                'neCoordinates' => '24.52365632,44.41991343',
                'swCoordinates' => '24.51258701,44.40219105',
            ),
            470 =>
            array (
                'id' => 1607,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 669,
                'neCoordinates' => '24.51814968,44.40598334',
                'swCoordinates' => '24.50234549,44.38357013',
            ),
            471 =>
            array (
                'id' => 1608,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 669,
                'neCoordinates' => '24.49578483,44.37695625',
                'swCoordinates' => '24.49130130,44.37185664',
            ),
            472 =>
            array (
                'id' => 1609,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 669,
                'neCoordinates' => '24.50234549,44.39152475',
                'swCoordinates' => '24.49247739,44.37527780',
            ),
            473 =>
            array (
                'id' => 1610,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 669,
                'neCoordinates' => '24.49910870,44.37527780',
                'swCoordinates' => '24.49043519,44.36463022',
            ),
            474 =>
            array (
                'id' => 1611,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faysaliyyah',
                'city_id' => 669,
                'neCoordinates' => '24.50833181,44.38751619',
                'swCoordinates' => '24.49578483,44.37184159',
            ),
            475 =>
            array (
                'id' => 1612,
                'name_ar' => 'بدر',
                'name_en' => 'badr',
                'city_id' => 669,
                'neCoordinates' => '24.53842264,44.42298966',
                'swCoordinates' => '24.52696048,44.40533275',
            ),
            476 =>
            array (
                'id' => 1613,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 669,
                'neCoordinates' => '24.58321126,44.49767074',
                'swCoordinates' => '24.55538945,44.45864274',
            ),
            477 =>
            array (
                'id' => 1614,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 669,
                'neCoordinates' => '24.52647697,44.42913265',
                'swCoordinates' => '24.51264903,44.41174147',
            ),
            478 =>
            array (
                'id' => 1615,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 669,
                'neCoordinates' => '24.51584186,44.41386582',
                'swCoordinates' => '24.49899590,44.38751619',
            ),
            479 =>
            array (
                'id' => 1616,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sanaiyyah',
                'city_id' => 669,
                'neCoordinates' => '24.51892003,44.37316379',
                'swCoordinates' => '24.49755337,44.33955663',
            ),
            480 =>
            array (
                'id' => 1617,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 669,
                'neCoordinates' => '24.52783171,44.40219105',
                'swCoordinates' => '24.50119387,44.36541170',
            ),
            481 =>
            array (
                'id' => 1618,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 669,
                'neCoordinates' => '24.53327817,44.42510179',
                'swCoordinates' => '24.51814968,44.39553749',
            ),
            482 =>
            array (
                'id' => 1619,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayan',
                'city_id' => 669,
                'neCoordinates' => '24.57072106,44.46482887',
                'swCoordinates' => '24.54040782,44.42402096',
            ),
            483 =>
            array (
                'id' => 1620,
                'name_ar' => 'السنبلة',
                'name_en' => 'as sunbulah',
                'city_id' => 669,
                'neCoordinates' => '24.50501646,44.36769541',
                'swCoordinates' => '24.47638704,44.33845952',
            ),
            484 =>
            array (
                'id' => 1621,
                'name_ar' => 'الدرع',
                'name_en' => 'ad dar',
                'city_id' => 669,
                'neCoordinates' => '24.54105565,44.44185577',
                'swCoordinates' => '24.52685184,44.42510179',
            ),
            485 =>
            array (
                'id' => 1622,
                'name_ar' => 'منطقة الاستراحات',
                'name_en' => 'mantiqat al istirahat',
                'city_id' => 669,
                'neCoordinates' => '24.51690999,44.44137103',
                'swCoordinates' => '24.46743096,44.38974047',
            ),
            486 =>
            array (
                'id' => 1623,
                'name_ar' => 'مصده',
                'name_en' => 'musaddah',
                'city_id' => 669,
                'neCoordinates' => '24.54488629,44.29006036',
                'swCoordinates' => '24.51529790,44.26110213',
            ),
            487 =>
            array (
                'id' => 1624,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 2590,
                'neCoordinates' => '26.71181430,50.05324781',
                'swCoordinates' => '26.70331726,50.04388761',
            ),
            488 =>
            array (
                'id' => 1625,
                'name_ar' => 'النعيم',
                'name_en' => 'an naim',
                'city_id' => 2590,
                'neCoordinates' => '26.72375675,50.04665462',
                'swCoordinates' => '26.71468266,50.03554798',
            ),
            489 =>
            array (
                'id' => 1626,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 2590,
                'neCoordinates' => '26.71765547,50.05025775',
                'swCoordinates' => '26.70845371,50.03873050',
            ),
            490 =>
            array (
                'id' => 1627,
                'name_ar' => 'المنتزة',
                'name_en' => 'al montazah',
                'city_id' => 2590,
                'neCoordinates' => '26.70591814,50.05682064',
                'swCoordinates' => '26.69384832,50.04051625',
            ),
            491 =>
            array (
                'id' => 1628,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 2590,
                'neCoordinates' => '26.70624581,50.07651814',
                'swCoordinates' => '26.69804904,50.06336081',
            ),
            492 =>
            array (
                'id' => 1629,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2590,
                'neCoordinates' => '26.70153555,50.06891790',
                'swCoordinates' => '26.69440783,50.04592976',
            ),
            493 =>
            array (
                'id' => 1630,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faihaa',
                'city_id' => 2590,
                'neCoordinates' => '26.71728536,50.06927240',
                'swCoordinates' => '26.70591814,50.05025756',
            ),
            494 =>
            array (
                'id' => 1631,
                'name_ar' => 'الدانة',
                'name_en' => 'ad danah',
                'city_id' => 2590,
                'neCoordinates' => '26.71067600,50.06844564',
                'swCoordinates' => '26.69886780,50.05324781',
            ),
            495 =>
            array (
                'id' => 1632,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2590,
                'neCoordinates' => '26.71329224,50.07800718',
                'swCoordinates' => '26.70366322,50.06485749',
            ),
            496 =>
            array (
                'id' => 1633,
                'name_ar' => 'المنطقة الحرة',
                'name_en' => 'bonded zone',
                'city_id' => 3666,
                'neCoordinates' => '22.54487823,39.15646687',
                'swCoordinates' => '22.51257975,39.12061472',
            ),
            497 =>
            array (
                'id' => 1634,
                'name_ar' => 'المنطقة الصناعية مرحلة الاولى',
                'name_en' => 'industrial area phase 1',
                'city_id' => 3666,
                'neCoordinates' => '22.51664638,39.12794142',
                'swCoordinates' => '22.49053228,39.08400660',
            ),
            498 =>
            array (
                'id' => 1635,
                'name_ar' => 'البيلسان',
                'name_en' => 'baylasun',
                'city_id' => 3666,
                'neCoordinates' => '22.42769367,39.09666941',
                'swCoordinates' => '22.39404759,39.07711034',
            ),
            499 =>
            array (
                'id' => 1636,
                'name_ar' => 'منطقة محطة القطار',
                'name_en' => 'train station area',
                'city_id' => 3666,
                'neCoordinates' => '22.43590096,39.19615001',
                'swCoordinates' => '22.40436857,39.16303560',
            ),
        ));
        DB::table('neighborhoods')->insert(array (
            0 =>
            array (
                'id' => 1637,
                'name_ar' => 'ميناء',
                'name_en' => 'sea port',
                'city_id' => 3666,
                'neCoordinates' => '22.54491431,39.13285245',
                'swCoordinates' => '22.51639719,39.08080068',
            ),
            1 =>
            array (
                'id' => 1638,
                'name_ar' => 'ازميرالدا',
                'name_en' => 'esmeralda',
                'city_id' => 3666,
                'neCoordinates' => '22.46025235,39.10895936',
                'swCoordinates' => '22.43695330,39.08408128',
            ),
            2 =>
            array (
                'id' => 1639,
                'name_ar' => 'منطقة المرافق',
                'name_en' => 'utilities zone',
                'city_id' => 3666,
                'neCoordinates' => '22.56801950,39.12713710',
                'swCoordinates' => '22.54487729,39.08081713',
            ),
            3 =>
            array (
                'id' => 1640,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 2464,
                'neCoordinates' => '28.39939489,48.46499099',
                'swCoordinates' => '28.37862110,48.44554611',
            ),
            4 =>
            array (
                'id' => 1641,
                'name_ar' => 'الجوهرة',
                'name_en' => 'al jawharah',
                'city_id' => 2464,
                'neCoordinates' => '28.43323615,48.49623574',
                'swCoordinates' => '28.41964726,48.47871741',
            ),
            5 =>
            array (
                'id' => 1642,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawun',
                'city_id' => 2464,
                'neCoordinates' => '28.41594735,48.49731993',
                'swCoordinates' => '28.40294730,48.48401950',
            ),
            6 =>
            array (
                'id' => 1643,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyyah',
                'city_id' => 2464,
                'neCoordinates' => '28.49065747,48.50026307',
                'swCoordinates' => '28.47944883,48.48375753',
            ),
            7 =>
            array (
                'id' => 1644,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 2464,
                'neCoordinates' => '28.48013804,48.50416605',
                'swCoordinates' => '28.46208374,48.48495100',
            ),
            8 =>
            array (
                'id' => 1645,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2464,
                'neCoordinates' => '28.40449202,48.47097262',
                'swCoordinates' => '28.39043791,48.45506541',
            ),
            9 =>
            array (
                'id' => 1646,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faihaa',
                'city_id' => 2464,
                'neCoordinates' => '28.46498596,48.48796121',
                'swCoordinates' => '28.45828863,48.47769141',
            ),
            10 =>
            array (
                'id' => 1647,
                'name_ar' => 'الخزامى',
                'name_en' => 'al khuzama',
                'city_id' => 2464,
                'neCoordinates' => '28.46088923,48.48942880',
                'swCoordinates' => '28.45223392,48.47801849',
            ),
            11 =>
            array (
                'id' => 1648,
                'name_ar' => 'الياسمين',
                'name_en' => 'al yasmin',
                'city_id' => 2464,
                'neCoordinates' => '28.45466687,48.49230323',
                'swCoordinates' => '28.44107736,48.48134497',
            ),
            12 =>
            array (
                'id' => 1649,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziah',
                'city_id' => 2464,
                'neCoordinates' => '28.46494299,48.49988780',
                'swCoordinates' => '28.43245190,48.48610074',
            ),
            13 =>
            array (
                'id' => 1650,
                'name_ar' => 'الدوائر الحكومية',
                'name_en' => 'goverment departments',
                'city_id' => 2464,
                'neCoordinates' => '28.46263302,48.50436809',
                'swCoordinates' => '28.43286706,48.49664492',
            ),
            14 =>
            array (
                'id' => 1651,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 2464,
                'neCoordinates' => '28.43286698,48.50828168',
                'swCoordinates' => '28.41594733,48.49580604',
            ),
            15 =>
            array (
                'id' => 1652,
                'name_ar' => 'المنطقة الصناعية الاولى',
                'name_en' => 'industrial erea no.1',
                'city_id' => 2464,
                'neCoordinates' => '28.42004057,48.51701694',
                'swCoordinates' => '28.40051570,48.49645226',
            ),
            16 =>
            array (
                'id' => 1653,
                'name_ar' => 'المنطقة الصناعية الثانية',
                'name_en' => 'industrial erea no 2',
                'city_id' => 2464,
                'neCoordinates' => '28.40378620,48.50937616',
                'swCoordinates' => '28.38897783,48.49737306',
            ),
            17 =>
            array (
                'id' => 1654,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 2464,
                'neCoordinates' => '28.42007565,48.48743671',
                'swCoordinates' => '28.41523904,48.47587679',
            ),
            18 =>
            array (
                'id' => 1655,
                'name_ar' => 'اللؤلؤة',
                'name_en' => 'al luluah',
                'city_id' => 2464,
                'neCoordinates' => '28.42055584,48.49645184',
                'swCoordinates' => '28.41545572,48.48711550',
            ),
            19 =>
            array (
                'id' => 1656,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 2464,
                'neCoordinates' => '28.44566595,48.49512503',
                'swCoordinates' => '28.42718892,48.47853860',
            ),
            20 =>
            array (
                'id' => 1657,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 2464,
                'neCoordinates' => '28.41938817,48.46902185',
                'swCoordinates' => '28.40415524,48.45172788',
            ),
            21 =>
            array (
                'id' => 1658,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2464,
                'neCoordinates' => '28.42581596,48.47618524',
                'swCoordinates' => '28.41138219,48.46023553',
            ),
            22 =>
            array (
                'id' => 1659,
                'name_ar' => 'الامل',
                'name_en' => 'al amal',
                'city_id' => 2464,
                'neCoordinates' => '28.40748615,48.46665313',
                'swCoordinates' => '28.40251277,48.46099985',
            ),
            23 =>
            array (
                'id' => 1660,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 2464,
                'neCoordinates' => '28.41729263,48.48586099',
                'swCoordinates' => '28.40273774,48.46449074',
            ),
            24 =>
            array (
                'id' => 1661,
                'name_ar' => 'الامير نايف',
                'name_en' => 'al amir naif',
                'city_id' => 2464,
                'neCoordinates' => '28.40551330,48.47915046',
                'swCoordinates' => '28.39540332,48.46317508',
            ),
            25 =>
            array (
                'id' => 1662,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 2464,
                'neCoordinates' => '28.43526105,48.48015513',
                'swCoordinates' => '28.42437501,48.46754724',
            ),
            26 =>
            array (
                'id' => 1663,
                'name_ar' => 'الامير فهد بن سلمان',
                'name_en' => 'al amir fahd ibn salman',
                'city_id' => 2464,
                'neCoordinates' => '28.43381989,48.48742323',
                'swCoordinates' => '28.41756226,48.46915262',
            ),
            27 =>
            array (
                'id' => 1664,
                'name_ar' => 'النهضة',
                'name_en' => 'al nahdah',
                'city_id' => 2464,
                'neCoordinates' => '28.41264380,48.49213685',
                'swCoordinates' => '28.40735155,48.48249511',
            ),
            28 =>
            array (
                'id' => 1665,
                'name_ar' => 'ارامكو',
                'name_en' => 'aramco',
                'city_id' => 2464,
                'neCoordinates' => '28.43404611,48.53009368',
                'swCoordinates' => '28.41078236,48.49988751',
            ),
            29 =>
            array (
                'id' => 1666,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 2464,
                'neCoordinates' => '28.47944883,48.48619430',
                'swCoordinates' => '28.46446304,48.47521781',
            ),
            30 =>
            array (
                'id' => 1667,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 2464,
                'neCoordinates' => '28.49201443,48.48495100',
                'swCoordinates' => '28.47882284,48.47221293',
            ),
            31 =>
            array (
                'id' => 1668,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 3479,
                'neCoordinates' => '17.16050637,42.68107186',
                'swCoordinates' => '17.14984621,42.66511462',
            ),
            32 =>
            array (
                'id' => 1669,
                'name_ar' => 'الحسيني',
                'name_en' => 'al hussaini',
                'city_id' => 3479,
                'neCoordinates' => '17.15622691,42.69000296',
                'swCoordinates' => '17.14696723,42.67913553',
            ),
            33 =>
            array (
                'id' => 1670,
                'name_ar' => 'الفلاح',
                'name_en' => 'al falah',
                'city_id' => 3479,
                'neCoordinates' => '17.16082035,42.62295211',
                'swCoordinates' => '17.14850705,42.61025397',
            ),
            34 =>
            array (
                'id' => 1671,
                'name_ar' => 'حلة الأحوس',
                'name_en' => 'hullat al ahwass',
                'city_id' => 3479,
                'neCoordinates' => '17.16227393,42.70309174',
                'swCoordinates' => '17.15661701,42.69616546',
            ),
            35 =>
            array (
                'id' => 1672,
                'name_ar' => 'جخيرة',
                'name_en' => 'jukhairah',
                'city_id' => 3479,
                'neCoordinates' => '17.17180425,42.72611687',
                'swCoordinates' => '17.16297248,42.71414508',
            ),
            36 =>
            array (
                'id' => 1673,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 3479,
                'neCoordinates' => '17.15834463,42.62707019',
                'swCoordinates' => '17.14867044,42.61918930',
            ),
            37 =>
            array (
                'id' => 1674,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 3479,
                'neCoordinates' => '17.16297624,42.66125521',
                'swCoordinates' => '17.15621287,42.65373888',
            ),
            38 =>
            array (
                'id' => 1675,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 3479,
                'neCoordinates' => '17.14917433,42.62955875',
                'swCoordinates' => '17.14386450,42.62043027',
            ),
            39 =>
            array (
                'id' => 1676,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 3479,
                'neCoordinates' => '17.14184425,42.64646735',
                'swCoordinates' => '17.13784662,42.63699343',
            ),
            40 =>
            array (
                'id' => 1677,
                'name_ar' => 'السعادة',
                'name_en' => 'as saadah',
                'city_id' => 3479,
                'neCoordinates' => '17.15125530,42.64573542',
                'swCoordinates' => '17.14466791,42.62727206',
            ),
            41 =>
            array (
                'id' => 1678,
                'name_ar' => 'المجد',
                'name_en' => 'al majd',
                'city_id' => 3479,
                'neCoordinates' => '17.16284512,42.65514144',
                'swCoordinates' => '17.14876869,42.64559264',
            ),
            42 =>
            array (
                'id' => 1679,
                'name_ar' => 'الحشيبرية',
                'name_en' => 'al hushaibriyah',
                'city_id' => 3479,
                'neCoordinates' => '17.17211715,42.59424023',
                'swCoordinates' => '17.16774354,42.58926721',
            ),
            43 =>
            array (
                'id' => 1680,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 3479,
                'neCoordinates' => '17.16175695,42.64691205',
                'swCoordinates' => '17.14763938,42.62601965',
            ),
            44 =>
            array (
                'id' => 1681,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 3479,
                'neCoordinates' => '17.15276131,42.63135540',
                'swCoordinates' => '17.14810876,42.62670558',
            ),
            45 =>
            array (
                'id' => 1682,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safa',
                'city_id' => 3479,
                'neCoordinates' => '17.16222983,42.66631812',
                'swCoordinates' => '17.14992943,42.65184143',
            ),
            46 =>
            array (
                'id' => 1683,
                'name_ar' => 'الفردوس',
                'name_en' => 'al fardus',
                'city_id' => 3479,
                'neCoordinates' => '17.17748088,42.66923582',
                'swCoordinates' => '17.15950782,42.65869950',
            ),
            47 =>
            array (
                'id' => 1684,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 3479,
                'neCoordinates' => '17.17774379,42.66030159',
                'swCoordinates' => '17.16175695,42.64546925',
            ),
            48 =>
            array (
                'id' => 1685,
                'name_ar' => 'الرحاب',
                'name_en' => 'ar rihab',
                'city_id' => 3479,
                'neCoordinates' => '17.17512450,42.64743549',
                'swCoordinates' => '17.16016339,42.63667518',
            ),
            49 =>
            array (
                'id' => 1686,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabii',
                'city_id' => 3479,
                'neCoordinates' => '17.17465327,42.62605543',
                'swCoordinates' => '17.15718954,42.61025397',
            ),
            50 =>
            array (
                'id' => 1687,
                'name_ar' => 'الفيصلية',
                'name_en' => 'alfaisaliyah',
                'city_id' => 3479,
                'neCoordinates' => '17.17465594,42.63737705',
                'swCoordinates' => '17.15834463,42.62314021',
            ),
            51 =>
            array (
                'id' => 1688,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 3479,
                'neCoordinates' => '17.14886678,42.64634213',
                'swCoordinates' => '17.13817157,42.61786874',
            ),
            52 =>
            array (
                'id' => 1689,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 3479,
                'neCoordinates' => '17.14916902,42.62258092',
                'swCoordinates' => '17.14275023,42.61394552',
            ),
            53 =>
            array (
                'id' => 1690,
                'name_ar' => 'الرونة',
                'name_en' => 'ar rawnah',
                'city_id' => 3479,
                'neCoordinates' => '17.13312552,42.59331086',
                'swCoordinates' => '17.13054741,42.59072029',
            ),
            54 =>
            array (
                'id' => 1691,
                'name_ar' => 'الغراء',
                'name_en' => 'al gharraa',
                'city_id' => 3479,
                'neCoordinates' => '17.10490901,42.62491600',
                'swCoordinates' => '17.09920658,42.61509796',
            ),
            55 =>
            array (
                'id' => 1692,
                'name_ar' => 'العريش',
                'name_en' => 'al arish',
                'city_id' => 3479,
                'neCoordinates' => '17.14549691,42.72783227',
                'swCoordinates' => '17.13774339,42.71992980',
            ),
            56 =>
            array (
                'id' => 1693,
                'name_ar' => 'بوتيشة',
                'name_en' => 'butishah',
                'city_id' => 3479,
                'neCoordinates' => '17.14017104,42.71098690',
                'swCoordinates' => '17.13159546,42.69881897',
            ),
            57 =>
            array (
                'id' => 1694,
                'name_ar' => 'المعترض',
                'name_en' => 'al muutarid',
                'city_id' => 3479,
                'neCoordinates' => '17.13564016,42.69637825',
                'swCoordinates' => '17.12199442,42.68145840',
            ),
            58 =>
            array (
                'id' => 1695,
                'name_ar' => 'الظبية',
                'name_en' => 'al dhabyah',
                'city_id' => 3479,
                'neCoordinates' => '17.12392991,42.68036246',
                'swCoordinates' => '17.10652399,42.65579470',
            ),
            59 =>
            array (
                'id' => 1696,
                'name_ar' => 'الباحر',
                'name_en' => 'al bahir',
                'city_id' => 3479,
                'neCoordinates' => '17.12750903,42.60403206',
                'swCoordinates' => '17.12124152,42.59816296',
            ),
            60 =>
            array (
                'id' => 1697,
                'name_ar' => 'حصيدة',
                'name_en' => 'husaydah',
                'city_id' => 2226,
                'neCoordinates' => '31.33325258,37.39797494',
                'swCoordinates' => '31.30652931,37.35413281',
            ),
            61 =>
            array (
                'id' => 1698,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 2226,
                'neCoordinates' => '31.33390884,37.33548884',
                'swCoordinates' => '31.31939567,37.31685818',
            ),
            62 =>
            array (
                'id' => 1699,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahad',
                'city_id' => 2226,
                'neCoordinates' => '31.33852274,37.32214192',
                'swCoordinates' => '31.32584693,37.30735687',
            ),
            63 =>
            array (
                'id' => 1700,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 2226,
                'neCoordinates' => '31.35300090,37.34278562',
                'swCoordinates' => '31.33548043,37.32584320',
            ),
            64 =>
            array (
                'id' => 1701,
                'name_ar' => 'الغزالي',
                'name_en' => 'al ghzali',
                'city_id' => 2226,
                'neCoordinates' => '31.33959783,37.33366647',
                'swCoordinates' => '31.33006785,37.32214192',
            ),
            65 =>
            array (
                'id' => 1702,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2226,
                'neCoordinates' => '31.34922187,37.37468203',
                'swCoordinates' => '31.33047697,37.33925291',
            ),
            66 =>
            array (
                'id' => 1703,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2226,
                'neCoordinates' => '31.34390344,37.34710938',
                'swCoordinates' => '31.33223211,37.33366647',
            ),
            67 =>
            array (
                'id' => 1704,
                'name_ar' => 'السديرية',
                'name_en' => 'as sadiriyyah',
                'city_id' => 2226,
                'neCoordinates' => '31.33548043,37.34366312',
                'swCoordinates' => '31.32582915,37.33007424',
            ),
            68 =>
            array (
                'id' => 1705,
                'name_ar' => 'الدفاع',
                'name_en' => 'ad difa',
                'city_id' => 2226,
                'neCoordinates' => '31.31180506,37.35312030',
                'swCoordinates' => '31.29151153,37.33087327',
            ),
            69 =>
            array (
                'id' => 1706,
                'name_ar' => 'التحلية',
                'name_en' => 'at tahliyyah',
                'city_id' => 2226,
                'neCoordinates' => '31.31939567,37.34435937',
                'swCoordinates' => '31.30598197,37.32694084',
            ),
            70 =>
            array (
                'id' => 1707,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 2226,
                'neCoordinates' => '31.31723208,37.35826921',
                'swCoordinates' => '31.30568913,37.34435937',
            ),
            71 =>
            array (
                'id' => 1708,
                'name_ar' => 'الشفا',
                'name_en' => 'ash shifa',
                'city_id' => 2226,
                'neCoordinates' => '31.32440033,37.35025661',
                'swCoordinates' => '31.31180506,37.33703979',
            ),
            72 =>
            array (
                'id' => 1709,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 2226,
                'neCoordinates' => '31.32744363,37.34249446',
                'swCoordinates' => '31.31609619,37.33022012',
            ),
            73 =>
            array (
                'id' => 1710,
                'name_ar' => 'الحميدية',
                'name_en' => 'al hamidiyyah',
                'city_id' => 2226,
                'neCoordinates' => '31.34007543,37.36126507',
                'swCoordinates' => '31.31802352,37.33960537',
            ),
            74 =>
            array (
                'id' => 1711,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 2226,
                'neCoordinates' => '31.32248287,37.39832428',
                'swCoordinates' => '31.28612604,37.34949354',
            ),
            75 =>
            array (
                'id' => 1712,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 2448,
                'neCoordinates' => '25.85870516,44.22808614',
                'swCoordinates' => '25.84477513,44.21394323',
            ),
            76 =>
            array (
                'id' => 1713,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 2448,
                'neCoordinates' => '25.85182432,44.23632550',
                'swCoordinates' => '25.83851008,44.22397964',
            ),
            77 =>
            array (
                'id' => 1714,
                'name_ar' => 'المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 2448,
                'neCoordinates' => '25.84812163,44.22873723',
                'swCoordinates' => '25.83581438,44.21765470',
            ),
            78 =>
            array (
                'id' => 1715,
                'name_ar' => 'الصفراء',
                'name_en' => 'as safra',
                'city_id' => 2448,
                'neCoordinates' => '25.85230563,44.22208618',
                'swCoordinates' => '25.83307382,44.20812122',
            ),
            79 =>
            array (
                'id' => 1716,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 2448,
                'neCoordinates' => '25.84158884,44.24129080',
                'swCoordinates' => '25.82373096,44.21534161',
            ),
            80 =>
            array (
                'id' => 1717,
                'name_ar' => 'الجديدة',
                'name_en' => 'al jadidah',
                'city_id' => 2448,
                'neCoordinates' => '25.87241676,44.25078889',
                'swCoordinates' => '25.84579824,44.22169426',
            ),
            81 =>
            array (
                'id' => 1718,
                'name_ar' => 'الخزامي',
                'name_en' => 'al khuzami',
                'city_id' => 2448,
                'neCoordinates' => '25.86386762,44.21648053',
                'swCoordinates' => '25.83895094,44.19219462',
            ),
            82 =>
            array (
                'id' => 1719,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2448,
                'neCoordinates' => '25.88470672,44.21444922',
                'swCoordinates' => '25.86308865,44.19615055',
            ),
            83 =>
            array (
                'id' => 1720,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2448,
                'neCoordinates' => '25.89350580,44.21410858',
                'swCoordinates' => '25.87706593,44.19791215',
            ),
            84 =>
            array (
                'id' => 1721,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 2448,
                'neCoordinates' => '25.87588910,44.22814211',
                'swCoordinates' => '25.85870516,44.21115739',
            ),
            85 =>
            array (
                'id' => 1722,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2448,
                'neCoordinates' => '25.89078449,44.20250569',
                'swCoordinates' => '25.88363466,44.19502067',
            ),
            86 =>
            array (
                'id' => 1723,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 2448,
                'neCoordinates' => '25.88930378,44.19044595',
                'swCoordinates' => '25.87703529,44.17964719',
            ),
            87 =>
            array (
                'id' => 1724,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 2448,
                'neCoordinates' => '25.86739699,44.22169426',
                'swCoordinates' => '25.85471292,44.20865400',
            ),
            88 =>
            array (
                'id' => 1725,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2448,
                'neCoordinates' => '25.88815119,44.20786910',
                'swCoordinates' => '25.85111593,44.18660052',
            ),
            89 =>
            array (
                'id' => 1726,
                'name_ar' => 'القفيفة',
                'name_en' => 'al qifayfah',
                'city_id' => 2448,
                'neCoordinates' => '25.83366758,44.24268611',
                'swCoordinates' => '25.82024587,44.21994501',
            ),
            90 =>
            array (
                'id' => 1727,
                'name_ar' => 'ام عشيرة',
                'name_en' => 'umm ushayrah',
                'city_id' => 2448,
                'neCoordinates' => '25.84987923,44.25544647',
                'swCoordinates' => '25.83366758,44.23322698',
            ),
            91 =>
            array (
                'id' => 1728,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 2448,
                'neCoordinates' => '25.88397565,44.21748959',
                'swCoordinates' => '25.87147894,44.20604208',
            ),
            92 =>
            array (
                'id' => 1729,
                'name_ar' => 'صمدة',
                'name_en' => 'samdah',
                'city_id' => 1947,
                'neCoordinates' => '27.35601497,35.69939359',
                'swCoordinates' => '27.34995519,35.68636641',
            ),
            93 =>
            array (
                'id' => 1730,
                'name_ar' => 'المزارع',
                'name_en' => 'al mazari',
                'city_id' => 1947,
                'neCoordinates' => '27.36235439,35.69021464',
                'swCoordinates' => '27.34886664,35.67457694',
            ),
            94 =>
            array (
                'id' => 1731,
                'name_ar' => 'المطار',
                'name_en' => 'al matar',
                'city_id' => 1947,
                'neCoordinates' => '27.35472000,35.68986555',
                'swCoordinates' => '27.34619710,35.68193773',
            ),
            95 =>
            array (
                'id' => 1732,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 1947,
                'neCoordinates' => '27.35240872,35.69889856',
                'swCoordinates' => '27.34473105,35.68717656',
            ),
            96 =>
            array (
                'id' => 1733,
                'name_ar' => 'المقيطع',
                'name_en' => 'al muqayti',
                'city_id' => 1947,
                'neCoordinates' => '27.35337740,35.72341190',
                'swCoordinates' => '27.33199552,35.69630054',
            ),
            97 =>
            array (
                'id' => 1734,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 2208,
                'neCoordinates' => '31.67381985,38.70088498',
                'swCoordinates' => '31.65008216,38.68325216',
            ),
            98 =>
            array (
                'id' => 1735,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faysaliyah',
                'city_id' => 2208,
                'neCoordinates' => '31.67674106,38.69037244',
                'swCoordinates' => '31.66457907,38.67624569',
            ),
            99 =>
            array (
                'id' => 1736,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 2208,
                'neCoordinates' => '31.67238149,38.68246384',
                'swCoordinates' => '31.66319082,38.66233605',
            ),
            100 =>
            array (
                'id' => 1737,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 2208,
                'neCoordinates' => '31.66590951,38.68725640',
                'swCoordinates' => '31.65268119,38.67245970',
            ),
            101 =>
            array (
                'id' => 1738,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 2208,
                'neCoordinates' => '31.66776165,38.67555745',
                'swCoordinates' => '31.65533436,38.66089127',
            ),
            102 =>
            array (
                'id' => 1739,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 2208,
                'neCoordinates' => '31.68633690,38.67022329',
                'swCoordinates' => '31.67581842,38.64579139',
            ),
            103 =>
            array (
                'id' => 1740,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyyah',
                'city_id' => 2208,
                'neCoordinates' => '31.68037563,38.66438173',
                'swCoordinates' => '31.67135713,38.64403870',
            ),
            104 =>
            array (
                'id' => 1741,
                'name_ar' => 'المساعدية',
                'name_en' => 'al misadiyah',
                'city_id' => 2208,
                'neCoordinates' => '31.67528717,38.65936924',
                'swCoordinates' => '31.66623070,38.64291879',
            ),
            105 =>
            array (
                'id' => 1742,
                'name_ar' => 'العروبة',
                'name_en' => 'al urubah',
                'city_id' => 2208,
                'neCoordinates' => '31.67645145,38.65357168',
                'swCoordinates' => '31.66107610,38.63794269',
            ),
            106 =>
            array (
                'id' => 1743,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 2208,
                'neCoordinates' => '31.67880879,38.67872638',
                'swCoordinates' => '31.66929856,38.66786127',
            ),
            107 =>
            array (
                'id' => 1744,
                'name_ar' => 'العمال',
                'name_en' => 'al ummal',
                'city_id' => 2256,
                'neCoordinates' => '29.64009475,43.50344369',
                'swCoordinates' => '29.63338117,43.49658705',
            ),
            108 =>
            array (
                'id' => 1745,
                'name_ar' => 'الخالدية جنوب',
                'name_en' => 'al khaldiyah janub',
                'city_id' => 2256,
                'neCoordinates' => '29.63338117,43.50889352',
                'swCoordinates' => '29.62582360,43.49993492',
            ),
            109 =>
            array (
                'id' => 1746,
                'name_ar' => 'المدينة',
                'name_en' => 'al madinah',
                'city_id' => 2256,
                'neCoordinates' => '29.63996746,43.51528992',
                'swCoordinates' => '29.63532814,43.50320675',
            ),
            110 =>
            array (
                'id' => 1747,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 2256,
                'neCoordinates' => '29.63551463,43.50225619',
                'swCoordinates' => '29.62868257,43.49482936',
            ),
            111 =>
            array (
                'id' => 1748,
                'name_ar' => 'النموذجية جنوب',
                'name_en' => 'an namudhajiyah janub',
                'city_id' => 2256,
                'neCoordinates' => '29.63088581,43.51242953',
                'swCoordinates' => '29.62431400,43.50644326',
            ),
            112 =>
            array (
                'id' => 1749,
                'name_ar' => 'النموذجية شمال',
                'name_en' => 'an namudhajiyah shamal',
                'city_id' => 2256,
                'neCoordinates' => '29.63544280,43.51525312',
                'swCoordinates' => '29.62956946,43.50889352',
            ),
            113 =>
            array (
                'id' => 1750,
                'name_ar' => 'الخالدية شمال',
                'name_en' => 'al khaldiyah shamal',
                'city_id' => 2256,
                'neCoordinates' => '29.63540736,43.51106909',
                'swCoordinates' => '29.63088581,43.50225619',
            ),
            114 =>
            array (
                'id' => 1751,
                'name_ar' => 'الادارية',
                'name_en' => 'al idariyah',
                'city_id' => 2256,
                'neCoordinates' => '29.63983316,43.52321907',
                'swCoordinates' => '29.62667464,43.51242952',
            ),
            115 =>
            array (
                'id' => 1752,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2256,
                'neCoordinates' => '29.63003104,43.54306621',
                'swCoordinates' => '29.61282999,43.52445451',
            ),
            116 =>
            array (
                'id' => 1753,
                'name_ar' => 'الاسكان التنموي',
                'name_en' => 'al iskan at tanmawi',
                'city_id' => 2256,
                'neCoordinates' => '29.64846834,43.52321760',
                'swCoordinates' => '29.63974662,43.51524663',
            ),
            117 =>
            array (
                'id' => 1754,
                'name_ar' => 'الملز',
                'name_en' => 'al malaz',
                'city_id' => 2256,
                'neCoordinates' => '29.64763214,43.55231400',
                'swCoordinates' => '29.63379809,43.53471058',
            ),
            118 =>
            array (
                'id' => 1755,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 2256,
                'neCoordinates' => '29.63481916,43.53139588',
                'swCoordinates' => '29.62374412,43.52006172',
            ),
            119 =>
            array (
                'id' => 1756,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2256,
                'neCoordinates' => '29.64840653,43.53934147',
                'swCoordinates' => '29.63958846,43.52313976',
            ),
            120 =>
            array (
                'id' => 1757,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 2256,
                'neCoordinates' => '29.62566043,43.55395391',
                'swCoordinates' => '29.60804605,43.53572475',
            ),
            121 =>
            array (
                'id' => 1758,
                'name_ar' => 'الشمالي',
                'name_en' => 'ash shamali',
                'city_id' => 2256,
                'neCoordinates' => '29.64184637,43.56316471',
                'swCoordinates' => '29.62905055,43.54772432',
            ),
            122 =>
            array (
                'id' => 1760,
                'name_ar' => 'الجميماء',
                'name_en' => 'al jumayma',
                'city_id' => 2256,
                'neCoordinates' => '29.63379809,43.55860500',
                'swCoordinates' => '29.62091736,43.54306621',
            ),
            123 =>
            array (
                'id' => 1761,
                'name_ar' => 'المساعدية',
                'name_en' => 'al misadiyah',
                'city_id' => 2256,
                'neCoordinates' => '29.62956940,43.52006172',
                'swCoordinates' => '29.62119337,43.50987577',
            ),
            124 =>
            array (
                'id' => 1762,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 2256,
                'neCoordinates' => '29.62667464,43.52777658',
                'swCoordinates' => '29.61790560,43.51697337',
            ),
            125 =>
            array (
                'id' => 1763,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2256,
                'neCoordinates' => '29.63974713,43.53176910',
                'swCoordinates' => '29.63435812,43.52293419',
            ),
            126 =>
            array (
                'id' => 1764,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2630,
                'neCoordinates' => '26.14663338,43.66878650',
                'swCoordinates' => '26.13698368,43.65673915',
            ),
            127 =>
            array (
                'id' => 1765,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 2630,
                'neCoordinates' => '26.13901014,43.66628104',
                'swCoordinates' => '26.12790194,43.65637998',
            ),
            128 =>
            array (
                'id' => 1766,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 2630,
                'neCoordinates' => '26.14670764,43.66131975',
                'swCoordinates' => '26.13412787,43.65282902',
            ),
            129 =>
            array (
                'id' => 1767,
                'name_ar' => 'البيضاء',
                'name_en' => 'al baida',
                'city_id' => 2630,
                'neCoordinates' => '26.12537119,43.66220013',
                'swCoordinates' => '26.10229370,43.64389402',
            ),
            130 =>
            array (
                'id' => 1768,
                'name_ar' => 'ابن خلدون',
                'name_en' => 'ibn khaldun',
                'city_id' => 2630,
                'neCoordinates' => '26.13660253,43.66286894',
                'swCoordinates' => '26.12523413,43.64712389',
            ),
            131 =>
            array (
                'id' => 1769,
                'name_ar' => 'الهلالية',
                'name_en' => 'al halaliyah',
                'city_id' => 2630,
                'neCoordinates' => '26.13520190,43.68175539',
                'swCoordinates' => '26.11873005,43.66220013',
            ),
            132 =>
            array (
                'id' => 1770,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 2630,
                'neCoordinates' => '26.14605157,43.67424462',
                'swCoordinates' => '26.13520244,43.66394378',
            ),
            133 =>
            array (
                'id' => 1771,
                'name_ar' => 'الفهد',
                'name_en' => 'al fahd',
                'city_id' => 2630,
                'neCoordinates' => '26.15894947,43.66637052',
                'swCoordinates' => '26.14581561,43.65402856',
            ),
            134 =>
            array (
                'id' => 1772,
                'name_ar' => 'البلد القديم',
                'name_en' => 'al balad al qadim',
                'city_id' => 2630,
                'neCoordinates' => '26.14946960,43.67089932',
                'swCoordinates' => '26.14275478,43.66405344',
            ),
            135 =>
            array (
                'id' => 1773,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2630,
                'neCoordinates' => '26.15226295,43.66196455',
                'swCoordinates' => '26.14364167,43.65352147',
            ),
            136 =>
            array (
                'id' => 1774,
                'name_ar' => 'مخطط المحمدية',
                'name_en' => 'al muhammadiyah planning',
                'city_id' => 2630,
                'neCoordinates' => '26.13063637,43.64093003',
                'swCoordinates' => '26.12736037,43.63695433',
            ),
            137 =>
            array (
                'id' => 1775,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2630,
                'neCoordinates' => '26.13472621,43.62669129',
                'swCoordinates' => '26.11061656,43.59665559',
            ),
            138 =>
            array (
                'id' => 1776,
                'name_ar' => 'ام ثلعة',
                'name_en' => 'umm thalaah',
                'city_id' => 2481,
                'neCoordinates' => '26.02503077,43.76278507',
                'swCoordinates' => '26.01985599,43.75637443',
            ),
            139 =>
            array (
                'id' => 1777,
                'name_ar' => 'العبيلة',
                'name_en' => 'al ubaylah',
                'city_id' => 2481,
                'neCoordinates' => '26.01065908,43.74206483',
                'swCoordinates' => '26.00585193,43.73718310',
            ),
            140 =>
            array (
                'id' => 1778,
                'name_ar' => 'العثمانية',
                'name_en' => 'al uthmaniyah',
                'city_id' => 2481,
                'neCoordinates' => '26.00931121,43.73896514',
                'swCoordinates' => '25.99888047,43.72737787',
            ),
            141 =>
            array (
                'id' => 1779,
                'name_ar' => 'الوسطى',
                'name_en' => 'al wusta',
                'city_id' => 2481,
                'neCoordinates' => '26.00801370,43.73049347',
                'swCoordinates' => '25.99505116,43.71602598',
            ),
            142 =>
            array (
                'id' => 1780,
                'name_ar' => 'الشيرمي',
                'name_en' => 'ash shayrami',
                'city_id' => 2481,
                'neCoordinates' => '26.00585200,43.74237126',
                'swCoordinates' => '25.99349293,43.73180484',
            ),
            143 =>
            array (
                'id' => 1781,
                'name_ar' => 'المستشفى',
                'name_en' => 'al mustashfa',
                'city_id' => 2481,
                'neCoordinates' => '25.99996224,43.73884199',
                'swCoordinates' => '25.98307610,43.72586807',
            ),
            144 =>
            array (
                'id' => 1782,
                'name_ar' => 'البساتين',
                'name_en' => 'al basatin',
                'city_id' => 2481,
                'neCoordinates' => '25.99787645,43.74947377',
                'swCoordinates' => '25.98144524,43.73655752',
            ),
            145 =>
            array (
                'id' => 1783,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 2481,
                'neCoordinates' => '25.98804728,43.75671723',
                'swCoordinates' => '25.97428462,43.74056293',
            ),
            146 =>
            array (
                'id' => 1784,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 2481,
                'neCoordinates' => '25.98307610,43.74951718',
                'swCoordinates' => '25.96376487,43.73343578',
            ),
            147 =>
            array (
                'id' => 1785,
                'name_ar' => 'الرمة',
                'name_en' => 'ar rimmah',
                'city_id' => 2481,
                'neCoordinates' => '25.99505116,43.73870918',
                'swCoordinates' => '25.97883011,43.71951830',
            ),
            148 =>
            array (
                'id' => 1786,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaaiyah',
                'city_id' => 2481,
                'neCoordinates' => '25.98986166,43.73007312',
                'swCoordinates' => '25.97443111,43.71337471',
            ),
            149 =>
            array (
                'id' => 1787,
                'name_ar' => 'الاصفر',
                'name_en' => 'al asfar',
                'city_id' => 2481,
                'neCoordinates' => '25.98469251,43.72319229',
                'swCoordinates' => '25.96482507,43.70318270',
            ),
            150 =>
            array (
                'id' => 1788,
                'name_ar' => 'رامات',
                'name_en' => 'ramat',
                'city_id' => 2481,
                'neCoordinates' => '25.96753146,43.71234045',
                'swCoordinates' => '25.95360891,43.69195574',
            ),
            151 =>
            array (
                'id' => 1789,
                'name_ar' => 'العليا',
                'name_en' => 'al ulayya',
                'city_id' => 2481,
                'neCoordinates' => '25.96915772,43.70206293',
                'swCoordinates' => '25.95971838,43.69331019',
            ),
            152 =>
            array (
                'id' => 1790,
                'name_ar' => 'التعليم',
                'name_en' => 'at taalim',
                'city_id' => 2481,
                'neCoordinates' => '25.99855574,43.72586807',
                'swCoordinates' => '25.99202386,43.71928740',
            ),
            153 =>
            array (
                'id' => 1791,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 233,
                'neCoordinates' => '26.26170279,36.45747771',
                'swCoordinates' => '26.24722347,36.43875669',
            ),
            154 =>
            array (
                'id' => 1792,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 233,
                'neCoordinates' => '26.23738813,36.46624000',
                'swCoordinates' => '26.22547713,36.45218428',
            ),
            155 =>
            array (
                'id' => 1793,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziah',
                'city_id' => 233,
                'neCoordinates' => '26.23917824,36.46605459',
                'swCoordinates' => '26.22948200,36.45600745',
            ),
            156 =>
            array (
                'id' => 1794,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 233,
                'neCoordinates' => '26.25177922,36.46322705',
                'swCoordinates' => '26.23656800,36.44818065',
            ),
            157 =>
            array (
                'id' => 1795,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 233,
                'neCoordinates' => '26.27072623,36.44645094',
                'swCoordinates' => '26.25825554,36.43353890',
            ),
            158 =>
            array (
                'id' => 1796,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 1361,
                'neCoordinates' => '20.47839478,45.58260318',
                'swCoordinates' => '20.46188693,45.56418415',
            ),
            159 =>
            array (
                'id' => 1797,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1361,
                'neCoordinates' => '20.48491166,45.59469014',
                'swCoordinates' => '20.46417550,45.58200083',
            ),
            160 =>
            array (
                'id' => 1798,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 1361,
                'neCoordinates' => '20.46572744,45.59529520',
                'swCoordinates' => '20.44741628,45.58091602',
            ),
            161 =>
            array (
                'id' => 1799,
                'name_ar' => 'الديرة',
                'name_en' => 'ad dirah',
                'city_id' => 1361,
                'neCoordinates' => '20.46360703,45.58180291',
                'swCoordinates' => '20.44580433,45.56472841',
            ),
            162 =>
            array (
                'id' => 1800,
                'name_ar' => 'الملك عبدالعزيز',
                'name_en' => 'king abdulaziz',
                'city_id' => 1361,
                'neCoordinates' => '20.48542998,45.58223880',
                'swCoordinates' => '20.47102116,45.56462566',
            ),
            163 =>
            array (
                'id' => 1801,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 1361,
                'neCoordinates' => '20.49272789,45.59087368',
                'swCoordinates' => '20.47849029,45.57616139',
            ),
            164 =>
            array (
                'id' => 1802,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 990,
                'neCoordinates' => '24.48714231,46.31212787',
                'swCoordinates' => '24.47921934,46.30259058',
            ),
            165 =>
            array (
                'id' => 1803,
                'name_ar' => 'الحزيمية',
                'name_en' => 'al huzaymiyyah',
                'city_id' => 990,
                'neCoordinates' => '24.48464987,46.30082437',
                'swCoordinates' => '24.47474136,46.28641565',
            ),
            166 =>
            array (
                'id' => 1804,
                'name_ar' => 'الصقورية',
                'name_en' => 'as suquriyyah',
                'city_id' => 990,
                'neCoordinates' => '24.48154736,46.28734418',
                'swCoordinates' => '24.47144796,46.27745056',
            ),
            167 =>
            array (
                'id' => 1805,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 990,
                'neCoordinates' => '24.48885427,46.27912710',
                'swCoordinates' => '24.47095564,46.26930660',
            ),
            168 =>
            array (
                'id' => 1806,
                'name_ar' => 'شخيب',
                'name_en' => 'shukhib',
                'city_id' => 990,
                'neCoordinates' => '24.49274302,46.27253746',
                'swCoordinates' => '24.47452924,46.25893314',
            ),
            169 =>
            array (
                'id' => 1807,
                'name_ar' => 'طويق',
                'name_en' => 'tuwik',
                'city_id' => 990,
                'neCoordinates' => '24.48280615,46.30202133',
                'swCoordinates' => '24.46501226,46.28430028',
            ),
            170 =>
            array (
                'id' => 1808,
                'name_ar' => 'الأندلس',
                'name_en' => 'al andalus',
                'city_id' => 990,
                'neCoordinates' => '24.47365753,46.28802623',
                'swCoordinates' => '24.46176877,46.27387383',
            ),
            171 =>
            array (
                'id' => 1809,
                'name_ar' => 'غرناطه',
                'name_en' => 'ghirnatah',
                'city_id' => 990,
                'neCoordinates' => '24.47146035,46.27496740',
                'swCoordinates' => '24.46066097,46.26360362',
            ),
            172 =>
            array (
                'id' => 1810,
                'name_ar' => 'الهدا',
                'name_en' => 'al hada',
                'city_id' => 990,
                'neCoordinates' => '24.46176877,46.27640614',
                'swCoordinates' => '24.44805786,46.26459377',
            ),
            173 =>
            array (
                'id' => 1811,
                'name_ar' => 'العليا',
                'name_en' => 'al ulayya',
                'city_id' => 990,
                'neCoordinates' => '24.46499035,46.29542318',
                'swCoordinates' => '24.44833485,46.27496740',
            ),
            174 =>
            array (
                'id' => 1812,
                'name_ar' => ' الركوبة',
                'name_en' => ' ar rakubah',
                'city_id' => 3542,
                'neCoordinates' => '16.62687655,42.97413473',
                'swCoordinates' => '16.61464737,42.96411402',
            ),
            175 =>
            array (
                'id' => 1813,
                'name_ar' => ' الجردية',
                'name_en' => ' al jurdiyyah',
                'city_id' => 3542,
                'neCoordinates' => '16.58476732,42.92885799',
                'swCoordinates' => '16.58021487,42.92226675',
            ),
            176 =>
            array (
                'id' => 1814,
                'name_ar' => ' الجرادية',
                'name_en' => ' al jaradiyah',
                'city_id' => 3542,
                'neCoordinates' => '16.59452523,42.92342625',
                'swCoordinates' => '16.57593033,42.90395814',
            ),
            177 =>
            array (
                'id' => 1815,
                'name_ar' => ' صامطة',
                'name_en' => ' samtah',
                'city_id' => 3542,
                'neCoordinates' => '16.61827605,42.95872291',
                'swCoordinates' => '16.58410454,42.90900132',
            ),
            178 =>
            array (
                'id' => 1816,
                'name_ar' => ' الطريشة',
                'name_en' => ' at turayshah',
                'city_id' => 3542,
                'neCoordinates' => '16.57983576,42.95614512',
                'swCoordinates' => '16.57049431,42.94248015',
            ),
            179 =>
            array (
                'id' => 1817,
                'name_ar' => ' مجعر',
                'name_en' => ' majaar',
                'city_id' => 3542,
                'neCoordinates' => '16.61756432,43.00067756',
                'swCoordinates' => '16.60302662,42.98233263',
            ),
            180 =>
            array (
                'id' => 1818,
                'name_ar' => ' الخضراء',
                'name_en' => ' al khadra',
                'city_id' => 3542,
                'neCoordinates' => '16.59592115,42.97577050',
                'swCoordinates' => '16.58041388,42.95741250',
            ),
            181 =>
            array (
                'id' => 1819,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 500,
                'neCoordinates' => '25.26436936,45.28326061',
                'swCoordinates' => '25.24940071,45.27393201',
            ),
            182 =>
            array (
                'id' => 1820,
                'name_ar' => 'غسلة',
                'name_en' => 'gaslah',
                'city_id' => 500,
                'neCoordinates' => '25.22573629,45.29563829',
                'swCoordinates' => '25.21954475,45.28947531',
            ),
            183 =>
            array (
                'id' => 1821,
                'name_ar' => 'الوقف',
                'name_en' => 'al wakf',
                'city_id' => 500,
                'neCoordinates' => '25.22388650,45.27908013',
                'swCoordinates' => '25.21771111,45.27274426',
            ),
            184 =>
            array (
                'id' => 1822,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 500,
                'neCoordinates' => '25.24031918,45.26599505',
                'swCoordinates' => '25.22115792,45.23890701',
            ),
            185 =>
            array (
                'id' => 1823,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 500,
                'neCoordinates' => '25.25034930,45.25644370',
                'swCoordinates' => '25.24049579,45.24083926',
            ),
            186 =>
            array (
                'id' => 1824,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 500,
                'neCoordinates' => '25.24723271,45.25902102',
                'swCoordinates' => '25.23611667,45.24437162',
            ),
            187 =>
            array (
                'id' => 1825,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 500,
                'neCoordinates' => '25.25692297,45.26482315',
                'swCoordinates' => '25.25080789,45.25979703',
            ),
            188 =>
            array (
                'id' => 1826,
                'name_ar' => 'الوشم',
                'name_en' => 'al washm',
                'city_id' => 500,
                'neCoordinates' => '25.25356243,45.26245772',
                'swCoordinates' => '25.24331129,45.25614411',
            ),
            189 =>
            array (
                'id' => 1827,
                'name_ar' => 'الرحبة',
                'name_en' => 'ar rahbah',
                'city_id' => 500,
                'neCoordinates' => '25.25861342,45.24094806',
                'swCoordinates' => '25.24459542,45.22180286',
            ),
            190 =>
            array (
                'id' => 1828,
                'name_ar' => 'السادلية',
                'name_en' => 'as sadiliyah',
                'city_id' => 3525,
                'neCoordinates' => '16.92782983,42.83579925',
                'swCoordinates' => '16.92137671,42.82640559',
            ),
            191 =>
            array (
                'id' => 1829,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 3525,
                'neCoordinates' => '16.97640879,42.86719599',
                'swCoordinates' => '16.95990329,42.83947453',
            ),
            192 =>
            array (
                'id' => 1830,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 3525,
                'neCoordinates' => '16.96102189,42.86659103',
                'swCoordinates' => '16.95011825,42.84341871',
            ),
            193 =>
            array (
                'id' => 1831,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 3525,
                'neCoordinates' => '16.96566031,42.86120301',
                'swCoordinates' => '16.94573293,42.83514317',
            ),
            194 =>
            array (
                'id' => 1832,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 3525,
                'neCoordinates' => '16.96272927,42.83783619',
                'swCoordinates' => '16.95184496,42.81439627',
            ),
            195 =>
            array (
                'id' => 1833,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 3525,
                'neCoordinates' => '16.96898388,42.83947453',
                'swCoordinates' => '16.96218936,42.83172092',
            ),
            196 =>
            array (
                'id' => 1834,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 3525,
                'neCoordinates' => '16.97490160,42.83798586',
                'swCoordinates' => '16.96834426,42.82983360',
            ),
            197 =>
            array (
                'id' => 1835,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 3525,
                'neCoordinates' => '16.98412258,42.83534557',
                'swCoordinates' => '16.97361340,42.82305952',
            ),
            198 =>
            array (
                'id' => 1836,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 3525,
                'neCoordinates' => '16.99360885,42.84820515',
                'swCoordinates' => '16.97129399,42.81888766',
            ),
            199 =>
            array (
                'id' => 1837,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 3525,
                'neCoordinates' => '16.98006080,42.85076607',
                'swCoordinates' => '16.96566031,42.83695659',
            ),
            200 =>
            array (
                'id' => 1838,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 3525,
                'neCoordinates' => '16.97325430,42.81974477',
                'swCoordinates' => '16.95748627,42.81064793',
            ),
            201 =>
            array (
                'id' => 1839,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 3525,
                'neCoordinates' => '16.96834426,42.83426720',
                'swCoordinates' => '16.95975634,42.81859720',
            ),
            202 =>
            array (
                'id' => 1840,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 3525,
                'neCoordinates' => '16.97246519,42.83172092',
                'swCoordinates' => '16.96545743,42.81833792',
            ),
            203 =>
            array (
                'id' => 1841,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 3525,
                'neCoordinates' => '16.98775247,42.83035064',
                'swCoordinates' => '16.97196987,42.81123848',
            ),
            204 =>
            array (
                'id' => 1842,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 3525,
                'neCoordinates' => '16.98332109,42.82620042',
                'swCoordinates' => '16.97061121,42.81064380',
            ),
            205 =>
            array (
                'id' => 1843,
                'name_ar' => 'العقدة',
                'name_en' => 'al uqdah',
                'city_id' => 3525,
                'neCoordinates' => '17.00830323,42.81347834',
                'swCoordinates' => '16.99623407,42.80339328',
            ),
            206 =>
            array (
                'id' => 1844,
                'name_ar' => 'المريخية',
                'name_en' => 'al muraikhiyah',
                'city_id' => 3525,
                'neCoordinates' => '16.95000070,42.79745687',
                'swCoordinates' => '16.94425806,42.79133712',
            ),
            207 =>
            array (
                'id' => 1845,
                'name_ar' => 'المهدج',
                'name_en' => 'al muhdaj',
                'city_id' => 3525,
                'neCoordinates' => '17.01677709,42.86215655',
                'swCoordinates' => '16.99866544,42.84164643',
            ),
            208 =>
            array (
                'id' => 1846,
                'name_ar' => 'قويعية',
                'name_en' => 'quwaiyyah',
                'city_id' => 3525,
                'neCoordinates' => '16.98144842,42.80342494',
                'swCoordinates' => '16.97134927,42.78961807',
            ),
            209 =>
            array (
                'id' => 1847,
                'name_ar' => 'قامرة',
                'name_en' => 'kamirah',
                'city_id' => 3525,
                'neCoordinates' => '17.00116358,42.80602392',
                'swCoordinates' => '16.98796217,42.79545915',
            ),
            210 =>
            array (
                'id' => 1848,
                'name_ar' => 'حاكمة ابي عريش',
                'name_en' => 'hakimat abi arish',
                'city_id' => 3525,
                'neCoordinates' => '17.01495851,42.84437344',
                'swCoordinates' => '17.00099597,42.81149868',
            ),
            211 =>
            array (
                'id' => 1849,
                'name_ar' => 'الشاقة',
                'name_en' => 'ash shakah',
                'city_id' => 3525,
                'neCoordinates' => '16.93458770,42.84351487',
                'swCoordinates' => '16.93095677,42.83808496',
            ),
            212 =>
            array (
                'id' => 1850,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 2156,
                'neCoordinates' => '21.22547595,41.64105148',
                'swCoordinates' => '21.20346235,41.62043692',
            ),
            213 =>
            array (
                'id' => 1851,
                'name_ar' => 'منيف',
                'name_en' => 'munif',
                'city_id' => 2156,
                'neCoordinates' => '21.21920753,41.64607978',
                'swCoordinates' => '21.20976836,41.63820076',
            ),
            214 =>
            array (
                'id' => 1852,
                'name_ar' => 'العلاوة',
                'name_en' => 'al allawah',
                'city_id' => 2156,
                'neCoordinates' => '21.19600680,41.65748896',
                'swCoordinates' => '21.16169175,41.63826295',
            ),
            215 =>
            array (
                'id' => 1853,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 2156,
                'neCoordinates' => '21.23916377,41.66476384',
                'swCoordinates' => '21.21687509,41.64105148',
            ),
            216 =>
            array (
                'id' => 1854,
                'name_ar' => 'كرا السردي',
                'name_en' => 'kara as sardi',
                'city_id' => 2156,
                'neCoordinates' => '21.21929769,41.69593638',
                'swCoordinates' => '21.18142413,41.66717354',
            ),
            217 =>
            array (
                'id' => 1855,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2156,
                'neCoordinates' => '21.20810546,41.63515877',
                'swCoordinates' => '21.19545155,41.61838739',
            ),
            218 =>
            array (
                'id' => 1856,
                'name_ar' => 'السوق',
                'name_en' => 'as suq',
                'city_id' => 2156,
                'neCoordinates' => '21.22838137,41.64649086',
                'swCoordinates' => '21.21920753,41.63644486',
            ),
            219 =>
            array (
                'id' => 1857,
                'name_ar' => 'قرية الجبنون',
                'name_en' => 'qaryat al jabnon',
                'city_id' => 323,
                'neCoordinates' => '24.97766141,37.31161921',
                'swCoordinates' => '24.97195840,37.29955181',
            ),
            220 =>
            array (
                'id' => 1858,
                'name_ar' => 'النسيم',
                'name_en' => 'an nassim',
                'city_id' => 323,
                'neCoordinates' => '24.98999670,37.30130129',
                'swCoordinates' => '24.97770794,37.28763910',
            ),
            221 =>
            array (
                'id' => 1859,
                'name_ar' => 'التحلية',
                'name_en' => 'at tahliyyah',
                'city_id' => 323,
                'neCoordinates' => '25.01727084,37.27972983',
                'swCoordinates' => '25.00422805,37.27025938',
            ),
            222 =>
            array (
                'id' => 1860,
                'name_ar' => 'المرجان',
                'name_en' => 'al murjan',
                'city_id' => 323,
                'neCoordinates' => '25.00657033,37.28520353',
                'swCoordinates' => '24.99664957,37.27627583',
            ),
            223 =>
            array (
                'id' => 1861,
                'name_ar' => 'الصيادية',
                'name_en' => 'as sayyadih',
                'city_id' => 323,
                'neCoordinates' => '25.02449439,37.27600868',
                'swCoordinates' => '25.01642540,37.26859575',
            ),
            224 =>
            array (
                'id' => 1862,
                'name_ar' => 'البطحاء',
                'name_en' => 'al batha',
                'city_id' => 323,
                'neCoordinates' => '25.02755876,37.27379925',
                'swCoordinates' => '25.02241585,37.26594948',
            ),
            225 =>
            array (
                'id' => 1863,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdhah',
                'city_id' => 323,
                'neCoordinates' => '25.03664807,37.26470732',
                'swCoordinates' => '25.02716377,37.25662112',
            ),
            226 =>
            array (
                'id' => 1864,
                'name_ar' => 'ابو شجرة',
                'name_en' => ' abu shajarah',
                'city_id' => 323,
                'neCoordinates' => '25.04342133,37.26502914',
                'swCoordinates' => '25.03366961,37.25427686',
            ),
            227 =>
            array (
                'id' => 1865,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 323,
                'neCoordinates' => '25.03096947,37.26823336',
                'swCoordinates' => '25.02231751,37.26148834',
            ),
            228 =>
            array (
                'id' => 1866,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 323,
                'neCoordinates' => '25.04421620,37.27476061',
                'swCoordinates' => '25.03374287,37.26466535',
            ),
            229 =>
            array (
                'id' => 1867,
                'name_ar' => 'السلام',
                'name_en' => 'al salam',
                'city_id' => 323,
                'neCoordinates' => '25.03999730,37.26685053',
                'swCoordinates' => '25.02831546,37.26166679',
            ),
            230 =>
            array (
                'id' => 1868,
                'name_ar' => 'الضويحي',
                'name_en' => ' al dawayhi',
                'city_id' => 323,
                'neCoordinates' => '25.05918043,37.26555906',
                'swCoordinates' => '25.03904844,37.25017443',
            ),
            231 =>
            array (
                'id' => 1869,
                'name_ar' => 'الشرقية',
                'name_en' => 'ash sharqiyyah',
                'city_id' => 1625,
                'neCoordinates' => '19.13291404,41.08980911',
                'swCoordinates' => '19.12423517,41.08143766',
            ),
            232 =>
            array (
                'id' => 1870,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1625,
                'neCoordinates' => '19.15120963,41.08209719',
                'swCoordinates' => '19.13291404,41.06884749',
            ),
            233 =>
            array (
                'id' => 1871,
                'name_ar' => 'الناعمية',
                'name_en' => 'an naimyyah',
                'city_id' => 1625,
                'neCoordinates' => '19.12829356,41.08272130',
                'swCoordinates' => '19.12111259,41.07683111',
            ),
            234 =>
            array (
                'id' => 1872,
                'name_ar' => 'الازهار',
                'name_en' => 'al azhar',
                'city_id' => 1625,
                'neCoordinates' => '19.12621581,41.08789538',
                'swCoordinates' => '19.11832411,41.07859840',
            ),
            235 =>
            array (
                'id' => 1873,
                'name_ar' => 'الغربي',
                'name_en' => 'al gharbi',
                'city_id' => 1625,
                'neCoordinates' => '19.13307824,41.08008460',
                'swCoordinates' => '19.12830462,41.07500520',
            ),
            236 =>
            array (
                'id' => 1874,
                'name_ar' => 'الرتبة',
                'name_en' => 'ar ratibah',
                'city_id' => 1625,
                'neCoordinates' => '19.12924633,41.07897098',
                'swCoordinates' => '19.12163867,41.07445130',
            ),
            237 =>
            array (
                'id' => 1875,
                'name_ar' => 'الشامية',
                'name_en' => 'ash shamiyah',
                'city_id' => 1625,
                'neCoordinates' => '19.13295396,41.08272149',
                'swCoordinates' => '19.12770424,41.07896696',
            ),
            238 =>
            array (
                'id' => 1876,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 1801,
                'neCoordinates' => '18.59063775,42.03641187',
                'swCoordinates' => '18.56557326,42.01515783',
            ),
            239 =>
            array (
                'id' => 1877,
                'name_ar' => 'المنتزة',
                'name_en' => 'al montazah',
                'city_id' => 1801,
                'neCoordinates' => '18.53188010,42.05915315',
                'swCoordinates' => '18.47339628,42.00594691',
            ),
            240 =>
            array (
                'id' => 1878,
                'name_ar' => 'الجنادرية',
                'name_en' => 'al janadriyah',
                'city_id' => 1801,
                'neCoordinates' => '18.53893511,42.06272542',
                'swCoordinates' => '18.51126636,42.02998955',
            ),
            241 =>
            array (
                'id' => 1879,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 1801,
                'neCoordinates' => '18.55781127,42.06695471',
                'swCoordinates' => '18.54045951,42.04999588',
            ),
            242 =>
            array (
                'id' => 1880,
                'name_ar' => 'الحيلة الشرقي',
                'name_en' => 'al haylah ash sharqi',
                'city_id' => 1801,
                'neCoordinates' => '18.51489347,42.10002134',
                'swCoordinates' => '18.47639647,42.06422605',
            ),
            243 =>
            array (
                'id' => 1881,
                'name_ar' => 'المقاعد',
                'name_en' => 'al maqaiid',
                'city_id' => 1801,
                'neCoordinates' => '18.52439789,42.12420375',
                'swCoordinates' => '18.50390789,42.08698674',
            ),
            244 =>
            array (
                'id' => 1882,
                'name_ar' => 'الظهرة',
                'name_en' => 'adh dhahrah',
                'city_id' => 1801,
                'neCoordinates' => '18.53741578,42.12226673',
                'swCoordinates' => '18.51994798,42.08331202',
            ),
            245 =>
            array (
                'id' => 1883,
                'name_ar' => 'الشهد',
                'name_en' => 'ash shahd',
                'city_id' => 1801,
                'neCoordinates' => '18.54193697,42.05658074',
                'swCoordinates' => '18.53342189,42.04101550',
            ),
            246 =>
            array (
                'id' => 1884,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 1801,
                'neCoordinates' => '18.55508046,42.04707228',
                'swCoordinates' => '18.53893511,42.03754325',
            ),
            247 =>
            array (
                'id' => 1885,
                'name_ar' => 'الحيلة الغربي',
                'name_en' => 'al haylah al gharbi',
                'city_id' => 1801,
                'neCoordinates' => '18.51007001,42.06678205',
                'swCoordinates' => '18.48377917,42.04406553',
            ),
            248 =>
            array (
                'id' => 1886,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1801,
                'neCoordinates' => '18.57033276,42.04458367',
                'swCoordinates' => '18.53127726,42.00703962',
            ),
            249 =>
            array (
                'id' => 1887,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1801,
                'neCoordinates' => '18.53868399,42.03639823',
                'swCoordinates' => '18.50783396,42.00926908',
            ),
            250 =>
            array (
                'id' => 1888,
                'name_ar' => 'البصرة',
                'name_en' => 'al basrah',
                'city_id' => 1801,
                'neCoordinates' => '18.52069437,42.06636174',
                'swCoordinates' => '18.50152676,42.03006439',
            ),
            251 =>
            array (
                'id' => 1889,
                'name_ar' => 'الضرس',
                'name_en' => 'ad dirs',
                'city_id' => 1801,
                'neCoordinates' => '18.55777756,42.08985821',
                'swCoordinates' => '18.53710249,42.06354341',
            ),
            252 =>
            array (
                'id' => 1891,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 1801,
                'neCoordinates' => '18.60235459,42.05205179',
                'swCoordinates' => '18.55394012,42.02737039',
            ),
            253 =>
            array (
                'id' => 1892,
                'name_ar' => 'البلد',
                'name_en' => 'al balad',
                'city_id' => 1801,
                'neCoordinates' => '18.55709760,42.05585301',
                'swCoordinates' => '18.54107883,42.04458367',
            ),
            254 =>
            array (
                'id' => 1893,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 1801,
                'neCoordinates' => '18.54045951,42.09232362',
                'swCoordinates' => '18.50276941,42.05658074',
            ),
            255 =>
            array (
                'id' => 1894,
                'name_ar' => 'الوعد',
                'name_en' => 'al waad',
                'city_id' => 1801,
                'neCoordinates' => '18.57572061,42.07136263',
                'swCoordinates' => '18.55244465,42.05366208',
            ),
            256 =>
            array (
                'id' => 1902,
                'name_ar' => 'الغصينية',
                'name_en' => 'al ghusainiah',
                'city_id' => 3652,
                'neCoordinates' => '16.70899483,42.96939947',
                'swCoordinates' => '16.69795388,42.95672257',
            ),
            257 =>
            array (
                'id' => 1903,
                'name_ar' => 'الواسط',
                'name_en' => 'al wasit',
                'city_id' => 3652,
                'neCoordinates' => '16.71295056,42.96838663',
                'swCoordinates' => '16.70462721,42.95863921',
            ),
            258 =>
            array (
                'id' => 1904,
                'name_ar' => 'العمارية',
                'name_en' => 'al amariyah',
                'city_id' => 3652,
                'neCoordinates' => '16.72022163,42.95728127',
                'swCoordinates' => '16.71078519,42.95012235',
            ),
            259 =>
            array (
                'id' => 1905,
                'name_ar' => 'القسوم',
                'name_en' => 'al qasum',
                'city_id' => 3652,
                'neCoordinates' => '16.71980871,42.95311680',
                'swCoordinates' => '16.71141740,42.94371259',
            ),
            260 =>
            array (
                'id' => 1906,
                'name_ar' => 'الصفا',
                'name_en' => 'as safa',
                'city_id' => 3652,
                'neCoordinates' => '16.71983223,42.96728179',
                'swCoordinates' => '16.71129426,42.95618020',
            ),
            261 =>
            array (
                'id' => 1907,
                'name_ar' => 'البياطرية',
                'name_en' => 'al bayatirah',
                'city_id' => 3652,
                'neCoordinates' => '16.72397441,42.98568822',
                'swCoordinates' => '16.71295056,42.96622284',
            ),
            262 =>
            array (
                'id' => 1908,
                'name_ar' => 'خلب',
                'name_en' => 'khalab',
                'city_id' => 3652,
                'neCoordinates' => '16.71812700,42.98454470',
                'swCoordinates' => '16.70899524,42.96728179',
            ),
            263 =>
            array (
                'id' => 1909,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 3652,
                'neCoordinates' => '16.72022191,42.94832262',
                'swCoordinates' => '16.70915237,42.93903533',
            ),
            264 =>
            array (
                'id' => 1910,
                'name_ar' => 'العز',
                'name_en' => 'al iz',
                'city_id' => 3652,
                'neCoordinates' => '16.71228898,42.95176928',
                'swCoordinates' => '16.69986908,42.93932377',
            ),
            265 =>
            array (
                'id' => 1911,
                'name_ar' => 'البلدية',
                'name_en' => 'al baladiah',
                'city_id' => 3652,
                'neCoordinates' => '16.70740919,42.95790697',
                'swCoordinates' => '16.69716877,42.94289394',
            ),
            266 =>
            array (
                'id' => 1912,
                'name_ar' => 'الميزاب',
                'name_en' => 'al mizab',
                'city_id' => 3652,
                'neCoordinates' => '16.71218418,42.96004549',
                'swCoordinates' => '16.70735057,42.95434514',
            ),
            267 =>
            array (
                'id' => 1913,
                'name_ar' => 'المنزم',
                'name_en' => 'al manzam',
                'city_id' => 3652,
                'neCoordinates' => '16.70777074,42.96225854',
                'swCoordinates' => '16.70020528,42.95488225',
            ),
            268 =>
            array (
                'id' => 1914,
                'name_ar' => 'المطلع',
                'name_en' => 'al mutalla',
                'city_id' => 3652,
                'neCoordinates' => '16.71225062,42.95576763',
                'swCoordinates' => '16.70193991,42.94835071',
            ),
            269 =>
            array (
                'id' => 1915,
                'name_ar' => 'الحصامة',
                'name_en' => 'al hasamah',
                'city_id' => 3652,
                'neCoordinates' => '16.68869179,42.93287088',
                'swCoordinates' => '16.67917477,42.92002581',
            ),
            270 =>
            array (
                'id' => 1916,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'al mantiqah al sinaiah',
                'city_id' => 3652,
                'neCoordinates' => '16.73714526,42.94371259',
                'swCoordinates' => '16.71803461,42.92379190',
            ),
            271 =>
            array (
                'id' => 1917,
                'name_ar' => 'حكامية العز',
                'name_en' => 'hakimiat al iz',
                'city_id' => 3652,
                'neCoordinates' => '16.70915237,42.94289394',
                'swCoordinates' => '16.69116248,42.92839537',
            ),
            272 =>
            array (
                'id' => 1918,
                'name_ar' => 'حاكمة الدغادير',
                'name_en' => 'hakimat al daghadir',
                'city_id' => 3652,
                'neCoordinates' => '16.68644755,42.98376615',
                'swCoordinates' => '16.67912459,42.97123672',
            ),
            273 =>
            array (
                'id' => 1919,
                'name_ar' => 'الدغادير',
                'name_en' => 'al daghadir',
                'city_id' => 3652,
                'neCoordinates' => '16.68121552,42.96590087',
                'swCoordinates' => '16.67343689,42.95468100',
            ),
            274 =>
            array (
                'id' => 1920,
                'name_ar' => 'مسره',
                'name_en' => 'masarrah',
                'city_id' => 5,
                'neCoordinates' => '21.31790188,40.42151054',
                'swCoordinates' => '21.28482392,40.39087530',
            ),
            275 =>
            array (
                'id' => 1921,
                'name_ar' => 'ميناء جدة الاسلامى',
                'name_en' => 'jeddah eslamic seaport',
                'city_id' => 18,
                'neCoordinates' => '21.49290625,39.18070458',
                'swCoordinates' => '21.44474954,39.14860039',
            ),
            276 =>
            array (
                'id' => 1922,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 288,
                'neCoordinates' => '25.68293858,39.30464692',
                'swCoordinates' => '25.65166466,39.28538927',
            ),
            277 =>
            array (
                'id' => 1923,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 288,
                'neCoordinates' => '25.71367310,39.30007098',
                'swCoordinates' => '25.69628158,39.28128710',
            ),
            278 =>
            array (
                'id' => 1924,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 288,
                'neCoordinates' => '25.69995144,39.29640963',
                'swCoordinates' => '25.68126972,39.28733422',
            ),
            279 =>
            array (
                'id' => 1925,
                'name_ar' => 'سلطانة',
                'name_en' => 'sultanah',
                'city_id' => 288,
                'neCoordinates' => '25.71400549,39.28228275',
                'swCoordinates' => '25.70536555,39.27020891',
            ),
            280 =>
            array (
                'id' => 1926,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 288,
                'neCoordinates' => '25.71026535,39.29352321',
                'swCoordinates' => '25.69978417,39.27893669',
            ),
            281 =>
            array (
                'id' => 1927,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 1257,
                'neCoordinates' => '21.62798283,39.70943901',
                'swCoordinates' => '21.61211877,39.70136749',
            ),
            282 =>
            array (
                'id' => 1928,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safaa',
                'city_id' => 1257,
                'neCoordinates' => '21.63267841,39.69779656',
                'swCoordinates' => '21.61348358,39.68432286',
            ),
            283 =>
            array (
                'id' => 1929,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 1257,
                'neCoordinates' => '21.63076415,39.70514986',
                'swCoordinates' => '21.61259787,39.69566992',
            ),
            284 =>
            array (
                'id' => 1930,
                'name_ar' => 'النقابة',
                'name_en' => 'an naqabah',
                'city_id' => 1257,
                'neCoordinates' => '21.63650146,39.68617690',
                'swCoordinates' => '21.62058972,39.65841438',
            ),
            285 =>
            array (
                'id' => 1931,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 1257,
                'neCoordinates' => '21.61259787,39.71131769',
                'swCoordinates' => '21.58815499,39.69518073',
            ),
            286 =>
            array (
                'id' => 1932,
                'name_ar' => 'أبو شعيب',
                'name_en' => 'abu shuayb',
                'city_id' => 1257,
                'neCoordinates' => '21.58826159,39.70985781',
                'swCoordinates' => '21.57335077,39.69639888',
            ),
            287 =>
            array (
                'id' => 1933,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 1257,
                'neCoordinates' => '21.61575238,39.69954306',
                'swCoordinates' => '21.59532841,39.68750363',
            ),
            288 =>
            array (
                'id' => 1934,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1257,
                'neCoordinates' => '21.61342040,39.70136749',
                'swCoordinates' => '21.60350403,39.69781698',
            ),
            289 =>
            array (
                'id' => 1935,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 1257,
                'neCoordinates' => '21.62176848,39.69228817',
                'swCoordinates' => '21.60447826,39.68142771',
            ),
            290 =>
            array (
                'id' => 1936,
                'name_ar' => 'سدر',
                'name_en' => 'sedr',
                'city_id' => 1257,
                'neCoordinates' => '21.63647509,39.68469777',
                'swCoordinates' => '21.61423531,39.65787224',
            ),
            291 =>
            array (
                'id' => 1937,
                'name_ar' => 'القريات',
                'name_en' => 'al quraiyat',
                'city_id' => 1257,
                'neCoordinates' => '21.66484223,39.64506565',
                'swCoordinates' => '21.64404240,39.61822122',
            ),
            292 =>
            array (
                'id' => 1938,
                'name_ar' => 'أبو عروة',
                'name_en' => 'abu urwah',
                'city_id' => 1257,
                'neCoordinates' => '21.66445041,39.71555111',
                'swCoordinates' => '21.62798283,39.67913018',
            ),
            293 =>
            array (
                'id' => 1939,
                'name_ar' => 'عين شمس',
                'name_en' => 'ayn shams',
                'city_id' => 1257,
                'neCoordinates' => '21.66829127,39.78218552',
                'swCoordinates' => '21.63127741,39.74138932',
            ),
            294 =>
            array (
                'id' => 1940,
                'name_ar' => 'الشهداء',
                'name_en' => 'ash shuhada',
                'city_id' => 1257,
                'neCoordinates' => '21.65383134,39.73436862',
                'swCoordinates' => '21.61768639,39.70514986',
            ),
            295 =>
            array (
                'id' => 1941,
                'name_ar' => 'الديرة القديمة',
                'name_en' => ' ad dirah al qadimah',
                'city_id' => 443,
                'neCoordinates' => '25.29951860,45.87267974',
                'swCoordinates' => '25.29294886,45.86693486',
            ),
            296 =>
            array (
                'id' => 1942,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 443,
                'neCoordinates' => '25.29066684,45.86894245',
                'swCoordinates' => '25.28058823,45.86072092',
            ),
            297 =>
            array (
                'id' => 1943,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 443,
                'neCoordinates' => '25.28054763,45.86738469',
                'swCoordinates' => '25.27079362,45.86149843',
            ),
            298 =>
            array (
                'id' => 1944,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 443,
                'neCoordinates' => '25.28618972,45.86583857',
                'swCoordinates' => '25.27757830,45.85569094',
            ),
            299 =>
            array (
                'id' => 1945,
                'name_ar' => 'الجنادرية',
                'name_en' => 'al janadriyah',
                'city_id' => 443,
                'neCoordinates' => '25.27133334,45.86818907',
                'swCoordinates' => '25.26531114,45.86077737',
            ),
            300 =>
            array (
                'id' => 1946,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 306,
                'neCoordinates' => '26.02979035,44.95884174',
                'swCoordinates' => '26.02300179,44.94961271',
            ),
            301 =>
            array (
                'id' => 1947,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 306,
                'neCoordinates' => '26.03584471,44.94777042',
                'swCoordinates' => '26.02579716,44.94100833',
            ),
            302 =>
            array (
                'id' => 1948,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 306,
                'neCoordinates' => '26.02366002,44.94931062',
                'swCoordinates' => '26.01620357,44.94150237',
            ),
            303 =>
            array (
                'id' => 1949,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 306,
                'neCoordinates' => '26.04202364,44.93825725',
                'swCoordinates' => '26.02943360,44.93234603',
            ),
            304 =>
            array (
                'id' => 1950,
                'name_ar' => 'المصيف',
                'name_en' => 'al masiaf',
                'city_id' => 306,
                'neCoordinates' => '26.04272619,44.94531059',
                'swCoordinates' => '26.03521777,44.93706390',
            ),
            305 =>
            array (
                'id' => 1951,
                'name_ar' => 'الياسمين',
                'name_en' => 'al yasmin',
                'city_id' => 306,
                'neCoordinates' => '26.03548551,44.94197201',
                'swCoordinates' => '26.02581244,44.93363971',
            ),
            306 =>
            array (
                'id' => 1952,
                'name_ar' => 'الخزامي',
                'name_en' => 'al khuzama',
                'city_id' => 306,
                'neCoordinates' => '26.02966200,44.95196567',
                'swCoordinates' => '26.02101652,44.94363748',
            ),
            307 =>
            array (
                'id' => 1953,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 306,
                'neCoordinates' => '26.02151751,44.95625148',
                'swCoordinates' => '26.01576611,44.94736699',
            ),
            308 =>
            array (
                'id' => 1954,
                'name_ar' => 'الغدير',
                'name_en' => 'al ghadir',
                'city_id' => 306,
                'neCoordinates' => '26.02509932,44.95767961',
                'swCoordinates' => '26.02038871,44.95013166',
            ),
            309 =>
            array (
                'id' => 1955,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 306,
                'neCoordinates' => '26.02423516,44.97153437',
                'swCoordinates' => '26.01982418,44.96801948',
            ),
            310 =>
            array (
                'id' => 1956,
                'name_ar' => 'النفل',
                'name_en' => 'an naql',
                'city_id' => 306,
                'neCoordinates' => '26.02710939,44.96945792',
                'swCoordinates' => '26.01987496,44.96186946',
            ),
            311 =>
            array (
                'id' => 1957,
                'name_ar' => 'البستان',
                'name_en' => 'al bustan',
                'city_id' => 306,
                'neCoordinates' => '26.02918426,44.96375089',
                'swCoordinates' => '26.02163021,44.95767961',
            ),
            312 =>
            array (
                'id' => 1958,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 306,
                'neCoordinates' => '26.03468971,44.95430621',
                'swCoordinates' => '26.02689159,44.94776440',
            ),
            313 =>
            array (
                'id' => 1959,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 306,
                'neCoordinates' => '26.03279325,44.95964692',
                'swCoordinates' => '26.02664746,44.95243859',
            ),
            314 =>
            array (
                'id' => 1960,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 3275,
                'neCoordinates' => '18.75327843,42.26736311',
                'swCoordinates' => '18.74134137,42.25536212',
            ),
            315 =>
            array (
                'id' => 1961,
                'name_ar' => ' الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 3275,
                'neCoordinates' => '18.78783467,42.27467719',
                'swCoordinates' => '18.76805395,42.24876838',
            ),
            316 =>
            array (
                'id' => 1962,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 3275,
                'neCoordinates' => '18.79264177,42.27688870',
                'swCoordinates' => '18.77122352,42.25142923',
            ),
            317 =>
            array (
                'id' => 1963,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 3275,
                'neCoordinates' => '18.81971944,42.26756410',
                'swCoordinates' => '18.78786888,42.25229990',
            ),
            318 =>
            array (
                'id' => 1964,
                'name_ar' => ' البساتين',
                'name_en' => 'al basatin',
                'city_id' => 3275,
                'neCoordinates' => '18.82492951,42.26814876',
                'swCoordinates' => '18.81738127,42.26250912',
            ),
            319 =>
            array (
                'id' => 1965,
                'name_ar' => 'السامر',
                'name_en' => 'as samir',
                'city_id' => 3275,
                'neCoordinates' => '18.77355806,42.28439755',
                'swCoordinates' => '18.75137388,42.26779799',
            ),
            320 =>
            array (
                'id' => 1966,
                'name_ar' => ' الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 3275,
                'neCoordinates' => '18.77502529,42.29038633',
                'swCoordinates' => '18.74477039,42.26665014',
            ),
            321 =>
            array (
                'id' => 1967,
                'name_ar' => 'الزيتون',
                'name_en' => 'az zaytun',
                'city_id' => 3275,
                'neCoordinates' => '18.82496825,42.27085246',
                'swCoordinates' => '18.81327566,42.26606537',
            ),
            322 =>
            array (
                'id' => 1968,
                'name_ar' => ' السلام',
                'name_en' => 'as salam',
                'city_id' => 3275,
                'neCoordinates' => '18.77115127,42.25911876',
                'swCoordinates' => '18.74124584,42.23809571',
            ),
            323 =>
            array (
                'id' => 1969,
                'name_ar' => ' الشفا',
                'name_en' => 'ash shifa',
                'city_id' => 3275,
                'neCoordinates' => '18.77860901,42.25339885',
                'swCoordinates' => '18.75496829,42.23743210',
            ),
            324 =>
            array (
                'id' => 1970,
                'name_ar' => ' الورود',
                'name_en' => 'al wurud',
                'city_id' => 3275,
                'neCoordinates' => '18.77517759,42.27435497',
                'swCoordinates' => '18.74381426,42.25376027',
            ),
            325 =>
            array (
                'id' => 1971,
                'name_ar' => ' العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 3275,
                'neCoordinates' => '18.79260259,42.25148619',
                'swCoordinates' => '18.77348514,42.24085734',
            ),
            326 =>
            array (
                'id' => 1972,
                'name_ar' => ' الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 3275,
                'neCoordinates' => '18.80523536,42.25718090',
                'swCoordinates' => '18.78795377,42.24796929',
            ),
            327 =>
            array (
                'id' => 1973,
                'name_ar' => ' النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 3275,
                'neCoordinates' => '18.82486520,42.26296318',
                'swCoordinates' => '18.80167130,42.25417704',
            ),
            328 =>
            array (
                'id' => 1974,
                'name_ar' => ' السروات',
                'name_en' => 'as sarawat',
                'city_id' => 3275,
                'neCoordinates' => '18.81772053,42.25165053',
                'swCoordinates' => '18.79050251,42.24073731',
            ),
            329 =>
            array (
                'id' => 1975,
                'name_ar' => ' المنتزه',
                'name_en' => 'al muntazah',
                'city_id' => 3275,
                'neCoordinates' => '18.82176968,42.24453057',
                'swCoordinates' => '18.77704304,42.23710156',
            ),
            330 =>
            array (
                'id' => 1976,
                'name_ar' => 'الخزان',
                'name_en' => 'al khazan',
                'city_id' => 1443,
                'neCoordinates' => '19.56173416,43.52449694',
                'swCoordinates' => '19.54201863,43.51410658',
            ),
            331 =>
            array (
                'id' => 1977,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 1443,
                'neCoordinates' => '19.54314488,43.52985560',
                'swCoordinates' => '19.52857077,43.51583062',
            ),
            332 =>
            array (
                'id' => 1978,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 1443,
                'neCoordinates' => '19.53302892,43.51682678',
                'swCoordinates' => '19.49763759,43.50308743',
            ),
            333 =>
            array (
                'id' => 1979,
                'name_ar' => 'الوجه',
                'name_en' => 'al wajh',
                'city_id' => 1443,
                'neCoordinates' => '19.56212849,43.51670540',
                'swCoordinates' => '19.53182712,43.50046731',
            ),
            334 =>
            array (
                'id' => 1980,
                'name_ar' => 'الغزالة',
                'name_en' => 'al ghazalah',
                'city_id' => 1443,
                'neCoordinates' => '19.55400333,43.50642771',
                'swCoordinates' => '19.52682969,43.48108142',
            ),
            335 =>
            array (
                'id' => 1981,
                'name_ar' => 'الحجاز',
                'name_en' => 'al hijaz',
                'city_id' => 1443,
                'neCoordinates' => '19.53307176,43.50798294',
                'swCoordinates' => '19.49705324,43.47305687',
            ),
            336 =>
            array (
                'id' => 1982,
                'name_ar' => 'الفاخرية',
                'name_en' => 'al fakhriyah',
                'city_id' => 1443,
                'neCoordinates' => '19.53107353,43.55120694',
                'swCoordinates' => '19.51936690,43.53613405',
            ),
            337 =>
            array (
                'id' => 1983,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1443,
                'neCoordinates' => '19.53530232,43.54196116',
                'swCoordinates' => '19.51953196,43.52839374',
            ),
            338 =>
            array (
                'id' => 1984,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 1443,
                'neCoordinates' => '19.52490555,43.55113987',
                'swCoordinates' => '19.49783962,43.52591978',
            ),
            339 =>
            array (
                'id' => 1985,
                'name_ar' => 'المدينة',
                'name_en' => 'al madinah',
                'city_id' => 1443,
                'neCoordinates' => '19.53190442,43.53036419',
                'swCoordinates' => '19.50110252,43.50709502',
            ),
            340 =>
            array (
                'id' => 1986,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawun',
                'city_id' => 1443,
                'neCoordinates' => '19.51936711,43.58318727',
                'swCoordinates' => '19.50938770,43.55087159',
            ),
            341 =>
            array (
                'id' => 1987,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 1294,
                'neCoordinates' => '19.13228622,41.92548231',
                'swCoordinates' => '19.10735970,41.90571724',
            ),
            342 =>
            array (
                'id' => 1988,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 1294,
                'neCoordinates' => '19.09783531,41.95517545',
                'swCoordinates' => '19.07758149,41.92917391',
            ),
            343 =>
            array (
                'id' => 1989,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 1294,
                'neCoordinates' => '19.10487892,41.93652495',
                'swCoordinates' => '19.08616006,41.92087710',
            ),
            344 =>
            array (
                'id' => 1990,
                'name_ar' => 'التقدم',
                'name_en' => 'at taqadom',
                'city_id' => 1294,
                'neCoordinates' => '19.13719145,41.92166030',
                'swCoordinates' => '19.13107444,41.91031204',
            ),
            345 =>
            array (
                'id' => 1991,
                'name_ar' => 'الشرق',
                'name_en' => 'ash sharq',
                'city_id' => 1294,
                'neCoordinates' => '19.11005214,41.93034401',
                'swCoordinates' => '19.09769618,41.91746804',
            ),
            346 =>
            array (
                'id' => 1992,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 1294,
                'neCoordinates' => '19.11825469,41.96454876',
                'swCoordinates' => '19.09063690,41.92779747',
            ),
            347 =>
            array (
                'id' => 1993,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 1294,
                'neCoordinates' => '19.13353448,41.95364270',
                'swCoordinates' => '19.11478256,41.93166017',
            ),
            348 =>
            array (
                'id' => 1994,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1294,
                'neCoordinates' => '19.13193153,41.93901015',
                'swCoordinates' => '19.11709930,41.92141477',
            ),
            349 =>
            array (
                'id' => 1995,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1294,
                'neCoordinates' => '19.14851842,41.94430034',
                'swCoordinates' => '19.13013798,41.92044364',
            ),
            350 =>
            array (
                'id' => 1996,
                'name_ar' => 'العدالة',
                'name_en' => 'al adalah',
                'city_id' => 1294,
                'neCoordinates' => '19.11972649,41.94298635',
                'swCoordinates' => '19.10735004,41.92289308',
            ),
            351 =>
            array (
                'id' => 1997,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 1294,
                'neCoordinates' => '19.14851842,41.92149684',
                'swCoordinates' => '19.12031178,41.89640583',
            ),
            352 =>
            array (
                'id' => 1998,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyyah',
                'city_id' => 1294,
                'neCoordinates' => '19.12593422,41.92610428',
                'swCoordinates' => '19.09349847,41.89059313',
            ),
            353 =>
            array (
                'id' => 2000,
                'name_ar' => 'اليرموك',
                'name_en' => 'al yarmuk',
                'city_id' => 2421,
                'neCoordinates' => '25.86658467,43.49298311',
                'swCoordinates' => '25.84322876,43.47064595',
            ),
            354 =>
            array (
                'id' => 2001,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2421,
                'neCoordinates' => '25.86361059,43.50160835',
                'swCoordinates' => '25.84383406,43.48292091',
            ),
            355 =>
            array (
                'id' => 2002,
                'name_ar' => 'الملك عبدالعزيز',
                'name_en' => 'king abdulaziz',
                'city_id' => 2421,
                'neCoordinates' => '25.86915472,43.50854545',
                'swCoordinates' => '25.85413471,43.49027455',
            ),
            356 =>
            array (
                'id' => 2003,
                'name_ar' => 'الاحتفالات',
                'name_en' => 'al ihtifalat',
                'city_id' => 2421,
                'neCoordinates' => '25.86152716,43.47594347',
                'swCoordinates' => '25.84224132,43.45825015',
            ),
            357 =>
            array (
                'id' => 2004,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2421,
                'neCoordinates' => '25.85834970,43.45877013',
                'swCoordinates' => '25.82221048,43.42365548',
            ),
            358 =>
            array (
                'id' => 2005,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 2421,
                'neCoordinates' => '25.87444679,43.51606748',
                'swCoordinates' => '25.85901740,43.49934552',
            ),
            359 =>
            array (
                'id' => 2006,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 2421,
                'neCoordinates' => '25.87868280,43.55313263',
                'swCoordinates' => '25.83856393,43.50746374',
            ),
            360 =>
            array (
                'id' => 2007,
                'name_ar' => 'التعليم',
                'name_en' => 'at talim',
                'city_id' => 2421,
                'neCoordinates' => '25.91354969,43.57908777',
                'swCoordinates' => '25.87456970,43.53055969',
            ),
            361 =>
            array (
                'id' => 2008,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 2421,
                'neCoordinates' => '25.89780554,43.53699275',
                'swCoordinates' => '25.87523112,43.52546142',
            ),
            362 =>
            array (
                'id' => 2009,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2421,
                'neCoordinates' => '25.89273498,43.51365493',
                'swCoordinates' => '25.87444679,43.49412070',
            ),
            363 =>
            array (
                'id' => 2010,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 2421,
                'neCoordinates' => '25.89174408,43.52826654',
                'swCoordinates' => '25.87730042,43.50971508',
            ),
            364 =>
            array (
                'id' => 2011,
                'name_ar' => 'الجندل',
                'name_en' => 'al jandal',
                'city_id' => 2421,
                'neCoordinates' => '25.90054880,43.53055969',
                'swCoordinates' => '25.88857110,43.50605197',
            ),
            365 =>
            array (
                'id' => 2012,
                'name_ar' => 'وادي الرمة',
                'name_en' => 'wadi ar rimma',
                'city_id' => 2421,
                'neCoordinates' => '25.90149521,43.51087356',
                'swCoordinates' => '25.88703089,43.49092800',
            ),
            366 =>
            array (
                'id' => 2013,
                'name_ar' => 'الملك فيصل',
                'name_en' => 'king faisal',
                'city_id' => 2421,
                'neCoordinates' => '25.88960583,43.50352915',
                'swCoordinates' => '25.87506661,43.48721481',
            ),
            367 =>
            array (
                'id' => 2014,
                'name_ar' => 'المطار',
                'name_en' => 'airport',
                'city_id' => 2421,
                'neCoordinates' => '25.88086805,43.50746374',
                'swCoordinates' => '25.86915472,43.49387616',
            ),
            368 =>
            array (
                'id' => 2015,
                'name_ar' => 'الزهرة',
                'name_en' => 'az zahrah',
                'city_id' => 2421,
                'neCoordinates' => '25.87506661,43.49934552',
                'swCoordinates' => '25.86659852,43.48718102',
            ),
            369 =>
            array (
                'id' => 2016,
                'name_ar' => 'الملك خالد',
                'name_en' => 'king khalid',
                'city_id' => 2421,
                'neCoordinates' => '25.88276366,43.49387616',
                'swCoordinates' => '25.86520103,43.46644669',
            ),
            370 =>
            array (
                'id' => 2017,
                'name_ar' => 'السعادة',
                'name_en' => 'as saadah',
                'city_id' => 2421,
                'neCoordinates' => '25.86844660,43.49033545',
                'swCoordinates' => '25.86184595,43.47029065',
            ),
            371 =>
            array (
                'id' => 2018,
                'name_ar' => 'قصر بن عقيل',
                'name_en' => 'qasr ibn aqil',
                'city_id' => 2421,
                'neCoordinates' => '25.86436168,43.39650700',
                'swCoordinates' => '25.82159665,43.34511456',
            ),
            372 =>
            array (
                'id' => 2019,
                'name_ar' => 'الحوطة',
                'name_en' => 'al hutah',
                'city_id' => 2421,
                'neCoordinates' => '25.86510650,43.54202067',
                'swCoordinates' => '25.83287761,43.50152824',
            ),
            373 =>
            array (
                'id' => 2400,
                'name_ar' => 'السلاح',
                'name_en' => 'as silah',
                'city_id' => 2467,
                'neCoordinates' => '26.11001560,43.67141602',
                'swCoordinates' => '26.06142534,43.63608500',
            ),
            374 =>
            array (
                'id' => 2401,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 2467,
                'neCoordinates' => '26.06346426,43.64783121',
                'swCoordinates' => '26.04878306,43.61366497',
            ),
            375 =>
            array (
                'id' => 2402,
                'name_ar' => 'الرفيعة',
                'name_en' => 'ar rafiah',
                'city_id' => 2467,
                'neCoordinates' => '26.07134981,43.65057032',
                'swCoordinates' => '26.05665248,43.63229978',
            ),
            376 =>
            array (
                'id' => 2403,
                'name_ar' => 'السحابين الشمالي',
                'name_en' => 'as sahabin ash shamali',
                'city_id' => 2467,
                'neCoordinates' => '26.07170987,43.61120962',
                'swCoordinates' => '26.05347730,43.58880529',
            ),
            377 =>
            array (
                'id' => 2404,
                'name_ar' => 'الخزان',
                'name_en' => 'al khazzan',
                'city_id' => 2467,
                'neCoordinates' => '26.06853629,43.56780796',
                'swCoordinates' => '26.05513954,43.55966039',
            ),
            378 =>
            array (
                'id' => 2405,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 2467,
                'neCoordinates' => '26.08018829,43.56059845',
                'swCoordinates' => '26.06416943,43.54369678',
            ),
            379 =>
            array (
                'id' => 2406,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2467,
                'neCoordinates' => '26.06461314,43.55991278',
                'swCoordinates' => '26.05518161,43.54667475',
            ),
            380 =>
            array (
                'id' => 2407,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 2467,
                'neCoordinates' => '26.05558005,43.55973639',
                'swCoordinates' => '26.04408621,43.54913693',
            ),
            381 =>
            array (
                'id' => 2408,
                'name_ar' => 'التعاون',
                'name_en' => 'at taawun',
                'city_id' => 2467,
                'neCoordinates' => '26.05889413,43.56790277',
                'swCoordinates' => '26.04568743,43.55932051',
            ),
            382 =>
            array (
                'id' => 2409,
                'name_ar' => 'الافراح',
                'name_en' => 'al afrah',
                'city_id' => 2467,
                'neCoordinates' => '26.05866453,43.57674262',
                'swCoordinates' => '26.04855523,43.56780796',
            ),
            383 =>
            array (
                'id' => 2410,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 2467,
                'neCoordinates' => '26.06659300,43.57522411',
                'swCoordinates' => '26.05767366,43.56768156',
            ),
            384 =>
            array (
                'id' => 2411,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2467,
                'neCoordinates' => '26.06536703,43.61953478',
                'swCoordinates' => '26.05269121,43.60933735',
            ),
            385 =>
            array (
                'id' => 2412,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 2467,
                'neCoordinates' => '26.04545526,43.56568996',
                'swCoordinates' => '26.02905802,43.54346639',
            ),
            386 =>
            array (
                'id' => 2413,
                'name_ar' => 'المجد',
                'name_en' => 'al majd',
                'city_id' => 2467,
                'neCoordinates' => '26.08557251,43.64188251',
                'swCoordinates' => '26.06953420,43.62014423',
            ),
            387 =>
            array (
                'id' => 2414,
                'name_ar' => 'الربوة',
                'name_en' => 'al rabwah',
                'city_id' => 2467,
                'neCoordinates' => '26.09025958,43.62477715',
                'swCoordinates' => '26.08216571,43.61413079',
            ),
            388 =>
            array (
                'id' => 2415,
                'name_ar' => 'الياسمين',
                'name_en' => 'al yasmin',
                'city_id' => 2467,
                'neCoordinates' => '26.07470676,43.62215396',
                'swCoordinates' => '26.06346426,43.61103074',
            ),
            389 =>
            array (
                'id' => 2416,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 2467,
                'neCoordinates' => '26.07236896,43.63474499',
                'swCoordinates' => '26.06065310,43.61953478',
            ),
            390 =>
            array (
                'id' => 2417,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabii',
                'city_id' => 2467,
                'neCoordinates' => '26.08377001,43.62260970',
                'swCoordinates' => '26.07333766,43.61216297',
            ),
            391 =>
            array (
                'id' => 2418,
                'name_ar' => 'الريان',
                'name_en' => 'ar rayyan',
                'city_id' => 2467,
                'neCoordinates' => '26.08552998,43.61413079',
                'swCoordinates' => '26.07006700,43.60106321',
            ),
            392 =>
            array (
                'id' => 2419,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 2467,
                'neCoordinates' => '26.08554887,43.60448306',
                'swCoordinates' => '26.06930345,43.59514806',
            ),
            393 =>
            array (
                'id' => 2420,
                'name_ar' => 'الخبراء القديمة',
                'name_en' => 'al khabra ash shamali',
                'city_id' => 2467,
                'neCoordinates' => '26.06528854,43.68638827',
                'swCoordinates' => '26.04497461,43.64783121',
            ),
            394 =>
            array (
                'id' => 2421,
                'name_ar' => 'زبيدة',
                'name_en' => 'zubaiydah',
                'city_id' => 2467,
                'neCoordinates' => '26.04855523,43.57501568',
                'swCoordinates' => '26.03547752,43.55861156',
            ),
            395 =>
            array (
                'id' => 2422,
                'name_ar' => 'السحابين الجنوبي',
                'name_en' => 'as sahabin al janubi',
                'city_id' => 2467,
                'neCoordinates' => '26.05488798,43.60587828',
                'swCoordinates' => '26.03450732,43.58617786',
            ),
            396 =>
            array (
                'id' => 2423,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 3174,
                'neCoordinates' => '22.31383958,46.71265837',
                'swCoordinates' => '22.28838688,46.69608414',
            ),
            397 =>
            array (
                'id' => 2424,
                'name_ar' => 'السحاب',
                'name_en' => 'as sahab',
                'city_id' => 3174,
                'neCoordinates' => '22.31507822,46.73186373',
                'swCoordinates' => '22.29929558,46.71062774',
            ),
            398 =>
            array (
                'id' => 2425,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 3174,
                'neCoordinates' => '22.29475686,46.73068434',
                'swCoordinates' => '22.28294690,46.72106684',
            ),
            399 =>
            array (
                'id' => 2426,
                'name_ar' => 'الدوائر',
                'name_en' => 'ad dawair',
                'city_id' => 3174,
                'neCoordinates' => '22.30227812,46.72602339',
                'swCoordinates' => '22.28567667,46.70751500',
            ),
            400 =>
            array (
                'id' => 2427,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 3174,
                'neCoordinates' => '22.30152978,46.73276362',
                'swCoordinates' => '22.29329236,46.72392821',
            ),
            401 =>
            array (
                'id' => 2428,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 3174,
                'neCoordinates' => '22.28838688,46.72668871',
                'swCoordinates' => '22.26477191,46.69596871',
            ),
            402 =>
            array (
                'id' => 2429,
                'name_ar' => 'الجفيدرية',
                'name_en' => 'al jufaidariyah',
                'city_id' => 3174,
                'neCoordinates' => '22.28593896,46.74746559',
                'swCoordinates' => '22.27484707,46.72668871',
            ),
            403 =>
            array (
                'id' => 2430,
                'name_ar' => 'غصيبة',
                'name_en' => 'ghusaiba',
                'city_id' => 3174,
                'neCoordinates' => '22.29329236,46.74301557',
                'swCoordinates' => '22.28259534,46.72821079',
            ),
            404 =>
            array (
                'id' => 2431,
                'name_ar' => 'المبرز',
                'name_en' => 'al mubarraz',
                'city_id' => 3174,
                'neCoordinates' => '22.30175113,46.74089121',
                'swCoordinates' => '22.29005400,46.73068434',
            ),
            405 =>
            array (
                'id' => 2432,
                'name_ar' => 'السعودية',
                'name_en' => 'as saudia',
                'city_id' => 3174,
                'neCoordinates' => '22.28294690,46.74622690',
                'swCoordinates' => '22.26800408,46.71941628',
            ),
            406 =>
            array (
                'id' => 2433,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 3174,
                'neCoordinates' => '22.33083168,46.73046836',
                'swCoordinates' => '22.31332659,46.71335121',
            ),
            407 =>
            array (
                'id' => 2434,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1053,
                'neCoordinates' => '23.79732284,38.79254823',
                'swCoordinates' => '23.78498202,38.77769237',
            ),
            408 =>
            array (
                'id' => 2435,
                'name_ar' => 'الغزوة',
                'name_en' => 'al ghazwah',
                'city_id' => 1053,
                'neCoordinates' => '23.78854280,38.80267903',
                'swCoordinates' => '23.77257023,38.78951384',
            ),
            409 =>
            array (
                'id' => 2436,
                'name_ar' => 'العدوة',
                'name_en' => 'al adwah',
                'city_id' => 1053,
                'neCoordinates' => '23.80644689,38.79006165',
                'swCoordinates' => '23.77709261,38.75330368',
            ),
            410 =>
            array (
                'id' => 2437,
                'name_ar' => 'الغزلاني',
                'name_en' => 'al ghuzlani',
                'city_id' => 1053,
                'neCoordinates' => '23.78936986,38.77325060',
                'swCoordinates' => '23.72637700,38.71673485',
            ),
            411 =>
            array (
                'id' => 2438,
                'name_ar' => 'ادمان',
                'name_en' => 'idman',
                'city_id' => 1053,
                'neCoordinates' => '23.77835166,38.83116002',
                'swCoordinates' => '23.73463072,38.79149293',
            ),
            412 =>
            array (
                'id' => 2439,
                'name_ar' => 'الجديد',
                'name_en' => 'al jadid',
                'city_id' => 1053,
                'neCoordinates' => '23.81415515,38.84651835',
                'swCoordinates' => '23.80704291,38.83680806',
            ),
            413 =>
            array (
                'id' => 2440,
                'name_ar' => 'الشهداء',
                'name_en' => 'ash shuhada',
                'city_id' => 1053,
                'neCoordinates' => '23.78393035,38.79735056',
                'swCoordinates' => '23.75383317,38.77559162',
            ),
            414 =>
            array (
                'id' => 2834,
                'name_ar' => 'المدينة الجديدة',
                'name_en' => 'al madinah al jadidah',
                'city_id' => 3158,
                'neCoordinates' => '23.64970665,46.51543408',
                'swCoordinates' => '23.62488357,46.49795720',
            ),
            415 =>
            array (
                'id' => 2835,
                'name_ar' => 'الركية',
                'name_en' => 'ar rukiyah',
                'city_id' => 3158,
                'neCoordinates' => '23.62732210,46.51968710',
                'swCoordinates' => '23.60002948,46.46812265',
            ),
            416 =>
            array (
                'id' => 2836,
                'name_ar' => 'الحزيمية',
                'name_en' => 'al huzaimiyah',
                'city_id' => 3158,
                'neCoordinates' => '23.62845565,46.54047562',
                'swCoordinates' => '23.61383548,46.51543408',
            ),
            417 =>
            array (
                'id' => 2837,
                'name_ar' => 'وسط المدينة',
                'name_en' => 'wasat al madinah',
                'city_id' => 3158,
                'neCoordinates' => '23.61911532,46.54152965',
                'swCoordinates' => '23.61164699,46.51881949',
            ),
            418 =>
            array (
                'id' => 2838,
                'name_ar' => 'العثمانية',
                'name_en' => 'al uthmaniyah',
                'city_id' => 3158,
                'neCoordinates' => '23.63871269,46.53118833',
                'swCoordinates' => '23.62632541,46.52169663',
            ),
            419 =>
            array (
                'id' => 2839,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 3158,
                'neCoordinates' => '23.62197030,46.54858208',
                'swCoordinates' => '23.61263746,46.54007866',
            ),
            420 =>
            array (
                'id' => 2840,
                'name_ar' => 'المفيجر',
                'name_en' => 'al mufaiger',
                'city_id' => 3158,
                'neCoordinates' => '23.61465388,46.58947363',
                'swCoordinates' => '23.60169533,46.55275055',
            ),
            421 =>
            array (
                'id' => 2841,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 1228,
                'neCoordinates' => '27.20623443,42.47213689',
                'swCoordinates' => '27.18084264,42.44544912',
            ),
            422 =>
            array (
                'id' => 2842,
                'name_ar' => 'النهضة',
                'name_en' => 'an nahdah',
                'city_id' => 1228,
                'neCoordinates' => '27.19041759,42.45314790',
                'swCoordinates' => '27.17177795,42.43648543',
            ),
            423 =>
            array (
                'id' => 2843,
                'name_ar' => 'الصالحية',
                'name_en' => 'as salhiyah',
                'city_id' => 1228,
                'neCoordinates' => '27.19280119,42.49048567',
                'swCoordinates' => '27.15713725,42.44496118',
            ),
            424 =>
            array (
                'id' => 2844,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 1228,
                'neCoordinates' => '27.17400139,42.46155170',
                'swCoordinates' => '27.15436764,42.43718009',
            ),
            425 =>
            array (
                'id' => 2845,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 1228,
                'neCoordinates' => '27.21637186,42.50184456',
                'swCoordinates' => '27.18315384,42.45851068',
            ),
            426 =>
            array (
                'id' => 2846,
                'name_ar' => 'الازدهار',
                'name_en' => 'al izdihar',
                'city_id' => 1228,
                'neCoordinates' => '27.20323844,42.44957504',
                'swCoordinates' => '27.18047009,42.41460443',
            ),
            427 =>
            array (
                'id' => 2847,
                'name_ar' => 'الورود',
                'name_en' => 'al wurud',
                'city_id' => 1228,
                'neCoordinates' => '27.18877232,42.44283171',
                'swCoordinates' => '27.17529488,42.41839911',
            ),
            428 =>
            array (
                'id' => 2848,
                'name_ar' => 'الملك عبدالله',
                'name_en' => 'king abdullah',
                'city_id' => 1228,
                'neCoordinates' => '27.19977352,42.42883045',
                'swCoordinates' => '27.18914160,42.41211932',
            ),
            429 =>
            array (
                'id' => 2849,
                'name_ar' => 'الحمراء',
                'name_en' => 'al hamra',
                'city_id' => 1228,
                'neCoordinates' => '27.18177183,42.43974429',
                'swCoordinates' => '27.15720336,42.40405947',
            ),
            430 =>
            array (
                'id' => 2850,
                'name_ar' => 'العليا',
                'name_en' => 'al ulaya',
                'city_id' => 1228,
                'neCoordinates' => '27.17186408,42.44236779',
                'swCoordinates' => '27.14613417,42.39878956',
            ),
            431 =>
            array (
                'id' => 2851,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 1228,
                'neCoordinates' => '27.15431333,42.43348932',
                'swCoordinates' => '27.13643110,42.41426703',
            ),
            432 =>
            array (
                'id' => 3318,
                'name_ar' => 'المتحف',
                'name_en' => 'al mathaf',
                'city_id' => 2777,
                'neCoordinates' => '26.33731909,44.25639927',
                'swCoordinates' => '26.31988466,44.24449395',
            ),
            433 =>
            array (
                'id' => 3319,
                'name_ar' => 'النخيل',
                'name_en' => 'an nakhil',
                'city_id' => 2777,
                'neCoordinates' => '26.33208901,44.24551020',
                'swCoordinates' => '26.31855482,44.22466507',
            ),
            434 =>
            array (
                'id' => 3320,
                'name_ar' => 'الشفاء',
                'name_en' => 'ash shifa',
                'city_id' => 2777,
                'neCoordinates' => '26.33461456,44.25081337',
                'swCoordinates' => '26.31858696,44.24017791',
            ),
            435 =>
            array (
                'id' => 3322,
                'name_ar' => 'البلاد',
                'name_en' => 'al bilad',
                'city_id' => 2777,
                'neCoordinates' => '26.33973065,44.26811780',
                'swCoordinates' => '26.32708688,44.25030905',
            ),
            436 =>
            array (
                'id' => 3324,
                'name_ar' => 'الفاروق',
                'name_en' => 'al faruq',
                'city_id' => 2777,
                'neCoordinates' => '26.31008068,44.26649987',
                'swCoordinates' => '26.30316942,44.25939149',
            ),
            437 =>
            array (
                'id' => 3325,
                'name_ar' => 'برزة',
                'name_en' => 'barzah',
                'city_id' => 2777,
                'neCoordinates' => '26.31362082,44.26406155',
                'swCoordinates' => '26.30848106,44.25934328',
            ),
            438 =>
            array (
                'id' => 3326,
                'name_ar' => 'الواسط',
                'name_en' => 'al wasit',
                'city_id' => 2777,
                'neCoordinates' => '26.31642561,44.27315355',
                'swCoordinates' => '26.30945217,44.26310541',
            ),
            439 =>
            array (
                'id' => 3327,
                'name_ar' => 'البدع',
                'name_en' => 'al bada',
                'city_id' => 2777,
                'neCoordinates' => '26.32139166,44.26669947',
                'swCoordinates' => '26.31232879,44.25649608',
            ),
            440 =>
            array (
                'id' => 3328,
                'name_ar' => 'الجال',
                'name_en' => 'al jal',
                'city_id' => 2777,
                'neCoordinates' => '26.32159931,44.27262026',
                'swCoordinates' => '26.31324114,44.26547707',
            ),
            441 =>
            array (
                'id' => 3329,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 2777,
                'neCoordinates' => '26.32138675,44.25962301',
                'swCoordinates' => '26.30961127,44.25361378',
            ),
            442 =>
            array (
                'id' => 3330,
                'name_ar' => 'الميدان',
                'name_en' => 'al midan',
                'city_id' => 2777,
                'neCoordinates' => '26.32065504,44.25706535',
                'swCoordinates' => '26.30748218,44.24683455',
            ),
            443 =>
            array (
                'id' => 3331,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 2777,
                'neCoordinates' => '26.31017196,44.26238070',
                'swCoordinates' => '26.28723727,44.25143738',
            ),
            444 =>
            array (
                'id' => 3332,
                'name_ar' => 'الصفاء',
                'name_en' => 'as safa',
                'city_id' => 2777,
                'neCoordinates' => '26.30668821,44.27124397',
                'swCoordinates' => '26.30298486,44.26625260',
            ),
            445 =>
            array (
                'id' => 3333,
                'name_ar' => 'القادسية',
                'name_en' => 'al qadisiyah',
                'city_id' => 2777,
                'neCoordinates' => '26.31879214,44.24908619',
                'swCoordinates' => '26.30914707,44.23063972',
            ),
            446 =>
            array (
                'id' => 3334,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2777,
                'neCoordinates' => '26.34437909,44.25030905',
                'swCoordinates' => '26.33462443,44.24205847',
            ),
            447 =>
            array (
                'id' => 3335,
                'name_ar' => 'المتوكل',
                'name_en' => 'al mutawakil',
                'city_id' => 2777,
                'neCoordinates' => '26.31173992,44.27375273',
                'swCoordinates' => '26.30493220,44.26591830',
            ),
            448 =>
            array (
                'id' => 3336,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 1248,
                'neCoordinates' => '21.90904905,42.02283761',
                'swCoordinates' => '21.89896674,42.01281261',
            ),
            449 =>
            array (
                'id' => 3337,
                'name_ar' => 'الناصرية',
                'name_en' => 'an nasiriyah',
                'city_id' => 1248,
                'neCoordinates' => '21.90631943,42.02992263',
                'swCoordinates' => '21.89703001,42.02006318',
            ),
            450 =>
            array (
                'id' => 3338,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 1248,
                'neCoordinates' => '21.92497357,42.02958132',
                'swCoordinates' => '21.91359154,42.01900499',
            ),
            451 =>
            array (
                'id' => 3339,
                'name_ar' => 'الحزم',
                'name_en' => 'al hazm',
                'city_id' => 1248,
                'neCoordinates' => '21.91633892,42.02587948',
                'swCoordinates' => '21.90631943,42.01596115',
            ),
            452 =>
            array (
                'id' => 3340,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 1248,
                'neCoordinates' => '21.91988541,42.03574139',
                'swCoordinates' => '21.90320262,42.02283761',
            ),
            453 =>
            array (
                'id' => 3341,
                'name_ar' => 'الحديقة',
                'name_en' => 'al hadiqah',
                'city_id' => 1248,
                'neCoordinates' => '21.91600186,42.03545832',
                'swCoordinates' => '21.91065565,42.02968101',
            ),
            454 =>
            array (
                'id' => 3342,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 1248,
                'neCoordinates' => '21.92243945,42.03582625',
                'swCoordinates' => '21.91467152,42.02633625',
            ),
            455 =>
            array (
                'id' => 3343,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 1248,
                'neCoordinates' => '21.93788897,42.03493006',
                'swCoordinates' => '21.92243945,42.02259087',
            ),
            456 =>
            array (
                'id' => 3344,
                'name_ar' => 'السوق القديم',
                'name_en' => 'as suq al qadim',
                'city_id' => 1248,
                'neCoordinates' => '21.91471708,42.04531619',
                'swCoordinates' => '21.90179610,42.03139546',
            ),
            457 =>
            array (
                'id' => 3345,
                'name_ar' => 'الحارثية',
                'name_en' => 'al harthiyah',
                'city_id' => 1248,
                'neCoordinates' => '21.90641217,42.04382871',
                'swCoordinates' => '21.89697526,42.03013189',
            ),
            458 =>
            array (
                'id' => 3346,
                'name_ar' => 'الهجرة',
                'name_en' => 'al hijrah',
                'city_id' => 1248,
                'neCoordinates' => '21.90367505,42.04256651',
                'swCoordinates' => '21.88995475,42.02116234',
            ),
            459 =>
            array (
                'id' => 3347,
                'name_ar' => 'الدغمية',
                'name_en' => 'ad daghmiyah',
                'city_id' => 1248,
                'neCoordinates' => '21.97042573,42.06138870',
                'swCoordinates' => '21.95863424,42.04838575',
            ),
            460 =>
            array (
                'id' => 3353,
                'name_ar' => 'الرفاع',
                'name_en' => 'ar rifaa',
                'city_id' => 89,
                'neCoordinates' => '27.56303217,47.71666032',
                'swCoordinates' => '27.55547168,47.70829989',
            ),
            461 =>
            array (
                'id' => 3354,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 89,
                'neCoordinates' => '27.56946705,47.71313411',
                'swCoordinates' => '27.56108165,47.70455237',
            ),
            462 =>
            array (
                'id' => 3355,
                'name_ar' => 'الواحة',
                'name_en' => 'al wahah',
                'city_id' => 89,
                'neCoordinates' => '27.55874730,47.71415066',
                'swCoordinates' => '27.55225499,47.70670767',
            ),
            463 =>
            array (
                'id' => 3356,
                'name_ar' => 'غرناطة',
                'name_en' => 'ghirnatah',
                'city_id' => 89,
                'neCoordinates' => '27.56199592,47.71073256',
                'swCoordinates' => '27.55557698,47.70327266',
            ),
            464 =>
            array (
                'id' => 3357,
                'name_ar' => 'الزهور',
                'name_en' => 'az zuhur',
                'city_id' => 89,
                'neCoordinates' => '27.56510189,47.70744600',
                'swCoordinates' => '27.55894095,47.70057651',
            ),
            465 =>
            array (
                'id' => 3358,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 89,
                'neCoordinates' => '27.57015212,47.70455237',
                'swCoordinates' => '27.56070844,47.69727753',
            ),
            466 =>
            array (
                'id' => 3359,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 89,
                'neCoordinates' => '27.57198421,47.70839769',
                'swCoordinates' => '27.56510189,47.70208259',
            ),
            467 =>
            array (
                'id' => 3360,
                'name_ar' => 'قصر عالي',
                'name_en' => 'qasr aali',
                'city_id' => 89,
                'neCoordinates' => '27.56185064,47.70673284',
                'swCoordinates' => '27.55231646,47.69516555',
            ),
            468 =>
            array (
                'id' => 3361,
                'name_ar' => 'قرطبة',
                'name_en' => 'qurtubah',
                'city_id' => 89,
                'neCoordinates' => '27.55555173,47.71019006',
                'swCoordinates' => '27.54446692,47.69368730',
            ),
            469 =>
            array (
                'id' => 3362,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 89,
                'neCoordinates' => '27.56514334,47.69899210',
                'swCoordinates' => '27.55530831,47.68599991',
            ),
            470 =>
            array (
                'id' => 3363,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 89,
                'neCoordinates' => '27.55177420,47.70068876',
                'swCoordinates' => '27.54143904,47.69120943',
            ),
            471 =>
            array (
                'id' => 3364,
                'name_ar' => 'الصناعيه',
                'name_en' => 'as sinaiyah',
                'city_id' => 89,
                'neCoordinates' => '27.56214333,47.69044908',
                'swCoordinates' => '27.55242356,47.67118632',
            ),
            472 =>
            array (
                'id' => 3365,
                'name_ar' => 'السلام',
                'name_en' => 'as salam',
                'city_id' => 89,
                'neCoordinates' => '27.55530831,47.69368730',
                'swCoordinates' => '27.54712174,47.68429716',
            ),
            473 =>
            array (
                'id' => 3366,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzha',
                'city_id' => 89,
                'neCoordinates' => '27.58934517,47.72262916',
                'swCoordinates' => '27.56946705,47.70028247',
            ),
            474 =>
            array (
                'id' => 3367,
                'name_ar' => 'المروج',
                'name_en' => 'al muruj',
                'city_id' => 89,
                'neCoordinates' => '27.55825805,47.69844716',
                'swCoordinates' => '27.55177420,47.69044908',
            ),
            475 =>
            array (
                'id' => 3369,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 115,
                'neCoordinates' => '27.47008372,48.49849145',
                'swCoordinates' => '27.45938010,48.48080529',
            ),
            476 =>
            array (
                'id' => 3370,
                'name_ar' => 'التشاليح',
                'name_en' => 'at tashalih',
                'city_id' => 115,
                'neCoordinates' => '27.46380409,48.50681132',
                'swCoordinates' => '27.45632705,48.49641560',
            ),
            477 =>
            array (
                'id' => 3371,
                'name_ar' => 'الربيع',
                'name_en' => 'ar rabi',
                'city_id' => 115,
                'neCoordinates' => '27.48971802,48.52494612',
                'swCoordinates' => '27.46779241,48.49700922',
            ),
            478 =>
            array (
                'id' => 3372,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 115,
                'neCoordinates' => '27.47825258,48.50671646',
                'swCoordinates' => '27.46191636,48.48587478',
            ),
            479 =>
            array (
                'id' => 3374,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 115,
                'neCoordinates' => '27.48121147,48.53757230',
                'swCoordinates' => '27.45655942,48.50661582',
            ),
            480 =>
            array (
                'id' => 3375,
                'name_ar' => 'المحمدية',
                'name_en' => 'al muhammadiyah',
                'city_id' => 115,
                'neCoordinates' => '27.48079538,48.49272957',
                'swCoordinates' => '27.46483882,48.47645681',
            ),
            481 =>
            array (
                'id' => 3376,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 115,
                'neCoordinates' => '27.48121638,48.48273399',
                'swCoordinates' => '27.46484420,48.46247314',
            ),
            482 =>
            array (
                'id' => 3377,
                'name_ar' => 'العدل',
                'name_en' => 'al adl',
                'city_id' => 6,
                'neCoordinates' => '21.46097480,39.89831915',
                'swCoordinates' => '21.42932454,39.85566210',
            ),
            483 =>
            array (
                'id' => 3378,
                'name_ar' => 'الروضة',
                'name_en' => 'ar rawdah',
                'city_id' => 6,
                'neCoordinates' => '21.43243473,39.86531641',
                'swCoordinates' => '21.42171380,39.83419594',
            ),
            484 =>
            array (
                'id' => 3379,
                'name_ar' => 'المعابدة',
                'name_en' => 'al maabdah',
                'city_id' => 6,
                'neCoordinates' => '21.44148993,39.86162028',
                'swCoordinates' => '21.42908803,39.83542319',
            ),
            485 =>
            array (
                'id' => 3380,
                'name_ar' => 'الخنساء',
                'name_en' => 'al khansa',
                'city_id' => 6,
                'neCoordinates' => '21.45627545,39.85566210',
                'swCoordinates' => '21.43806171,39.83943861',
            ),
            486 =>
            array (
                'id' => 3381,
                'name_ar' => 'السليمانية',
                'name_en' => 'as sulimaniyah',
                'city_id' => 6,
                'neCoordinates' => '21.43537423,39.83918265',
                'swCoordinates' => '21.42874403,39.82763486',
            ),
            487 =>
            array (
                'id' => 3382,
                'name_ar' => 'الجميزة',
                'name_en' => 'al jummayzah',
                'city_id' => 6,
                'neCoordinates' => '21.44359634,39.84013757',
                'swCoordinates' => '21.43232805,39.82842192',
            ),
            488 =>
            array (
                'id' => 3383,
                'name_ar' => 'جبل النور',
                'name_en' => 'jabal an nur',
                'city_id' => 6,
                'neCoordinates' => '21.47511120,39.89627704',
                'swCoordinates' => '21.43823182,39.84824187',
            ),
            489 =>
            array (
                'id' => 3384,
                'name_ar' => 'الهنداوية',
                'name_en' => 'al hindawiyah',
                'city_id' => 6,
                'neCoordinates' => '21.42449287,39.80876149',
                'swCoordinates' => '21.40841419,39.79134033',
            ),
            490 =>
            array (
                'id' => 3385,
                'name_ar' => 'الرصيفة',
                'name_en' => 'ar rusayfah',
                'city_id' => 6,
                'neCoordinates' => '21.42456855,39.79974728',
                'swCoordinates' => '21.39834204,39.78080658',
            ),
            491 =>
            array (
                'id' => 3386,
                'name_ar' => 'جرهم',
                'name_en' => 'jarham',
                'city_id' => 6,
                'neCoordinates' => '21.41164716,39.82189061',
                'swCoordinates' => '21.39803320,39.80876149',
            ),
            492 =>
            array (
                'id' => 3387,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khalidiyah',
                'city_id' => 6,
                'neCoordinates' => '21.41096492,39.81109652',
                'swCoordinates' => '21.39426513,39.78856319',
            ),
            493 =>
            array (
                'id' => 3388,
                'name_ar' => 'المسفلة',
                'name_en' => 'al misfalah',
                'city_id' => 6,
                'neCoordinates' => '21.41105479,39.82899317',
                'swCoordinates' => '21.39723857,39.81707762',
            ),
            494 =>
            array (
                'id' => 3389,
                'name_ar' => 'التقوى',
                'name_en' => 'at taqwa',
                'city_id' => 6,
                'neCoordinates' => '21.40265190,39.82761353',
                'swCoordinates' => '21.38526484,39.81052103',
            ),
            495 =>
            array (
                'id' => 3390,
                'name_ar' => 'كدي',
                'name_en' => 'kudy',
                'city_id' => 6,
                'neCoordinates' => '21.41612827,39.85331576',
                'swCoordinates' => '21.38369079,39.82633725',
            ),
            496 =>
            array (
                'id' => 3391,
                'name_ar' => 'القرارة والنقا',
                'name_en' => 'al qararah and an naqa',
                'city_id' => 6,
                'neCoordinates' => '21.43270119,39.82943641',
                'swCoordinates' => '21.42499861,39.82311411',
            ),
            497 =>
            array (
                'id' => 3392,
                'name_ar' => 'الحرم',
                'name_en' => 'al haram',
                'city_id' => 6,
                'neCoordinates' => '21.42557172,39.82906396',
                'swCoordinates' => '21.42022987,39.82460317',
            ),
            498 =>
            array (
                'id' => 3393,
                'name_ar' => 'حارة الباب والشامية',
                'name_en' => 'harat al bab and ash shamiyah',
                'city_id' => 6,
                'neCoordinates' => '21.42766772,39.82690232',
                'swCoordinates' => '21.42167767,39.82009414',
            ),
            499 =>
            array (
                'id' => 3394,
                'name_ar' => 'التيسير',
                'name_en' => 'at taysir',
                'city_id' => 6,
                'neCoordinates' => '21.43397421,39.81716732',
                'swCoordinates' => '21.42282577,39.80744213',
            ),
        ));
        DB::table('neighborhoods')->insert(array (
            0 =>
            array (
                'id' => 3395,
                'name_ar' => 'جرول',
                'name_en' => 'jarwal',
                'city_id' => 6,
                'neCoordinates' => '21.43516981,39.82420166',
                'swCoordinates' => '21.42344195,39.81496450',
            ),
            1 =>
            array (
                'id' => 3396,
                'name_ar' => 'المشاعر',
                'name_en' => 'al mashair',
                'city_id' => 6,
                'neCoordinates' => '21.45805411,40.01374674',
                'swCoordinates' => '21.32586942,39.86074679',
            ),
            2 =>
            array (
                'id' => 3397,
                'name_ar' => 'المرسلات',
                'name_en' => 'al mursalat',
                'city_id' => 6,
                'neCoordinates' => '21.42165897,39.89842782',
                'swCoordinates' => '21.39111088,39.86596837',
            ),
            3 =>
            array (
                'id' => 3398,
                'name_ar' => 'العزيزية',
                'name_en' => 'al aziziyah',
                'city_id' => 6,
                'neCoordinates' => '21.42710849,39.86939052',
                'swCoordinates' => '21.40322012,39.84215519',
            ),
            4 =>
            array (
                'id' => 3399,
                'name_ar' => 'الجامعة',
                'name_en' => 'al jamiah',
                'city_id' => 6,
                'neCoordinates' => '21.41048534,39.89783873',
                'swCoordinates' => '21.38372328,39.85970569',
            ),
            5 =>
            array (
                'id' => 3400,
                'name_ar' => 'النسيم',
                'name_en' => 'an nasim',
                'city_id' => 6,
                'neCoordinates' => '21.40644009,39.89649835',
                'swCoordinates' => '21.35751836,39.85054976',
            ),
            6 =>
            array (
                'id' => 3401,
                'name_ar' => 'الزهراء',
                'name_en' => 'az zahra',
                'city_id' => 6,
                'neCoordinates' => '21.43321619,39.80771812',
                'swCoordinates' => '21.42203931,39.79007981',
            ),
            7 =>
            array (
                'id' => 3402,
                'name_ar' => 'الضيافة',
                'name_en' => 'ad diyafah',
                'city_id' => 6,
                'neCoordinates' => '21.44074343,39.80744213',
                'swCoordinates' => '21.43184529,39.79089101',
            ),
            8 =>
            array (
                'id' => 3403,
                'name_ar' => 'البيبان',
                'name_en' => 'al bibyan',
                'city_id' => 6,
                'neCoordinates' => '21.44128859,39.81230333',
                'swCoordinates' => '21.43153846,39.80516284',
            ),
            9 =>
            array (
                'id' => 3404,
                'name_ar' => 'الحجون',
                'name_en' => 'al hujun',
                'city_id' => 6,
                'neCoordinates' => '21.44140380,39.82886322',
                'swCoordinates' => '21.43127050,39.81051944',
            ),
            10 =>
            array (
                'id' => 3405,
                'name_ar' => 'الطندباوي',
                'name_en' => 'at tandabawi',
                'city_id' => 6,
                'neCoordinates' => '21.42403897,39.81909105',
                'swCoordinates' => '21.41092883,39.81050869',
            ),
            11 =>
            array (
                'id' => 3406,
                'name_ar' => 'الشبيكة',
                'name_en' => 'ash shubaikah',
                'city_id' => 6,
                'neCoordinates' => '21.42377305,39.82371631',
                'swCoordinates' => '21.41105479,39.81753832',
            ),
            12 =>
            array (
                'id' => 3407,
                'name_ar' => 'الهجلة',
                'name_en' => 'al hajlah',
                'city_id' => 6,
                'neCoordinates' => '21.42206566,39.82891029',
                'swCoordinates' => '21.41104646,39.82189061',
            ),
            13 =>
            array (
                'id' => 3408,
                'name_ar' => 'المنصور',
                'name_en' => 'al mansur',
                'city_id' => 6,
                'neCoordinates' => '21.42399679,39.81474057',
                'swCoordinates' => '21.41096492,39.80767658',
            ),
            14 =>
            array (
                'id' => 3409,
                'name_ar' => 'الكعكية',
                'name_en' => 'al kakiyah',
                'city_id' => 6,
                'neCoordinates' => '21.39426513,39.82702457',
                'swCoordinates' => '21.36362895,39.80432229',
            ),
            15 =>
            array (
                'id' => 3410,
                'name_ar' => 'الشوقية',
                'name_en' => 'ash shawqiyah',
                'city_id' => 6,
                'neCoordinates' => '21.40026281,39.81052103',
                'swCoordinates' => '21.37031694,39.78439940',
            ),
            16 =>
            array (
                'id' => 3411,
                'name_ar' => 'الهجرة',
                'name_en' => 'al hijrah',
                'city_id' => 6,
                'neCoordinates' => '21.39417098,39.86784848',
                'swCoordinates' => '21.35553948,39.82761353',
            ),
            17 =>
            array (
                'id' => 3412,
                'name_ar' => 'بطحاء قريش',
                'name_en' => 'batha quraysh',
                'city_id' => 6,
                'neCoordinates' => '21.38539167,39.86371328',
                'swCoordinates' => '21.33922220,39.81512545',
            ),
            18 =>
            array (
                'id' => 3413,
                'name_ar' => 'شرائع المجاهدين',
                'name_en' => 'sharai al mujahidin',
                'city_id' => 6,
                'neCoordinates' => '21.54985985,39.96821702',
                'swCoordinates' => '21.48626944,39.91351325',
            ),
            19 =>
            array (
                'id' => 3414,
                'name_ar' => 'العوالي',
                'name_en' => 'al awali',
                'city_id' => 6,
                'neCoordinates' => '21.36232279,40.01374674',
                'swCoordinates' => '21.25516545,39.85356118',
            ),
            20 =>
            array (
                'id' => 3415,
                'name_ar' => 'الشرائع',
                'name_en' => 'asharai',
                'city_id' => 6,
                'neCoordinates' => '21.54989301,39.94974073',
                'swCoordinates' => '21.47619532,39.88499332',
            ),
            21 =>
            array (
                'id' => 3416,
                'name_ar' => 'الراشدية',
                'name_en' => 'ar rashidiyah',
                'city_id' => 6,
                'neCoordinates' => '21.49293128,40.00603061',
                'swCoordinates' => '21.43542945,39.93622319',
            ),
            22 =>
            array (
                'id' => 3417,
                'name_ar' => 'الخضراء',
                'name_en' => 'al khadra',
                'city_id' => 6,
                'neCoordinates' => '21.48260693,39.99738931',
                'swCoordinates' => '21.38556316,39.89627704',
            ),
            23 =>
            array (
                'id' => 3418,
                'name_ar' => 'الملك فهد',
                'name_en' => 'king fahd',
                'city_id' => 6,
                'neCoordinates' => '21.42047648,39.78824260',
                'swCoordinates' => '21.33035743,39.62275963',
            ),
            24 =>
            array (
                'id' => 3419,
                'name_ar' => 'العكيشية',
                'name_en' => 'al ukayshiyah',
                'city_id' => 6,
                'neCoordinates' => '21.36563561,39.92319440',
                'swCoordinates' => '21.16745556,39.80345551',
            ),
            25 =>
            array (
                'id' => 3420,
                'name_ar' => 'ولي العهد',
                'name_en' => 'waly al ahd',
                'city_id' => 6,
                'neCoordinates' => '21.37625810,39.82460201',
                'swCoordinates' => '21.22454517,39.63339226',
            ),
            26 =>
            array (
                'id' => 3421,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 6,
                'neCoordinates' => '21.47730245,39.83554800',
                'swCoordinates' => '21.43559450,39.81899579',
            ),
            27 =>
            array (
                'id' => 3422,
                'name_ar' => 'ريع زاخر',
                'name_en' => 'ray zakhir',
                'city_id' => 6,
                'neCoordinates' => '21.47715698,39.84605745',
                'swCoordinates' => '21.44027709,39.83030540',
            ),
            28 =>
            array (
                'id' => 3423,
                'name_ar' => 'التنعيم',
                'name_en' => 'at tanim',
                'city_id' => 6,
                'neCoordinates' => '21.51971548,39.83558685',
                'swCoordinates' => '21.46037875,39.79219738',
            ),
            29 =>
            array (
                'id' => 3424,
                'name_ar' => 'الزاهر',
                'name_en' => 'az zahir',
                'city_id' => 6,
                'neCoordinates' => '21.45657781,39.81051944',
                'swCoordinates' => '21.43888559,39.78562866',
            ),
            30 =>
            array (
                'id' => 3425,
                'name_ar' => 'شعب عامر وشعب علي',
                'name_en' => 'shaib amir and shaib ali',
                'city_id' => 6,
                'neCoordinates' => '21.43113568,39.83728364',
                'swCoordinates' => '21.42228816,39.82836668',
            ),
            31 =>
            array (
                'id' => 3426,
                'name_ar' => 'اجياد',
                'name_en' => 'ajyad',
                'city_id' => 6,
                'neCoordinates' => '21.42376255,39.83800755',
                'swCoordinates' => '21.41177651,39.82629898',
            ),
            32 =>
            array (
                'id' => 3427,
                'name_ar' => 'الحمراء وام الجود',
                'name_en' => 'al hamra umm al jud',
                'city_id' => 6,
                'neCoordinates' => '21.44737584,39.78080658',
                'swCoordinates' => '21.35180910,39.61126264',
            ),
            33 =>
            array (
                'id' => 3428,
                'name_ar' => 'النزهة',
                'name_en' => 'an nuzhah',
                'city_id' => 6,
                'neCoordinates' => '21.44034891,39.80010287',
                'swCoordinates' => '21.42047648,39.77000023',
            ),
            34 =>
            array (
                'id' => 3429,
                'name_ar' => 'العتيبية',
                'name_en' => 'al utaybiyah',
                'city_id' => 6,
                'neCoordinates' => '21.46618531,39.82732852',
                'swCoordinates' => '21.43878608,39.80958665',
            ),
            35 =>
            array (
                'id' => 3430,
                'name_ar' => 'الروابي',
                'name_en' => 'ar rawabi',
                'city_id' => 6,
                'neCoordinates' => '21.42236586,39.84335631',
                'swCoordinates' => '21.39756257,39.82639847',
            ),
            36 =>
            array (
                'id' => 3431,
                'name_ar' => 'العمرة الجديدة',
                'name_en' => 'al umrah al jadidah',
                'city_id' => 6,
                'neCoordinates' => '21.60870450,39.85729079',
                'swCoordinates' => '21.51423069,39.76828523',
            ),
            37 =>
            array (
                'id' => 3432,
                'name_ar' => 'السلامة',
                'name_en' => 'as salamah',
                'city_id' => 6,
                'neCoordinates' => '21.51725406,39.79340329',
                'swCoordinates' => '21.41410269,39.60511519',
            ),
            38 =>
            array (
                'id' => 3433,
                'name_ar' => 'البحيرات',
                'name_en' => 'al buhayrat',
                'city_id' => 6,
                'neCoordinates' => '21.52380493,39.80786521',
                'swCoordinates' => '21.45408582,39.70115200',
            ),
            39 =>
            array (
                'id' => 3434,
                'name_ar' => 'النوارية',
                'name_en' => 'an nawwariyah',
                'city_id' => 6,
                'neCoordinates' => '21.58410441,39.79219738',
                'swCoordinates' => '21.48558799,39.68885260',
            ),
            40 =>
            array (
                'id' => 3435,
                'name_ar' => 'الشهداء',
                'name_en' => 'ash shuhada',
                'city_id' => 6,
                'neCoordinates' => '21.46382125,39.81827110',
                'swCoordinates' => '21.44773982,39.79736523',
            ),
            41 =>
            array (
                'id' => 3436,
                'name_ar' => 'وادي جليل',
                'name_en' => 'wadi jalil',
                'city_id' => 6,
                'neCoordinates' => '21.51929128,39.89051223',
                'swCoordinates' => '21.45084162,39.83232849',
            ),
            42 =>
            array (
                'id' => 3437,
                'name_ar' => 'العسيلة',
                'name_en' => 'al usaylah',
                'city_id' => 6,
                'neCoordinates' => '21.56901589,39.91304592',
                'swCoordinates' => '21.46097480,39.83173854',
            ),
            43 =>
            array (
                'id' => 3445,
                'name_ar' => 'الصفاه الشمالي',
                'name_en' => 'as safah al shimali',
                'city_id' => 2268,
                'neCoordinates' => '29.85272215,39.86345417',
                'swCoordinates' => '29.83275756,39.84691918',
            ),
            44 =>
            array (
                'id' => 3446,
                'name_ar' => 'البحيرات',
                'name_en' => 'al buhayrat',
                'city_id' => 2268,
                'neCoordinates' => '29.85228017,39.88512113',
                'swCoordinates' => '29.82541504,39.86004461',
            ),
            45 =>
            array (
                'id' => 3447,
                'name_ar' => 'الصفاه الجنوبي',
                'name_en' => 'as safah al janubi',
                'city_id' => 2268,
                'neCoordinates' => '29.83528230,39.86892314',
                'swCoordinates' => '29.82497517,39.85433182',
            ),
            46 =>
            array (
                'id' => 3448,
                'name_ar' => 'العزيزية',
                'name_en' => 'al azizyah',
                'city_id' => 2268,
                'neCoordinates' => '29.80620498,39.86949301',
                'swCoordinates' => '29.79852995,39.85024617',
            ),
            47 =>
            array (
                'id' => 3449,
                'name_ar' => 'الملك فهد الشمالي',
                'name_en' => 'king fahd al shimali',
                'city_id' => 2268,
                'neCoordinates' => '29.81528095,39.85065582',
                'swCoordinates' => '29.80695493,39.84324706',
            ),
            48 =>
            array (
                'id' => 3450,
                'name_ar' => 'الملك فهد الجنوبي',
                'name_en' => 'king fahd al janubi',
                'city_id' => 2268,
                'neCoordinates' => '29.80716285,39.85120947',
                'swCoordinates' => '29.79784893,39.84394915',
            ),
            49 =>
            array (
                'id' => 3451,
                'name_ar' => 'الربوة',
                'name_en' => 'ar rabwah',
                'city_id' => 2268,
                'neCoordinates' => '29.81516051,39.86251496',
                'swCoordinates' => '29.80708848,39.84981976',
            ),
            50 =>
            array (
                'id' => 3452,
                'name_ar' => 'الفيصلية',
                'name_en' => 'al faisaliyah',
                'city_id' => 2268,
                'neCoordinates' => '29.82218093,39.86739188',
                'swCoordinates' => '29.80914633,39.84586231',
            ),
            51 =>
            array (
                'id' => 3453,
                'name_ar' => 'الاداري',
                'name_en' => 'al edari',
                'city_id' => 2268,
                'neCoordinates' => '29.80828160,39.86249298',
                'swCoordinates' => '29.80225119,39.84975414',
            ),
            52 =>
            array (
                'id' => 3454,
                'name_ar' => 'الصناعية',
                'name_en' => 'as sinaiyah',
                'city_id' => 2268,
                'neCoordinates' => '29.80231212,39.86970382',
                'swCoordinates' => '29.79591705,39.84830215',
            ),
            53 =>
            array (
                'id' => 3455,
                'name_ar' => 'السوق القديم',
                'name_en' => 'as suq al qadim',
                'city_id' => 2268,
                'neCoordinates' => '29.81245739,39.86837037',
                'swCoordinates' => '29.80501233,39.86124926',
            ),
            54 =>
            array (
                'id' => 3456,
                'name_ar' => 'الغدير الجنوبي',
                'name_en' => 'al ghadir al janubi',
                'city_id' => 2268,
                'neCoordinates' => '29.84855181,39.85432035',
                'swCoordinates' => '29.82782327,39.81781316',
            ),
            55 =>
            array (
                'id' => 3457,
                'name_ar' => 'الخالدية',
                'name_en' => 'al khaldiyah',
                'city_id' => 2268,
                'neCoordinates' => '29.81490408,39.88849720',
                'swCoordinates' => '29.80047800,39.86699661',
            ),
            56 =>
            array (
                'id' => 3458,
                'name_ar' => 'التحكيم',
                'name_en' => 'at tahkim',
                'city_id' => 2268,
                'neCoordinates' => '29.83278823,39.86780697',
                'swCoordinates' => '29.81337982,39.84519253',
            ),
            57 =>
            array (
                'id' => 3459,
                'name_ar' => 'الفاروق',
                'name_en' => 'al faruq',
                'city_id' => 2268,
                'neCoordinates' => '29.82187903,39.88065030',
                'swCoordinates' => '29.81068103,39.86466781',
            ),
            58 =>
            array (
                'id' => 3460,
                'name_ar' => 'الوادي ',
                'name_en' => 'al wadi',
                'city_id' => 2268,
                'neCoordinates' => '29.84115855,39.89931649',
                'swCoordinates' => '29.82113863,39.87950212',
            ),
            59 =>
            array (
                'id' => 3461,
                'name_ar' => 'قراطين',
                'name_en' => 'qaratin',
                'city_id' => 2268,
                'neCoordinates' => '29.83193848,39.87948322',
                'swCoordinates' => '29.81949777,39.86035619',
            ),
            60 =>
            array (
                'id' => 3462,
                'name_ar' => 'الزراعي',
                'name_en' => 'az zirae',
                'city_id' => 2268,
                'neCoordinates' => '29.82542279,39.90348588',
                'swCoordinates' => '29.80191570,39.87644288',
            ),
            61 =>
            array (
                'id' => 3463,
                'name_ar' => 'خذماء',
                'name_en' => 'khazma',
                'city_id' => 2268,
                'neCoordinates' => '29.80391763,39.89010303',
                'swCoordinates' => '29.79308485,39.86879024',
            ),
            62 =>
            array (
                'id' => 3464,
                'name_ar' => 'الجرعاوي',
                'name_en' => 'al jaraawi',
                'city_id' => 2268,
                'neCoordinates' => '29.80465002,39.90461513',
                'swCoordinates' => '29.78872142,39.87294843',
            ),
            63 =>
            array (
                'id' => 3465,
                'name_ar' => 'الحصيباء',
                'name_en' => 'al husiba',
                'city_id' => 2268,
                'neCoordinates' => '29.79934872,39.87474214',
                'swCoordinates' => '29.78592026,39.85110351',
            ),
            64 =>
            array (
                'id' => 4609,
                'name_ar' => 'المشاعل',
                'name_en' => 'al mishal',
                'city_id' => 3,
                'neCoordinates' => '24.64706532,46.91433572',
                'swCoordinates' => '24.58581049,46.82466904',
            ),
            65 =>
            array (
                'id' => 4967,
                'name_ar' => 'الحويلات',
                'name_en' => 'al huwaylat',
                'city_id' => 113,
                'neCoordinates' => '27.10562939,49.57913433',
                'swCoordinates' => '27.08923040,49.56638627',
            ),
            66 =>
            array (
                'id' => 4968,
                'name_ar' => 'اللؤلؤ',
                'name_en' => 'al lualu',
                'city_id' => 113,
                'neCoordinates' => '27.09512966,49.58308993',
                'swCoordinates' => '27.08198644,49.57188294',
            ),
            67 =>
            array (
                'id' => 4969,
                'name_ar' => 'المنطقة الصناعية الاولى',
                'name_en' => 'first industrial area',
                'city_id' => 113,
                'neCoordinates' => '27.09234316,49.57262291',
                'swCoordinates' => '27.06400804,49.54107314',
            ),
            68 =>
            array (
                'id' => 4970,
                'name_ar' => 'مخطط عبداللطيف جميل',
                'name_en' => 'abdul latif jameel subdivision',
                'city_id' => 113,
                'neCoordinates' => '27.01995690,49.64035678',
                'swCoordinates' => '27.01271486,49.63505083',
            ),
            69 =>
            array (
                'id' => 4971,
                'name_ar' => 'مخطط غرب المزارع',
                'name_en' => 'gharb al mazari subdivision',
                'city_id' => 113,
                'neCoordinates' => '27.02889287,49.63638973',
                'swCoordinates' => '27.01265197,49.61968237',
            ),
            70 =>
            array (
                'id' => 4972,
                'name_ar' => 'الجبيل البلد',
                'name_en' => 'jubail city center',
                'city_id' => 113,
                'neCoordinates' => '27.01977759,49.66800805',
                'swCoordinates' => '26.98782834,49.64325200',
            ),
            71 =>
            array (
                'id' => 4973,
                'name_ar' => 'مخطط السروات',
                'name_en' => 'as sarawat subdivision',
                'city_id' => 113,
                'neCoordinates' => '27.02013428,49.64051317',
                'swCoordinates' => '27.01261950,49.63326942',
            ),
            72 =>
            array (
                'id' => 4975,
                'name_ar' => 'المنطقة الصناعية',
                'name_en' => 'industrial area',
                'city_id' => 113,
                'neCoordinates' => '27.07934103,49.62312295',
                'swCoordinates' => '26.99225355,49.50393139',
            ),
            73 =>
            array (
                'id' => 4976,
                'name_ar' => 'الشاطئ',
                'name_en' => 'ash shati',
                'city_id' => 113,
                'neCoordinates' => '27.08507054,49.59231718',
                'swCoordinates' => '27.07379835,49.57936314',
            ),
            74 =>
            array (
                'id' => 4977,
                'name_ar' => 'منطقة العريفي',
                'name_en' => 'al urayfi area',
                'city_id' => 113,
                'neCoordinates' => '27.01270157,49.63428024',
                'swCoordinates' => '26.99896925,49.61199494',
            ),
            75 =>
            array (
                'id' => 4978,
                'name_ar' => 'مخطط الدخل المحدود',
                'name_en' => 'ad dakhal al mahdud subdivision',
                'city_id' => 113,
                'neCoordinates' => '26.98977182,49.66620754',
                'swCoordinates' => '26.97930456,49.65373414',
            ),
            76 =>
            array (
                'id' => 4979,
                'name_ar' => 'الاحساء',
                'name_en' => 'al ahsa',
                'city_id' => 113,
                'neCoordinates' => '27.13673245,49.57499945',
                'swCoordinates' => '27.10342456,49.55013194',
            ),
            77 =>
            array (
                'id' => 4980,
                'name_ar' => 'المنطقة الصناعية الثانية',
                'name_en' => 'second industrial area',
                'city_id' => 113,
                'neCoordinates' => '27.07632569,49.55367707',
                'swCoordinates' => '27.04358800,49.51636343',
            ),
            78 =>
            array (
                'id' => 4981,
                'name_ar' => 'المنطقة الصناعية الثالثة',
                'name_en' => 'third industrial area',
                'city_id' => 113,
                'neCoordinates' => '27.05613817,49.52907322',
                'swCoordinates' => '27.02275848,49.48915755',
            ),
            79 =>
            array (
                'id' => 4982,
                'name_ar' => 'ينبع',
                'name_en' => 'yanbu',
                'city_id' => 113,
                'neCoordinates' => '27.07764346,49.59825634',
                'swCoordinates' => '27.06870964,49.58776647',
            ),
            80 =>
            array (
                'id' => 4983,
                'name_ar' => 'دارين',
                'name_en' => 'darin',
                'city_id' => 113,
                'neCoordinates' => '27.18330789,49.58628395',
                'swCoordinates' => '27.15518898,49.55615241',
            ),
            81 =>
            array (
                'id' => 4984,
                'name_ar' => 'سدير',
                'name_en' => 'sudayr',
                'city_id' => 113,
                'neCoordinates' => '27.15606999,49.57220786',
                'swCoordinates' => '27.11956945,49.55798308',
            ),
            82 =>
            array (
                'id' => 4985,
                'name_ar' => 'مكة',
                'name_en' => 'makkah',
                'city_id' => 113,
                'neCoordinates' => '27.15771138,49.56435719',
                'swCoordinates' => '27.13672422,49.54420413',
            ),
            83 =>
            array (
                'id' => 4986,
                'name_ar' => 'الحجاز',
                'name_en' => 'al hijaz',
                'city_id' => 113,
                'neCoordinates' => '27.16589183,49.57217003',
                'swCoordinates' => '27.14466329,49.55458778',
            ),
            84 =>
            array (
                'id' => 4987,
                'name_ar' => 'الفردوس',
                'name_en' => 'al firdaws',
                'city_id' => 113,
                'neCoordinates' => '27.12062081,49.54872834',
                'swCoordinates' => '27.10250344,49.53020314',
            ),
            85 =>
            array (
                'id' => 4988,
                'name_ar' => 'الفيحاء',
                'name_en' => 'al faiha',
                'city_id' => 113,
                'neCoordinates' => '27.12952336,49.55937587',
                'swCoordinates' => '27.10905498,49.53956271',
            ),
            86 =>
            array (
                'id' => 4989,
                'name_ar' => 'الخليج',
                'name_en' => 'al khalij',
                'city_id' => 113,
                'neCoordinates' => '27.11641331,49.57300451',
                'swCoordinates' => '27.11046827,49.56169831',
            ),
            87 =>
            array (
                'id' => 4990,
                'name_ar' => 'نجد',
                'name_en' => 'najd',
                'city_id' => 113,
                'neCoordinates' => '27.15188034,49.55797819',
                'swCoordinates' => '27.12952336,49.53521332',
            ),
            88 =>
            array (
                'id' => 4991,
                'name_ar' => 'الاندلس',
                'name_en' => 'al andalus',
                'city_id' => 113,
                'neCoordinates' => '27.14688654,49.54765841',
                'swCoordinates' => '27.12987896,49.52332136',
            ),
            89 =>
            array (
                'id' => 4992,
                'name_ar' => 'الفاروق',
                'name_en' => 'al faruq',
                'city_id' => 113,
                'neCoordinates' => '27.14023668,49.53956271',
                'swCoordinates' => '27.11363422,49.51023146',
            ),
            90 =>
            array (
                'id' => 4993,
                'name_ar' => 'القدس',
                'name_en' => 'al quds',
                'city_id' => 113,
                'neCoordinates' => '27.13410172,49.55013194',
                'swCoordinates' => '27.12062081,49.53120040',
            ),
            91 =>
            array (
                'id' => 4994,
                'name_ar' => 'جلمودة',
                'name_en' => 'jalmudah',
                'city_id' => 113,
                'neCoordinates' => '27.18860983,49.55840963',
                'swCoordinates' => '27.13151680,49.49542092',
            ),
        ));
    }
}
