<?php

use Illuminate\Database\Seeder;

class BuyersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('buyers')->insert([
            [
            'name' => 'テスト バイヤー1',
            'birth' => '19900707',
            'adress' =>'大阪府大阪市天王寺区逢阪2-826-11',
            'phone_number' =>'09011111111',
            'email_adress' =>'test1@buyer.com',
            ],
            ['name' => 'テスト バイヤー2',
            'birth' => '19908080',
            'adress' =>'石川県金沢市花里町193-12',
            'phone_number' =>'09022222222',
            'email_adress' =>'test2@buyer.com',
            ],
            [
            'name' => 'テスト バイヤー3',
            'birth' => '19909090',
            'adress' =>'埼玉県本庄市東台3-467-1',
            'phone_number' =>'09033333333',
            'email_adress' =>'test3@buyer.com',
            ],
            [
            'name' => 'テスト バイヤー4',
            'birth' => '19990606',
            'adress' =>'茨城県古河市原町110-16',
            'phone_number' =>'09044444444',
            'email_adress' =>'test4@buyer.com',
            ]
           ]);
      
        
    }
}


