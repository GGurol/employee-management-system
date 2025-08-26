<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();

        DB::table('countries')->insert([
            ['country_name' => 'Turkey', 'country_code' => 'TR', 'created_at' => now(), 'updated_at' => now()],
            ['country_name' => 'Germany', 'country_code' => 'DE', 'created_at' => now(), 'updated_at' => now()],
            ['country_name' => 'United States of America', 'country_code' => 'US', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
