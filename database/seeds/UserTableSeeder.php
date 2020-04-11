<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
        'name' => '村人100',
        'email' => 'murabito100@example.com',
        'password' => Hash::make('foober12'),
        ],
        [
        'name' => '村人101',
        'email' => 'murabito101@example.com',
        'password' => Hash::make('foober12'),
        ]
        ]);
    }
}
