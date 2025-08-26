<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salaries')->delete();

        DB::table('salaries')->insert([
            ['s_amount' => 50000.00, 'created_at' => now(), 'updated_at' => now()],
            ['s_amount' => 60000.00, 'created_at' => now(), 'updated_at' => now()],
            ['s_amount' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
