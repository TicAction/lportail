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
            $table->string('adress_number');
            $table->string('adress');
            $table->string('phone');
            $table->string('zipcode');
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
