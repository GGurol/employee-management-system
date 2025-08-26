<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Bu satırı eklemeyi unutmayın

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->delete();

        DB::table('cities')->insert([
            ['city_name' => 'Uşak', 'zip_code' => 64000, 'created_at' => now(), 'updated_at' => now()],
            ['city_name' => 'Ankara', 'zip_code' => 06000, 'created_at' => now(), 'updated_at' => now()],
            ['city_name' => 'İstanbul', 'zip_code' => 34000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
