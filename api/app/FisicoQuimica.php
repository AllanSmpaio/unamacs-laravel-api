<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FisicoQuimica extends Model
{

    /*protected $fillable = [
        'turbidez',
        'solidos_totais',
        'condutividade',
        'ph',
        'nitrogenio',
        'oxigenio',
        'gas_carbonico',
        'temperatura',
        'cloretos',
        'dureza',
        'alcalinidade',
        'analise_realizada_em',
        'lagoa_id',
    ];*/

    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }
}
