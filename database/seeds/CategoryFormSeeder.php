<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'name' => '和食',
            ],
            [
            'name' => 'イタリアン',
            ],
            [
            'name' => 'フレンチ',
            ],
            [
            'name' => 'その他'
            ],
        ]);
    }
}
