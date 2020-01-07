<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    /*protected $fillable = [
        'latitude', 'longitude',
    ];*/

    public function lagoa(){
        return $this->belongsTo('App\Lagoa');
    }
}
