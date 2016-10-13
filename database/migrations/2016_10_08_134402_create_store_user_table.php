<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_user', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('user_name',20)->unique();
            $table->string('user_realname',20)->nullable();
            $table->string('user_pass',100)->nullable();
            $table->enum('user_sex',['1','0'])->default(0);
            $table->string('user_email',50)->nullable();
            $table->integer('user_integral')->unsigned()->default(0);
            $table->string('user_time',30)->nullable();
            $table->string('user_avatar',255)->default('default.jpg');
            $table->enum('user_state',['1','0'])->default(1);
            $table->enum('user_type',['2','1','0'])->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('store_user');
    }
}
