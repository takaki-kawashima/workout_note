<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('record_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('weight');
            $table->integer('rep');
            $table->integer('set');
            $table->string('menu_id', '255');
            $table->unsignedBigInteger('record_id');
            $table->timestamps();

            $table->foreign('record_id') //外部キーの宣言
            ->references('id') //参照先
            ->on('records') //参照テーブル
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
        Schema::dropIfExists('data_menu');
    }
}
