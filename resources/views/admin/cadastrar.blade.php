@extends('admin.layouts.principal')

@section('titulo','CMW Tech - Cadastro de Clientes')

@section('titulo1','Clientes')

@section('acao','Formulário')

@section('conteudo-principal')
    <div class="container">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-9">
                    <label for="nome">Nome</label>
                    <input id="nome" class="form-control" type="text" name="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="idade">Idade</label>
                    <input type="text" name="idade" id="idade" class='form-control'>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="pais">País</label>
                    <input type="text" name="pais" id="pais" class="form-control">
                </div>
            </div>
            <button class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
