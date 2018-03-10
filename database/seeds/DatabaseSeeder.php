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
		$this->call(VoyagerSeeder::class);

        $this->call(UserAdminTableSeeder::class);
        //$this->call(VoyagerDatabaseSeeder::class);

        //$this->call(CategorySkillsSeeder::class);
        //$this->call(SkillsSeeder::class);
        //$this->call(SkillDetailsSeeder::class);
        //
        //$this->call(CategoryPortfoliosTableSeeder::class);
        //$this->call(PortfoliosTableSeeder::class);
        //$this->call(PortfolioItemsTableSeeder::class);
        //$this->call(PortfolioFilesTableSeeder::class);
        //
        //$this->call(BiographyTableSeeder::class);
    }
}
