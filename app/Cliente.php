<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{

    use SoftDeletes;

    protected $table = 'cliente';
    protected $fillable = ['nome'];

    //Relacionamentos
    public function documentos() {
        return $this->hasMany('App\Documento');
    }

    //Funções
    public function getRg() {
        return $this->documentos()->where('tipo', 'rg')->first();
    }

    public function getCpf() {
        return $this->documentos()->where('tipo', 'cpf')->first();
    }

}
