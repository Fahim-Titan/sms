<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubjectsTable extends Migration {

	public function up()
	{
		Schema::create('subjects', function(Blueprint $table) {
			$table->increments('sub_id');

			$table->string('sub_name', 100);
			$table->string('textbook_name', 100)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('subjects');
	}
}