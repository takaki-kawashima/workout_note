<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu', '255');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('user_id') //外部キーの宣言
            ->references('id') //参照先
            ->on('users') //参照テーブル
            ->onDelete('cascade'); //参照テーブルカラムが消えたら同時に消す
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
