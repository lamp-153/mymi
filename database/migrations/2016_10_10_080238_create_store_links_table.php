<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_links', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('links_name',50)->unique();
            $table->string('links_url',200);
            $table->string('links_logo',255)->default('default.jpg');
            $table->enum('links_state',['1','0'])->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_links');
    }
}
