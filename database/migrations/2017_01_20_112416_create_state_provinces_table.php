<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 16)->index();
            $table->string('name', 64);
            $table->char('country_code', 3)->references('iso3166_1_alpha3')->on('countries');

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
        Schema::dropIfExists('state_provinces');
    }
}
