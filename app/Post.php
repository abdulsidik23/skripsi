<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $primaryKey = 'id_post';

public function kategori (){return $this->belongsTo('App\Kategori','id_kategori');}
}

