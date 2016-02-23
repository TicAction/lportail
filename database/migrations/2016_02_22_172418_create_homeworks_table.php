<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeworks', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('lecture');
            $table->string('grammaire');
            $table->string('conjugaison');
            $table->string('mathematique');
            $table->string('anglais');
            $table->string('homeworks');
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
        Schema::drop('homeworks');
    }
}
