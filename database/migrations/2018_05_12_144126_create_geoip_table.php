<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeoipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geoip', function (Blueprint $table) {

            $table->string('ip', 255)->primary();
            $table->string('latitude', 255);
            $table->string('longitude', 255);
            $table->string('city', 255);
            $table->string('country', 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geoip');
    }
}
