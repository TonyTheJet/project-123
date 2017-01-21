<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFKToCreditsOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('credits_orders', function(Blueprint $table){
            $table->foreign('subscription_id')->references('id')->on('credits_order_subscriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('credits_orders', function(Blueprint $table){
            $table->dropIndex('credits_orders_subscription_id_foreign');
        });
    }
}
