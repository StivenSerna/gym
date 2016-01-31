<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeftAnthropometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('left_anthropometrics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('left_arm');
            $table->integer('left_forearm');
            $table->integer('left_high_leg');
            $table->integer('left_lower_leg');
            $table->integer('left_calf');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

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
        Schema::drop('left_anthropometrics');
    }
}
