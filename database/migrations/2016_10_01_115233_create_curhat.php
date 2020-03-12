<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurhat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()

    {
        Schema::create('curhat', function(Blueprint $table) {

            $table->increments('id_curhat');
            $table->string('user_kirim');
            $table->string('user_terima');
            $table->longText('isi');
            $table->string('status');
            $table->foreign('user_kirim')->references('username')->on('user');
            $table->foreign('user_terima')->references('username')->on('user');
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
        Schema::drop('curhat');
    }
}
