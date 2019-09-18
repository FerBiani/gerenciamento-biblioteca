@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Novo Empréstimo</div>
    <div class="card-body">
        <form method="POST" action="{{url('emprestimos')}}">
    
            @csrf
            <div class="form-group">
                <label><b>Cliente</b></label>
                <select name="emprestimo[cliente_id]" class="form-control">
                    @foreach($data['clientes'] as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Data de empréstimo</b></label>
                        <input type="text" value="{{old('emprestimo.data_emprestimo', '')}}" name="emprestimo[data_emprestimo]" class="form-control data">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>Data de devolução</b></label>
                        <input type="text" value="{{old('emprestimo.data_devolucao', '')}}" name="emprestimo[data_devolucao]" class="form-control data">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>Livro 1</b></label>
                        <select name="livros[0][livro_id]" class="form-control">
                            @foreach($data['livros'] as $livro)
                                <option value="{{$livro->id}}">{{$livro->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>Livro 2</b></label>
                        <select name="livros[1][livro_id]" class="form-control">
                            @foreach($data['livros'] as $livro)
                                <option value="{{$livro->id}}">{{$livro->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label><b>Livro 3</b></label>
                        <select name="livros[2][livro_id]" class="form-control">
                            @foreach($data['livros'] as $livro)
                                <option value="{{$livro->id}}">{{$livro->titulo}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" value="Salvar" class="btn btn-success">
        </form>
    </div>
</div>
@stop