<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covids', function (Blueprint $table) {
            $table->id();
            $table->string("p_name", 155);
            $table->integer("p_age");
            $table->integer("p_sex");
            $table->string("p_mobile", 15);
            $table->string("s_mobile", 15)->nullable()->default("confidential");
            $table->string("p_address", 255);
            $table->double('lat', 15, 6)->nullable()->default(00.000);
            $table->double('lan', 15, 6)->nullable()->default(00.000);
            $table->string('gps_address', 255)->nullable()->default('null');
            $table->string('gps_admin_area', 100)->nullable()->default('null');
            $table->string('gps_admin_sub_area', 100)->nullable()->default('null');
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
        Schema::dropIfExists('covids');
    }
}
