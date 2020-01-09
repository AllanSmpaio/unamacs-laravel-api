<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microbiologia extends Model
{
    // depois eu apago
    /*protected $fillable = [
        'coliformes_termotolerantes',
        'coliformes_totais',
        'bacterias_aerobicas',
        'bacterias_mesofilas',
        'analise_realizada_em',
        'lagoa_id',
    ];*/


    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }
}
