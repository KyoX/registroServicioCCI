<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministerio extends Model
{

    protected $fillable = ['nombre_ministerio'];
    public function equipos(){
        return $this->hasMany(equipo::class);
    }
}
