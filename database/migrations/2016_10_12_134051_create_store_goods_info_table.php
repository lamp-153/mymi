<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreGoodsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_goods_info', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('goods_id')->unsigned();
            $table->string('goods_info_type',255)->nullable();
            $table->string('goods_info_message',255)->nullable();
            $table->string('goods_info_colore',255)->nullable();
            $table->string('goods_info_img',255)->nullable();
            $table->integer('goods_info_price')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_goods_info');
    }
}
