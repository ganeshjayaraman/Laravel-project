<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacultyDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
			$table->integer('id')->unsigned()->default(0);
			$table->date('dob');
			$table->string('address');
			$table->foreign('id')->references('id')->on('user')->onDelete('cascade');
			$table->integer('age');
			$table->string('profpic');
			$table->string('state');
			$table->string('country');
			$table->string('prevclg');
			$table->text('details');
			$table->string('remember_token');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('faculty');
    }
}
