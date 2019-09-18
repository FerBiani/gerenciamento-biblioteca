<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Emprestimo, Livro, Cliente};

class HomeController extends Controller
{
    public function index() {

        $data = [
            'clientes' => Cliente::count(),
            'livros' => Livro::count(),
            'emprestimos' => Emprestimo::count()
        ];

        return view('home', compact('data'));
    }
}
