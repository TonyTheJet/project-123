<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_products', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('seller_user_id')->nullable();
            $table->string('name');
            $table->char('status', 1);
            $table->decimal('price_credits', 8, 2)->default(0.00);
            $table->decimal('current_price_credits', 8, 2)->default(0.00);
            $table->dateTime('release_date')->index();
            $table->text('description')->nullable();
            $table->string('file_name', 64);
            $table->string('file_hash', 64);
            $table->binary('thumbnail_data')->nullable();

            $table->timestamps();

            //FK constraints
            $table->foreign('seller_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital_products');
    }
}
