<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->date('dob');
			$table->string('address');
			$table->integer('age');
			$table->string('profpic');
			$table->string('email')->unique();
			$table->string('password',255);
			$table->string('state');
			$table->string('country');
			$table->string('college');
			$table->string('studentstate');
			$table->string('mobile');
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
		Schema::drop('course');
    }
}
