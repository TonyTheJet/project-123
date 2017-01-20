<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTypeToDigitalProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adds the type and FKs the shit out of it
        Schema::table('digital_products', function(Blueprint $table){
            $table->integer('type_id')->unsigned()->references('id')->on('digital_product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop the column
        Schema::table('digital_products', function(Blueprint $table){
            $table->dropColumn('type_id');
        });
    }
}
