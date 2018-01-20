<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function servidores(){
        return $this->belongsTo(servidor::class);
    }

    public function ministerios(){
        return $this->belongsTo(ministerio::class);
    }
}
