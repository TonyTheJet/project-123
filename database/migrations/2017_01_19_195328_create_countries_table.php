<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->char('iso3166_1_alpha3', 3)->primary();
            $table->char('iso3166_1_alpha2', 2)->index();
            $table->string('name', 64);

            $table->timestamps();
        });

        Schema::table('customer_addresses', function(Blueprint $table) {
            $table->foreign('country_code')->references('iso3166_1_alpha3')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_addresses', function(Blueprint $table){
            $table->dropIndex('customer_addresses_country_code_foreign');
        });

        Schema::dropIfExists('countries');
    }
}
