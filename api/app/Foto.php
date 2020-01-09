<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }
}
