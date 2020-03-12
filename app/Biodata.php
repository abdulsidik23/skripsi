<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'tb_biodata';
    protected $fillable = ['nik', 'nama', 'ttl', 'jenis_kelamin', 'tahun_masuk', 'alamat', 'hobi', 'jabatan', 'prestasi_motor', 'motto'];

    protected $primaryKey = 'id_biodata';

}

