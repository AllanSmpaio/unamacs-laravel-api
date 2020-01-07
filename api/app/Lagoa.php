<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lagoa extends Model
{
    /*protected $fillable = [
        'nome', 'descricao',
    ];*/

    public function fisicoquimica() {
        return $this->hasOne('App\FisicoQuimica');
    }

    public function microbiologia() {
        return $this->hasOne('App\Microbiologia');
    }

    public function local() {
        return $this->hasOne('App\Local');
    }

    public function instituicao() {
        return $this->hasOne('App\Instituicao');
    }
}
