<?php

use Illuminate\Database\Seeder;

class MannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('manners')->insert([
            'title' => 'チップを出すときは声に出して！',
            'body' => 'ライブポーカー(対面で行われるポーカー)においては、行為より発声(発言)したことが優先されます。
            慣れるまでは、自分のアクションやベット金額を声に出してから行動するのがおすすめ！',
            
        ]);
        
        DB::table('manners')->insert([
            'title' => '店舗に行く前に「初心者講座」を申し込もう！',
            'body' => '店舗によって異なりますが、「初心者講座」といったライブポーカーを初めてプレイする人のためのマナー講座があります。
            事前に申し込まないといけないパターンが多いので、来店前に確認しましょう！'
        ]);
    }
}
