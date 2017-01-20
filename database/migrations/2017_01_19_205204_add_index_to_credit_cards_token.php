<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexToCreditCardsToken extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add index
        Schema::table('credit_cards', function(Blueprint $table){
            $table->index('token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remove the index
        Schema::table('credit_cards', function(Blueprint $table){
            $table->dropIndex('credit_cards_token_index');
        });
    }
}
