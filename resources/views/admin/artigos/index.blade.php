@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de artigos">
            
            <a href="#" class="btn btn-success my-3">Criar</a>

            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Data</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody >
                    <tr>
                        <td>1</td>
                        <td>Título...</td>
                        <td>Descrição...</td>
                        <td>Leandro</td>
                        <td>20/03/2020</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <a href="#" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Título...</td>
                        <td>Descrição...</td>
                        <td>Leandro</td>
                        <td>20/03/2020</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <a href="#" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Título...</td>
                        <td>Descrição...</td>
                        <td>Leandro</td>
                        <td>20/03/2020</td>
                        <td>
                            <a href="#" class="btn btn-outline-primary btn-sm mx-1">Editar</a>
                            <a href="#" class="btn btn-outline-danger btn-sm mx-1">Deletar</a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </painel>
    </pagina>
@endsection
