<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';

    public function usuarios(){
        return $this->hasOne('App\Users','id','usuario');
    }

    public function tipos(){
        return $this->hasOne('App\TipoEventos','id','tipo');
    }

    public function imagenes(){
        return $this->hasMany('App\EventosImgs','evento','id');
    }

    public function bandas(){
        return $this->hasMany('App\BandasEventos','evento','id')->with('canciones');
    }
}
