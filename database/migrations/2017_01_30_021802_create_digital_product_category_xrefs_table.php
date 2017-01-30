<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalProductCategoryXrefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_product_category_xrefs', function (Blueprint $table) {

            $table->integer('product_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->primary(['product_id', 'category_id']);
            $table->foreign('product_id')->references('id')->on('digital_products');
            $table->foreign('category_id')->references('id')->on('digital_product_categories');


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
        Schema::dropIfExists('digital_product_category_xrefs');
    }
}
