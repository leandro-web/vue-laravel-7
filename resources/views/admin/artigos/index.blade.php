@extends('layouts.app')

@section('content')
    <pagina tamanho="12">

        @if($errors->all())            
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $key => $value)
                    <li>{{ $value }}</li>   
                @endforeach                 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>            
        @endif

        <painel titulo="Lista de artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

            <tabela-lista 
                v-bind:titulos="['id','Título','Descrição','Data']"
                v-bind:itens="{{$listaArtigos}}"
                ordem="asc" ordemcol="2"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="991727681"
                modal="sim"
            >
            </tabela-lista>
        </painel>
    </pagina>

    <modal nome="adicionar">
        <painel titulo="Criar um novo artigo">
            <formulario css="" action="{{ route('artigos.store')}}" method="post" enctype="multipart/form-data" token="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}">
                </div>
                <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea class="form-control" name="conteudo" id="conteudo">{{ old('conteudo') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="data">Data</label>
                    <input type="datetime-local" class="form-control" id="data" name="data" value="{{ old('data') }}">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </formulario>
        </painel>
    </modal>

    <modal nome="editar">
        <painel titulo="Editar o artigo">
            <formulario css="" action="#" method="put" enctype="multipart/form-data" token="123456">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" v-model="$store.state.item.titulo" placeholder="Título">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" v-model="$store.state.item.descricao" placeholder="Descrição">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar </button>
            </formulario>
        </painel>
    </modal>

    <modal nome="detalhe">
        <painel v-bind:titulo="$store.state.item.titulo">
            <p>@{{$store.state.item.descricao}}</p>
        </painel>
    </modal>
@endsection
