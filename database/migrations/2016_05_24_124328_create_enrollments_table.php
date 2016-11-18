<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnrollmentsTable extends Migration {

	public function up()
	{
		Schema::create('enrollments', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('id')->unsigned();

		});
	}

	public function down()
	{
		Schema::drop('enrollments');
	}
}