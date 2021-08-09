<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'user_id' => 1,
            'name' => Str::random(10),
            'count' => mt_rand(10, 30),
            'price' => mt_rand(20000, 300000),
        ]);

        DB::table('products')->insert([
            'user_id' => 2,
            'name' => Str::random(10),
            'count' => mt_rand(10, 30),
            'price' => mt_rand(20000, 300000),
        ]);

        DB::table('products')->insert([
            'user_id' => 3,
            'name' => Str::random(10),
            'count' => mt_rand(10, 30),
            'price' => mt_rand(20000, 300000),
        ]);
    }
}
