@extends('admin.layouts.principal')

@section('titulo','CMW Tech - Clientes')

@section('titulo1','Clientes')

@section('acao','Listar')

@section('conteudo-principal')
    <div class="container">
        <a href="#" class="btn btn-primary mt-n4 mb-2 float-right">Adicionar</a>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">País</th>
                    <th></th>
                </tr>
            </thead>
            <tr>
                <td>Wellington</td>
                <td>21</td>
                <td>Buritizeiro</td>
                <td>Brasil</td>
                <td class="d-flex justify-content-end">
                    <span class="btn btn-info btn-sm" title="Editar">
                        <i class="far fa-edit fa-fw"></i>
                    </span>
                    <button class="btn btn-danger btn-sm ml-1" title="Excluir">
                        <i class="fas fa-trash fa-fw"></i>
                    </button>
                </td>
            </tr>

        </table>
    </div>
@endsection
