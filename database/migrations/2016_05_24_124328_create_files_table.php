<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	public function up()
	{
		Schema::create('files', function(Blueprint $table) {
			$table->timestamps();
			$table->increments('f_id');
			$table->string('file_path', 100);
			$table->date('date');
			$table->string('type', 20);
			$table->integer('id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('files');
	}
}