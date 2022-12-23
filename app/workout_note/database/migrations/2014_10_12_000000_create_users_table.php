<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', '255');
            $table->string('rubi', '255');
            $table->string('email', '100');
            $table->timestamp('email_verified_at');
            $table->string('password', '255');
            $table->tinyInteger('user_flg')->default(0);
            $table->rememberToken();
            $table->string('purpose','100');
            $table->timestamps();
            $table->string('path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
