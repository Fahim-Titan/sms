<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->date('dob');
			$table->string('address', 100);
			$table->string('email', 30)->unique();
			$table->string('contact_number', 17);
			$table->string('guardian_name', 50)->nullable();
			$table->string('gurdian_phone_number', 17)->nullable();
			$table->string('guardian_email', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('password', 200);
			$table->string('image', 100);
			$table->string('qualification', 100)->nullable();
			$table->string('blood_type', 10)->nullable();
			$table->string('gender', 10);
			$table->string('roles', 15);
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}