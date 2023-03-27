<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testData1 = [
            'reservation_date' => '	2023-03-01',
            'reservation_time'=> '16:31',
            'user_name'=> 'テスト01',
        ];
        DB::table('reservations')->insert($testData1);

        $testData2 = [
            'reservation_date' => '	2023-03-02',
            'reservation_time'=> '16:32',
            'user_name'=> 'テスト02',
        ];
        DB::table('reservations')->insert($testData2);

        $testData3 = [
            'reservation_date' => '	2023-03-03',
            'reservation_time'=> '16:33',
            'user_name'=> 'テスト03',
        ];
        DB::table('reservations')->insert($testData3);

        $testData4 = [
            'reservation_date' => '	2023-03-04',
            'reservation_time'=> '16:34',
            'user_name'=> 'テスト04',
        ];
        DB::table('reservations')->insert($testData4);

        $testData5 = [
            'reservation_date' => '	2023-03-05',
            'reservation_time'=> '16:35',
            'user_name'=> 'テスト05',
        ];
        DB::table('reservations')->insert($testData5);

        $testData6 = [
            'reservation_date' => '	2023-03-06',
            'reservation_time'=> '16:36',
            'user_name'=> 'テスト06',
        ];
        DB::table('reservations')->insert($testData6);

        $testData7 = [
            'reservation_date' => '	2023-03-07',
            'reservation_time'=> '16:37',
            'user_name'=> 'テスト07',
        ];
        DB::table('reservations')->insert($testData7);

        $testData8 = [
            'reservation_date' => '	2023-03-08',
            'reservation_time'=> '16:38',
            'user_name'=> 'テスト08',
        ];
        DB::table('reservations')->insert($testData8);

        $testData9 = [
            'reservation_date' => '	2023-03-09',
            'reservation_time'=> '16:39',
            'user_name'=> 'テスト09',
        ];
        DB::table('reservations')->insert($testData9);

        $testData10 = [
            'reservation_date' => '	2023-03-10',
            'reservation_time'=> '16:40',
            'user_name'=> 'テスト10',
        ];
        DB::table('reservations')->insert($testData10);
    }
}
