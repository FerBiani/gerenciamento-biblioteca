<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';
    protected $fillable = ['tipo', 'numero', 'cliente_id'];
    public $timestamps = false;

    //Relacionamentos
    public function cliente() {
        return $this->belongsTo('App/Usuario');
    }
}
