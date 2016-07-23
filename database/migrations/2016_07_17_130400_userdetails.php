<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
			$table->integer('id')->unsigned()->default(0);
			$table->date('dob');
			$table->string('address');
			$table->integer('age');
			$table->string('profpic');
			$table->foreign('id')->references('id')->on('user')->onDelete('cascade');
			$table->string('state');
			$table->string('country');
			$table->string('college');
			$table->string('studentstate');
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
		Schema::drop('userdetails');       
    }
}
