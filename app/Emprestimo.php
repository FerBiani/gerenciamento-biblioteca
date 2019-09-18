<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'emprestimo';
    protected $fillable = ['data_emprestimo', 'data_devolucao', 'cliente_id'];

    //Relacionamentos
    public function livros() {
        return $this->belongsToMany('App\Livro', 'emprestimo_has_livro');
    }

    //Mutators
    public function setDataEmprestimoAttribute($val) {
        $this->attributes['data_emprestimo'] = implode('-', array_reverse(explode('/', $val)));
    }

    public function getDataEmprestimoAttribute($val) {
        return implode('/', array_reverse(explode('-', $val)));
    }

    public function setDataDevolucaoAttribute($val) {
        $this->attributes['data_devolucao'] = implode('-', array_reverse(explode('/', $val)));
    }

    public function getDataDevolucaoAttribute($val) {
        return implode('/', array_reverse(explode('-', $val)));
    }

}
