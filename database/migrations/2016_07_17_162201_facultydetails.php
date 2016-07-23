<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facultydetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_details', function (Blueprint $table) {
			$table->integer('id')->unsigned()->default(0);
			$table->integer('courseid');
			$table->foreign('id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('facultyid')->length(3);
			$table->string('coursename');
            $table->timestamps();
        });
			DB::statement('ALTER TABLE faculty_details CHANGE facultyid facultyid INT(3) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faculty_details');        
    }
}
