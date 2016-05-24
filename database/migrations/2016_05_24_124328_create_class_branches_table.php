<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClassBranchesTable extends Migration {

	public function up()
	{
		Schema::create('class_branches', function(Blueprint $table) {
			$table->increments('cb_id');
			$table->string('name', 50);
			$table->date('year');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('class_branches');
	}
}