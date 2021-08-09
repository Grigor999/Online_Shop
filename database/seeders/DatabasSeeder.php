<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabasSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductsSeeder::class,
            UsersSeeder::class,
            CartsSeeder::class,
            HistoriesSeeder::class,
            
        ]);
    }
}
