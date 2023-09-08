<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createuts2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uts2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uts2_f1', 45);
            $table->string('uts3_f2', 45);
            $table->string('uts4_f3', 45);
            $table->foreign('id_uts1')->references('id')->on('uts1');
            $table->foreign('id_uts3')->references('id')->on('uts3');
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
        Schema::dropIfExists('uts2');
    }
}
