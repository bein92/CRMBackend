<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->enum('color',['white','blue','green','yellow','red'])->default('white');
			$table->text('addres');
			$table->text('description');
			$table->integer('district_id')->unsigned();
			$table->foreign('district_id')->references('id')->on('districts');
			$table->integer('holding_id')->unsigned();
			$table->foreign('holding_id')->references('id')->on('holdings');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
