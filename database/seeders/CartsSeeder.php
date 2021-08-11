<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     DB::table('carts')->insert([
    //         'products_id' => mt_rand(1, 3),
    //         'user_id' => 0,
    //         'count' => mt_rand(10, 30),
    //     ]);
    // }


    DB::table('carts')->insert([
        'product_id' => 1,
        'user_id' => 1,
        'count' => mt_rand(10,30),
    ]);
}
}
