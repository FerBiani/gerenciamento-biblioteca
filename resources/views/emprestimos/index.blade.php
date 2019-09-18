@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Empréstimos</div>
    <div class="card-body">

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Empréstimos do cliente <b>{{$data['cliente']->nome}}</b></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Livro 1</th>
                                <th>Livro 2</th>
                                <th>Livro 3</th>
                                <th>Data de empréstimo</th>
                                <th>Data de devolução</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['cliente']->emprestimos as $emprestimo)
                                <tr>
                                    <td>{{$emprestimo->id}}</td>
                                    <td>{{$emprestimo->livros[0]->titulo}}</td>
                                    <td>{{$emprestimo->livros[1]->titulo}}</td>
                                    <td>{{$emprestimo->livros[2]->titulo}}</td>
                                    <td>{{$emprestimo->data_emprestimo}}</td>
                                    <td>{{$emprestimo->data_devolucao}}</td> 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </div>
</div>
@stop