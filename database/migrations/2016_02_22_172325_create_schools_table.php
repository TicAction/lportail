<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adress_number');
            $table->string('adress');
            $table->string('phone');
            $table->string('zipcode');
            $table->string('url');
            $table->integer('schoolboard_id')->unsigned()->index();
            $table->foreign('schoolboard_id')->references('id')->on('schoolboards');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schools');
    }
}
