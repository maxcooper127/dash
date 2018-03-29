<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVictimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('victims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('email');
            $table->dateTime('begin');
            $table->dateTime('end');
            $table->string('encrypt_count');
            $table->string('public_key');
            $table->boolean('encrypted');

            $table->integer('worker_id')->unsigned()->index()->nullable();
            $table->foreign('worker_id')->references('id')->on('workers');
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
        Schema::dropIfExists('victims');
    }
}
