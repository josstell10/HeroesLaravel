<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table = 'levels';

    //relacion de 1 a muchos entre level y heroes
    public function heroes(){
        return $this->hasMany('App\hero');
    }
}
