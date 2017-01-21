<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits_orders', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned()->references('id')->on('users');
            $table->integer('subscription_id')->unsigned()->nullable();
            $table->decimal('credits', 8, 2)->default(0.00);
            $table->decimal('amt_paid', 8, 2)->default(0.00);
            $table->char('currency_code', 3)->defaut('USD');
            $table->datetime('bill_on_date')->index();
            $table->datetime('billed_date')->index();


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
        Schema::dropIfExists('credits_orders');
    }
}
