<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Bu satırı eklemeyi unutmayın

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        DB::table('states')->insert([
            ['state_name' => 'Ankara', 'created_at' => now(), 'updated_at' => now()],
            ['state_name' => 'İstanbul', 'created_at' => now(), 'updated_at' => now()],
            ['state_name' => 'İzmir', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
