@extends('layouts.app')

@section('content')
    <pagina tamanho="12">
        <painel titulo="Lista de artigos">
            <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
            <tabela-lista 
                v-bind:titulos="['id','Título','Descrição',]"
                v-bind:itens="[
                    ['1','PHP','Curso de Laravel'],
                    ['2','JS','Curso de VUE'],
                    ['3','Mobile','Curso de React Native'],
                    ['4','NODE','Curso de NodeJS'],
                    ['5','JS','Curso de ReactJS']
                ]"
                ordem="asc" ordemcol="2"
                criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="991727681"
            >
            </tabela-lista>
        </painel>
    </pagina>
@endsection
