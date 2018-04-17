<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		/*
			Voyager tables - seed first, because of user roles
		*/
		$this->call(VoyagerDatabaseSeeder::class);
		
		/*
			TableSeeders
		*/
		$this->call(UserAdminTableSeeder::class);
		$this->call(CompanyTableSeeder::class);
		
		/*
			DatabaseSeeders
		*/
		$this->call(BiographyDatabaseSeeder::class);
		$this->call(PortfolioDatabaseSeeder::class);
		$this->call(SkillsDatabaseSeeder::class);
		
		/*
			VoyagerSeeder - seed coyager tables for new models
		*/
		$this->call(VoyagerSeeder::class);
    }
}
