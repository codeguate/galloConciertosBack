<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BandasEventos extends Model
{
    protected $table = 'bandas_eventos';

    public function bandas(){
        return $this->hasOne('App\Bandas','id','banda')->with('canciones');
    }

    public function eventos(){
        return $this->hasOne('App\Eventos','id','evento');
    }

    public function votaciones(){
        return $this->hasMany('App\CancionesVotacion','banda','id');
    }
}
