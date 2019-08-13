<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canciones extends Model
{
    protected $table = 'canciones';

    public function usuarios(){
        return $this->hasOne('App\Users','id','usuario');
    }

    public function bandas(){
        return $this->hasOne('App\Bandas','id','banda');
    }
}
