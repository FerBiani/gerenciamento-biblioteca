<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Emprestimo, Livro, Cliente};
use DB;

class EmprestimoController extends Controller
{

    public function index($id) {

        $data = [
            'cliente' => Cliente::findOrFail($id)
        ];

        return view('emprestimos.index', compact('data'));
        
    }

    public function create() {

        $data = [
            'clientes' => Cliente::all(),
            'livros' => Livro::all()
        ];

        return view('emprestimos.form', compact('data'));
    }

    public function store(Request $request) {

        DB::beginTransaction();
        try {
        
            $emprestimo = Emprestimo::create([
                'data_emprestimo' => $request['emprestimo']['data_emprestimo'],
                'data_devolucao' => $request['emprestimo']['data_devolucao'],
                'cliente_id' => $request['emprestimo']['cliente_id']
            ]);

            $emprestimo->livros()->attach($request['livros']);

            DB::commit();
            return redirect('clientes')->with('success', 'Empréstimo realizado com sucesso!');

        } catch(\Exception $e) {
            DB::rollback();
            return redirect('clientes')->with('error', 'Erro no servidor! Empréstimo não realizado!'); 
        }

    }
}
