<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('record_id');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('user_id') //外部キーの宣言
                    ->references('id') //参照先
                    ->on('users') //参照テーブル
                    ->onDelete('cascade'); //参照テーブルカラムが消えたら同時に消す
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
        Schema::dropIfExists('comment');
    }
}
