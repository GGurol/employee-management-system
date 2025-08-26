<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->delete();

        DB::table('divisions')->insert([
            ['division_name' => 'Human Resources', 'created_at' => now(), 'updated_at' => now()],
            ['division_name' => 'I.T.', 'created_at' => now(), 'updated_at' => now()],
            ['division_name' => 'Marketing', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
