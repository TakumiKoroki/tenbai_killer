<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
     public function run()
    {
        DB::table('sellers')->insert([
            [
            "seller_name" => "テスト１　太郎",
            "seller_birth" => "19900909",
            "seller_adress" => "熊本県熊本市北区清水町打越64-20",
            "seller_email_adress"=> "test1yamada@test.com",
            "seller_phone_number" =>"11111111111",
            "store_name" => "ヤマダ電機池袋総本店",
            "store_adress" =>"東京都豊島区東池袋1-5-7",
            "store_phone_number" =>"0359587770",
            ],
            
            [
            "seller_name" => "テスト　次郎",
            "seller_birth" => "19800808",
            "seller_adress" => "高知県四万十市平野330-14",
            "seller_email_adress"=> "test2yodobashi@test.com",
            "seller_phone_number" =>"22222222222",
            "store_name" => "ヨドバシAkiba",
            "store_adress" =>"東京都千代田区神田花岡町1-1",
            "store_phone_number" =>"0352091010",
            ],
            
            [
            "seller_name" => "テスト　三郎",
            "seller_birth" => "19700707",
            "seller_adress" => "宮崎県宮崎市大淀1-442-2",
            "seller_email_adress"=> "test3bigcamera@test.com",
            "seller_phone_number" =>"33333333333",
            "store_name" => "ビックカメラ池袋本店",
            "store_adress" =>"東京都豊島区東池袋1-41-5",
            "store_phone_number" =>"0353961111",
            ],
            
            [
            "seller_name" => "テスト　四郎",
            "seller_birth" => "19600606",
            "seller_adress" => "大分県大分市乙津港町1-140-18",
            "seller_email_adress"=> "test4nojima@test.com",
            "seller_phone_number" =>"44444444444",
            "store_name" => "ノジマ相模原本店",
            "store_adress" =>"神奈川県相模原市中央区横山1-1-1",
            "store_phone_number" =>"0427531516",
            ]
            ]);
    }
}