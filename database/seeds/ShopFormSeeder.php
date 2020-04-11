<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
            'name' => 'ラーメン本田',
            'address' => '北海道帯広市',
            'category_id' => '1',
            'user_id' => '1',
            ],
            [
                'name' => 'パスタ本田',
                'address' => '青森県青森市',
                'category_id' => '2',
                'user_id' => '1',
            ],
            [
                'name' => 'ラーメン土田',
                'address' => '秋田県秋田市',
                'category_id' => '1',
                'user_id' => '1',
            ],
            [
                'name' => 'パスタ青山',
                'address' => '新潟県新潟市',
                'category_id' => '2',
                'user_id' => '1',
            ]
            ]);
    }
}
