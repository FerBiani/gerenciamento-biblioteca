@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">Painel</div>
    <div class="card-body">

        <h6>Bem vindo!</h6>
        <hr>

        <div class="row">

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Clientes</div>
                    <div class="card-body">
                        {{$data['clientes']}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Livros</div>
                    <div class="card-body">
                        {{$data['livros']}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Empréstimos</div>
                    <div class="card-body">
                        {{$data['emprestimos']}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop