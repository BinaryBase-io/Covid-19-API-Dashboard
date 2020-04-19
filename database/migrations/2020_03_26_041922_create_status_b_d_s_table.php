<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusBDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_b_d_s', function (Blueprint $table) {
            $table->id();
            $table->integer('total_test')->unsigned()->nullable()->default(0);
            $table->integer('last_24_hour_test')->unsigned()->nullable()->default(0);
            $table->integer('total_infected')->unsigned()->nullable()->default(0);
            $table->integer('last_24_hour_infected')->unsigned()->nullable()->default(0);
            $table->integer('total_recover')->unsigned()->nullable()->default(0);
            $table->integer('total_death')->unsigned()->nullable()->default(0);
            $table->integer('world_total_infected')->unsigned()->nullable()->default(0);
            $table->integer('world_total_recover')->unsigned()->nullable()->default(0);
            $table->integer('world_total_death')->unsigned()->nullable()->default(0);
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
        Schema::dropIfExists('status_b_d_s');
    }
}
