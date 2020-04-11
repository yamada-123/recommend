<?php

use Illuminate\Database\Seeder;
use App\Plan;

class PlanFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
        [
        'content' => 'ラーメン本田',
        'user_name' => '3/21',
        'user_id' => '1'
        ],
        [
        'content' => 'パスタ青山',
        'user_name' => '3/23',
        'user_id' => '1'
        ],
        [
        'content' => 'ラーメン土田',
        'user_name' => '3/23',
        'user_id' => '1'
        ],
        ]);
    }
}

