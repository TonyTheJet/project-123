<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumFilesColumnToDigitalProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('digital_products', function(Blueprint $table){
            $table->mediumInteger('num_files')->unsigned()->default(1)->after('thumbnail_data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('digital_products', function(Blueprint $table){
            $table->dropColumn('num_files');
        });
    }
}
