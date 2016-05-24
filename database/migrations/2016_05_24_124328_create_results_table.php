<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	public function up()
	{
		Schema::create('results', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('id')->unsigned();
			$table->integer('sub_id')->unsigned();
			$table->integer('e_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('results');
	}
}