<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            'name' => Str::random(10),
            'damage' => rand(1000, 2000),
            'is_range' => 0,
            'hero_id' => rand(1, 5),
        ]);
    }
}
