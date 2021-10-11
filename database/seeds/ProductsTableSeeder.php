<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('products')->insert([
            [
            "JAN_code" => "4521329306506",
            "product_name" => "ポケモンカードゲーム ソード＆シールド 強化拡張パック イーブイヒーローズ",
            "suggested_retail_price" =>"4950",
            "manufacturer" =>"Nintendo",
            "released_date" =>"2021050928",
            ],
            
            [ "JAN_code" => "4948872415026",
            "product_name" => "PS5 プレイステーション5",
            "suggested_retail_price" =>"49980",
            "manufacturer" =>"Sony Interactive Entertainment (SIE) ",
            "released_date" =>"20201112",
            ],
            
            [
             "JAN_code" => "4902370548495",
            "product_name" => "ニンテンドースイッチ　有機EL ホワイト",
            "suggested_retail_price" =>"37980",
            "manufacturer" =>"Nintendo",
            "released_date" =>"20211005",
            ],
            
            [
             "JAN_code" => "4902370548501",
            "product_name" => "ニンテンドースイッチ　有機EL ネオンレッド",
            "suggested_retail_price" =>"37980",
            "manufacturer" =>"Nintendo",
            "released_date" =>"20211005",
            ]
            ]);
    }
}
