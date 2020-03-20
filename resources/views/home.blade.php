@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <painel titulo="Dashboard">
                    Teste de conteúdo...
                    <div class="row">
                        <div class="col-md-4">
                            <caixa></caixa>
                        </div>
    
                        <div class="col-md-4">
                            <painel titulo="Painel 2" cor="bg-danger">
                                Teste de conteúdo B
                            </painel>
                        </div>
    
                        <div class="col-md-4">
                            <painel titulo="Painel 3" cor="bg-warning">
                                Teste de conteúdo C
                            </painel>
                        </div>
                    </div>

                </painel>
            </div>
        </div>
    </div>
@endsection
