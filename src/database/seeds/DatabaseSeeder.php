<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
	public function run()
	{
    	$this->call(AdminTableSeeder::class);
    	$this->call(GendersTableSeeder::class);
    	$this->call(SettingsTableSeeder::class);
    	$this->call(DepartmentTableSeeder::class);
    	$this->call(SalariesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
    	$this->call(StatesTableSeeder::class);
        $this->call(DivisionsTableSeeder::class);
    	$this->call(CitiesTableSeeder::class);
    	$this->call(employesTableSeeder::class);
	}

}

