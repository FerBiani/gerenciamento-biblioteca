@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Clientes</div>
    <div class="card-body">

        <div class="col-md-12">
            <div class="text-right">
                <a href="{{url('clientes/create')}}" class="btn btn-success">Novo</a>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Clientes Ativos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th colspan='2'>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['clientesAtivos'] as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->getRg()->numero}}</td>
                                    <td>{{$cliente->getCpf()->numero}}</td>
                                    <td><a href="{{url('clientes/'.$cliente->id.'/edit')}}" class="btn btn-warning">Editar</td>
                                    <td>
                                        <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-danger" value="Desativar"/>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">Clientes Inativos</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['clientesInativos'] as $cliente)
                                <tr>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->getRg()->numero}}</td>
                                    <td>{{$cliente->getCpf()->numero}}</td>
                                    <td>
                                        <form action="{{url('clientes', [$cliente->id])}}" method="POST">
                                            {{method_field('DELETE')}}
                                            {{ csrf_field() }}
                                                <input type="submit" class="btn btn-success" value="Ativar"/>
                                        </form>
                                    </td>
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