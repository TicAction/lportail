<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pis', function (Blueprint $table) {
            $table->increments('id');
            $table->date('pi_date');
            $table->string('force');
            $table->string('difficulty');
            $table->string('intervention');
            $table->string('todo');
            $table->string('email');
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
        Schema::drop('pis');
    }
}
