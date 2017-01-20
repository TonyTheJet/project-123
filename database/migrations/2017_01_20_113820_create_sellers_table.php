<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->string('business_name', 128)->index();
            $table->decimal('commission_rate', 8, 2)->default(.50);
            $table->boolean('active')->default(false);
            $table->string('thumbnail', 128)->nullable();
            $table->string('about', 512)->nullable();
            $table->string('url', 512)->nullable();

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
        Schema::dropIfExists('sellers');
    }
}
