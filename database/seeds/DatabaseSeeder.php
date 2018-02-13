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
        $this->call(UserAdminTableSeeder::class);
        $this->call(VoyagerDatabaseSeeder::class);

		$this->call(VoyagerSeeder::class);
    }
}
