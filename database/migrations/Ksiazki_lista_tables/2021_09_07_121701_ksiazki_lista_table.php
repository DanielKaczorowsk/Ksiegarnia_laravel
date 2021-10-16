<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KsiazkiListaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ksiazkis', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('ksiazka');
          $table->string('img');
          $table->string('opis');
          $table->string('gatunek');
          $table->string('cena');
          $table->boolean('Top10');
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
      Schema::dropIfExists('ksiazki');
    }
}
