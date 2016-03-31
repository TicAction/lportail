<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBehaviorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('behaviors', function (Blueprint $table) {
            $table->increments('id');
            $table->date('behave_date');
            $table->string('content');
            $table->boolean('publish');
            $table->integer('kid_id')->unsigned()->index();
            $table->foreign('kid_id')->references('id')->on('kids');
            $table->softDeletes();
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
        Schema::drop('behaviors');
    }
}
