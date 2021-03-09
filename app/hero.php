<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hero extends Model
{
    protected $table = 'heroes';
    //relacion 1 a 1 de heroes con level
    public function level(){
        return $this->hasOne('App\level', 'id','level_id');
    }

}
