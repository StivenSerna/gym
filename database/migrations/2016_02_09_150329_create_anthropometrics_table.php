<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnthropometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anthropometrics', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->integer('anthropometric_measurement_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->integer('right_anthropometric_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->integer('left_anthropometric_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('anthropometrics');
    }
}
