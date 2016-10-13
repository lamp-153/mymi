<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('store_category', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('pid')->unsigned()->default(0);
            $table->string('path',20)->default(0);
            $table->string('category_name',50);
            $table->enum('category_order',['1','0'])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_category');
    }
}
