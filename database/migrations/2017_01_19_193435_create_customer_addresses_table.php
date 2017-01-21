<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {


            $table->integer('user_id')->unsigned()->references('id')->on('users');

            $table->string('address1', 128);
            $table->string('address2', 128)->nullable();
            $table->string('city', 128);
            $table->string('country_code', 3);
            $table->string('name', 128);
            $table->string('state_province', 32)->nullable();
            $table->string('zip', 16)->nullable();


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
        Schema::dropIfExists('customer_addresses');
    }
}
