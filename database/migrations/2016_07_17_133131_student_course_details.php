<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentCourseDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentcoursedetails', function (Blueprint $table) {
			$table->integer('id')->unsigned()->default(0);
			$table->integer('courseid');
			$table->foreign('id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('userid')->length(3);
			$table->integer('fees');
			$table->string('coursename');
			$table->date('dateofjoin');
            $table->timestamps();
        });
			DB::statement('ALTER TABLE studentcoursedetails CHANGE userid userid INT(3) UNSIGNED ZEROFILL NOT NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coursedetails');
    }
}
