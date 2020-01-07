<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    /*protected $fillable = [
        'nome', 'cnpj',
    ];*/

    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }
}
