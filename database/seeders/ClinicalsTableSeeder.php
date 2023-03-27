<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\Clinical;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $testData1 = [
            'name' => 'テスト01',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData1);

        $testData2 = [
            'name' => 'テスト02',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> '7370915',
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,
        ];
        DB::table('clinicals')->insert($testData2);

        $testData3 = [
            'name' => 'テスト03',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData3);

        $testData4 = [
            'name' => 'テスト04',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData4);

        $testData5 = [
            'name' => 'テスト05',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData5);

        $testData6 = [
            'name' => 'テスト06',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData6);

        $testData7 = [
            'name' => 'テスト07',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData7);

        $testData8 = [
            'name' => 'テスト08',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData8);

        $testData9 = [
            'name' => 'テスト09',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData9);

        $testData10 = [
            'name' => 'テスト10',
            'age'=> 29,
            'sex'=> '男',
            'tel_num'=> '09011112222',
            'email'=> 'test@gmail.com',
            'postal_num'=> 7370915,
            'address'=> '広島県呉市押込',
            'parking_lot'=> '有',
            'needs'=> 'テストデータです。ここにはニーズが入ります。ご確認をお願いします。',
            'medical_history_f'=> 'CVA',
            'medical_history_s'=> 'MSA',
            'medical_history_t'=> 'その他',
            'rom'=> '肩外転制限',
            'work'=> 'プログラマー',
            'adl_basic'=> '有',
            'adl_eating'=>'有',
            'adl_grooming'=>'有',
            'adl_toilet'=>'有',
            'adl_clothes'=>'有',
            'adl_bathing'=>'有',
            'others'=>'テストデータです。ここにはその他が入ります。ご確認をお願いします。',
            'user_id'=> 1,

        ];
        DB::table('clinicals')->insert($testData10);

    }
}
