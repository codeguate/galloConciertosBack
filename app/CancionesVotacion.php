<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancionesVotacion extends Model
{
    protected $table = 'canciones_votacion';

    public function bandas(){
        return $this->hasOne('App\Bandas','id','banda');
    }

    public function canciones(){
        return $this->hasOne('App\Canciones','id','cancion');
    }
}
