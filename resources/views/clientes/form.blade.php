@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">{{$data['cliente'] ? 'Editar cliente' : 'Novo cliente'}}</div>
    <div class="card-body">
        <form method="POST" action="{{url($data['url'])}}">
            @if($data['method'] == 'PUT')
                @method('PUT')
            @endif
            @csrf
            <div class="form-group">
                <label><b>Nome</b></label>
                <input type="text" value="{{old('cliente.nome', $data['cliente'] ? $data['cliente']->nome : '')}}" name="cliente[nome]" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>RG</b></label>
                        <input type="text" value="{{old('documentos.rg', $data['cliente'] ? $data['cliente']->getRg()->numero : '')}}" name="documentos[rg][numero]" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><b>CPF</b></label>
                        <input type="text" value="{{old('documentos.cpf', $data['cliente'] ? $data['cliente']->getCpf()->numero : '')}}" name="documentos[cpf][numero]" class="form-control">
                    </div>
                </div>
            </div>
            <input type="submit" value="{{$data['cliente'] ? 'Atualizar' : 'Salvar'}}" class="btn btn-success">
        </form>
    </div>
</div>
@stop