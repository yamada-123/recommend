<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ShopFormSeeder::class);
        $this->call(CategoryFormSeeder::class);
        $this->call(PlanFormSeeder::class);
    }
}
