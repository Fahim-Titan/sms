<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{


		Schema::table('teacher_assigns', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

		Schema::table('teacher_assigns', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});

		Schema::table('attendences', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('files', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('sub_id')->references('sub_id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('e_id')->references('e_id')->on('exam_infos')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{

		Schema::table('teacher_assigns', function(Blueprint $table) {
			$table->dropForeign('teacher_assigns_sub_id_foreign');
		});

		Schema::table('teacher_assigns', function(Blueprint $table) {
			$table->dropForeign('teacher_assigns_id_foreign');
		});
		Schema::table('enrollments', function(Blueprint $table) {
			$table->dropForeign('enrollments_id_foreign');
		});

		Schema::table('attendences', function(Blueprint $table) {
			$table->dropForeign('attendences_id_foreign');
		});
		Schema::table('files', function(Blueprint $table) {
			$table->dropForeign('files_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_sub_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_e_id_foreign');
		});
	}
}