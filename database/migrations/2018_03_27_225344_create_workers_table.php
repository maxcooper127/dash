<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip');
            $table->string('email');
            $table->string('encrypt_today');
            $table->string('encrypt_week');
            $table->string('encrypt_mouth');
            $table->string('encrypt_all_time');
            $table->string('decrypt_today');
            $table->string('decrypt_week');
            $table->string('decrypt_mouth');
            $table->string('decrypt_all_time');
            $table->boolean('block');
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
        Schema::dropIfExists('workers');
    }
}
