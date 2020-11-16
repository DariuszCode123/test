<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('users',function(Blueprint $table){
            $table->string('phone');
            $table->string('adress');
            $table->string('status');
            $table->string('pesel');
            $table->string('typ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('users',function(Blueprint $table){
            $table->dropColumn('phone');
            $table->dropColumn('adress');
            $table->dropColumn('status');
            $table->dropColumn('pesel');
            $table->dropColumn('typ');
        });
    }
}
