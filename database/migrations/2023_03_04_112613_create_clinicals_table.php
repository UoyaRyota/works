<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('age');
            $table->string('sex');
            $table->integer('tel_num');
            $table->string('email');
            $table->integer('postal_num');
            $table->string('address');
            $table->string('parking_lot');
            $table->text('needs');
            $table->string('medical_history_f');
            $table->string('medical_history_s');
            $table->string('medical_history_t');
            $table->string('rom');
            $table->string('work');
            $table->string('adl_basic');
            $table->string('adl_eating');
            $table->string('adl_grooming');
            $table->string('adl_toilet');
            $table->string('adl_clothes');
            $table->string('adl_bathing');
            $table->text('others');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clinicals');
    }
};
