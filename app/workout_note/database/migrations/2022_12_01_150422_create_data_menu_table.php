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
        Schema::create('data_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('weight');
            $table->integer('rep');
            $table->integer('set');
            $table->integer('menu_id');
            $table->integer('date_id');
            $table->timestamps();
            
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
