<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('company', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name',32)->nullable();
			$table->string('claim',  255)->nullable();
			$table->string('about',  255)->nullable();
			$table->string('logo',   255)->nullable();
			$table->string('street', 255)->nullable();
			$table->string('house_number',255)->nullable();
			$table->string('city',   255)->nullable();
			$table->integer('zip'  )->length(16)->unsigned()->index()->nullable();

			$table->string('email_1',255)->nullable();
			//$table->string('email_2',255)->nullable();

			$table->integer('tel_1')->length(16)->unsigned()->index()->nullable();
			//$table->integer('tel_2')->length(16)->unsigned()->index()->nullable();
			//$table->integer('fax');
			$table->timestamps();
		});

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company');
    }
}
