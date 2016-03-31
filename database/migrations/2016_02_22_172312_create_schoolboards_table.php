<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolboardsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('region');
            $table->string('adress');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->string('url');
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schoolboards');
    }
}
