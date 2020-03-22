@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            
            <modal-link nome="meuModal" titulo="Novo"></modal-link>

            <tabela-lista 
                v-bind:titulos="['id','Título','Descrição',]"
                v-bind:itens="{{$listaArtigos}}"
                ordem="asc" ordemcol="2"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="991727681"
            >
            </tabela-lista>
        </painel>
    </pagina>
    <modal nome="meuModal">
        <painel titulo="Lista de artigos">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="123456">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </formulario>
        </painel>
    </modal>
@endsection
