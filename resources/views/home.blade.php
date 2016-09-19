@extends('layout.principal')

@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Painel</h4></div>

                <div class="panel-body">
                    <ul class="lista">
                        <li><a href="{{ action('ProdutoController@lista') }}">Ir para Estoque Laravel</a></li>
                        <li><a href="{{ url('/') }}">Ir para Tela de Entrada</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
