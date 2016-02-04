<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRightAnthropometricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('right_anthropometrics', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('right_arm');
           $table->integer('right_forearm');
           $table->integer('right_high_leg');
           $table->integer('right_lower_leg');
           $table->integer('right_calf');
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
        Schema::drop('right_anthropometrics');
    }
}
