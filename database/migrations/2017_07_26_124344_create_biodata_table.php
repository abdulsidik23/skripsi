<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('biodata', function(Blueprint $table) {

            $table->increments('id_biodata');
            $table->string('nim');
            $table->string('nama');
            $table->string('prodi_angkatan');
            $table->string('jenis_kelamin');
            $table->integer('tahun_masuk');
            $table->longText('alamat');
            $table->string('hobi');
            $table->string('jabatan');
            $table->string('prestasi_cysi');
            $table->string('motto');
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
        Schema::drop('biodata');
    }
}
