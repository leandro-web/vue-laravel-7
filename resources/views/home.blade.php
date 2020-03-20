@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <painel titulo="Dashboard">
                    Teste de conteúdo...
                    <div class="row">
                        <div class="col-md-4">
                            <caixa qtd="80" titulo="Artigos" url="#" cor="orange" icone="ion ion-document"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="1500" titulo="Usuários" url="#" cor="blue" icone="ion ion-person-stalker"></caixa>
                        </div>
                        <div class="col-md-4">
                            <caixa qtd="3" titulo="Autores" url="#" cor="red" icone="ion ion-compose"></caixa>
                        </div>
                        <!--
                        <div class="col-md-4">
                            <painel titulo="Painel 3" cor="bg-warning">
                                Teste de conteúdo C
                            </painel>
                        </div> 
                        -->
                    </div>
                </painel>
            </div>
        </div>
    </div>
@endsection
