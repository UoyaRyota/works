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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('age');
            $table->string('sex',10);
            $table->string('tel_num',13);
            $table->string('email',30);
            $table->integer('postal_num');
            $table->string('address',100);
            $table->string('parking_lot',10);
            $table->mediumText('needs');
            $table->string('medical_history_f',50);
            $table->string('medical_history_s',50);
            $table->string('medical_history_t',50);
            $table->mediumText('rom');
            $table->string('work',100);
            $table->string('adl_basic',10);
            $table->string('adl_eating',10);
            $table->string('adl_grooming',10);
            $table->string('adl_toilet',10);
            $table->string('adl_clothes',10);
            $table->string('adl_bathing',10);
            $table->mediumText('others');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
