<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FileHeadindgDetailsColumnAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('files',function($table){
           $table->string('file_heading',200)->nullable();
            $table->string('file_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('files', function ($table) {
            $table->dropColumn('file_heading');
            $table->dropColumn('file_description');
        });
    }
}
