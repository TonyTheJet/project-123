<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTokenToCreditCards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Add the column
        Schema::table('credit_cards', function(Blueprint $table){
            $table->string('token', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop token column
        Schema::table('credit_cards', function(Blueprint $table){
            $table->dropColumn('token');
        });
    }
}
