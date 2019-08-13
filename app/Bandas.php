<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bandas extends Model
{
    protected $table = 'bandas';

    public function usuarios(){
        return $this->hasOne('App\Users','id','usuario');
    }

    public function canciones(){
        return $this->hasMany('App\Canciones','banda','id');
    }
}
