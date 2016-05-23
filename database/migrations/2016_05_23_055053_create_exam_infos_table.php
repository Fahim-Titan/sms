<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamInfosTable extends Migration {

	public function up()
	{
		Schema::create('exam_infos', function(Blueprint $table) {
			$table->timestamps();
			$table->increments('e_id');
			$table->string('type', 50);
		});
	}

	public function down()
	{
		Schema::drop('exam_infos');
	}
}