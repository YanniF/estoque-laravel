@extends('layout/principal')

@section('conteudo')
	<div class="container">
		<h1>Detalhes do Produto: <?= $p->nome ?></h1>
		<ul class="lista">
			<li><b>Valor: </b> {{ $p->valor }}</li>
			<li><b>Descrição: </b> {{ $p->descricao }}</li>
			<li><b>Quantidade em estoque: </b> {{ $p->quantidade }}</li>			
		</ul>
	</div>		
@endsection