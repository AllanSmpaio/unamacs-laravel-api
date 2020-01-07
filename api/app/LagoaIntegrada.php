<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LagoaIntegrada extends Model
{
    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }

    public function local(){
        return $this->belongsTo('App\Local');
    }

    public function microbiologia(){
        return $this->belongsTo('App\Microbiologia');
    }

    public function fisicoquimica(){
        return $this->belongsTo('App\FisicoQuimica');
    }

}
