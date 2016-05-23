<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttendencesTable extends Migration {

	public function up()
	{
		Schema::create('attendences', function(Blueprint $table) {
			$table->timestamps();
			$table->integer('id')->unsigned();
			$table->date('date');
			$table->boolean('attend');
		});
	}

	public function down()
	{
		Schema::drop('attendences');
	}
}