<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UserAdminTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {

			if(Schema::hasTable('roles')){
				$role = Role::where('name', 'admin')->firstOrFail();

				User::create([
					'name'           => 'vilbur',
					'email'          => 'cerny.vil@gmail.com',
					'password'       => '$2y$10$IIsqO8nHHw3KG0lBK.Fj5.roC4uVxH4ShJGJluJ0nggw2hSnD896.',
					'remember_token' => str_random(60),
					'role_id'        => $role->id,
				]);

			} else {
				User::create([
					'name'           => 'vilbur',
					'email'          => 'cerny.vil@gmail.com',
					'password'       => '$2y$10$IIsqO8nHHw3KG0lBK.Fj5.roC4uVxH4ShJGJluJ0nggw2hSnD896.',
					'remember_token' => str_random(60),
				]);	
			}

        }
    }
}
