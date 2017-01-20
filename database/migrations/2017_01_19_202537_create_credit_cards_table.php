<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('billing_address_id')->unsigned()->references('id')->on('customer_addresses');

            $table->char('exp_month', 2);
            $table->char('exp_year', 4);
            $table->char('last_four', 4);
            $table->string('name_on_card', 64);
            $table->string('type', 16);

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
        Schema::dropIfExists('credit_cards');
    }
}
