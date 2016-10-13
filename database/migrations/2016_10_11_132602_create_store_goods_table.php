<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_goods', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('pid')->unsigned();
            $table->string('goods_name',100);
            $table->integer('goods_price')->unsigned()->nullable();
            $table->string('goods_img')->nullable();
            $table->integer('goods_stock')->unsigned()->nullable();
            $table->enum('is_onsale',['1','0'])->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_goods');
    }
}
