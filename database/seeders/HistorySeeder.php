<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->insert([
            'user_id' => mt_rand(0, 10),
            'product_id' => mt_rand(0, 10),
            'count' => mt_rand(0,30),
            'price' => mt_rand(100,1000),
        ]);
    }
}
