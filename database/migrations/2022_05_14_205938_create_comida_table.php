<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comida', function (Blueprint $table) {
            $table->id();
            $table->string('peruanas');
            $table->string('mexicanas');
            $table->string('italianas');
            $table->string('japonesas');
            $table->string('argentinas');
            $table->string('hindues');
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
        Schema::dropIfExists('comida');
    }
}
