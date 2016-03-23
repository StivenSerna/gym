<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affiliations', function (Blueprint $table) {
            $table->increments('id');

            $table->date('initiation');
            $table->date('finalization');
            $table->integer('price');
            $table->enum('type', ['payment', 'credit']);
            $table->boolean('active');

            $table->integer('member_id')->unsigned();
            $table->integer('membership_id')->unsigned();

            $table->foreign('member_id')->references('id')->on('members');
            $table->foreign('membership_id')->references('id')->on('memberships');

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
        Schema::drop('affiliations');
    }
}
