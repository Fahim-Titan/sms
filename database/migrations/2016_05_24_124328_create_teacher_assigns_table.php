<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeacherAssignsTable extends Migration {

	public function up()
	{
		Schema::create('teacher_assigns', function(Blueprint $table) {
			$table->integer('sub_id')->unsigned();

			$table->integer('id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('teacher_assigns');
	}
}