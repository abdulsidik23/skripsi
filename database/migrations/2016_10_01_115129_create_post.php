<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()

    {
        Schema::create('post', function(Blueprint $table) {

            $table->increments('id_post');
            $table->string('judul');
            $table->longText('isi');
            $table->string('gambar')->nullable();
            $table->string('dokumen')->nullable();
            $table->integer('id_kategori')->unsigned();
            $table->string('username');
            $table->foreign('username')->references('username')->on('user');
            $table->foreign('id_kategori')->references('id_kategori')->on('kategori');
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
        Schema::drop('post');
    }
}
