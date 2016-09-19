@extends('layout/principal')

@section('conteudo')
	<div class="container">
		<h1>Editar Produtos</h1>
		<form method="post" action="{{ action('ProdutoController@atualiza', $p->id) }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">
				<label for="id">ID: </label>
				<input type="text" id="id" name="id" value="{{ $p->id }}" class='form-control' readonly><br>			
				<label for="nome">Nome: </label>
				<input type="text" id="nome" name="nome" value="{{ $p->nome }}" class='form-control' required><br>
				<label for="descricao">Descrição: </label>
				<input type="text" id="descricao" name="descricao" value="{{ $p->descricao }}" class='form-control' required><br>
				<label for="valor">Valor: </label>
				<input type="text" id="valor" name="valor" value="{{ $p->valor }}" class='form-control' required><br>
				<label for="quantidade">Quantidade: </label>
				<input type="number" id="quantidade" name="quantidade" value="{{ $p->quantidade }}" min='0' class='form-control' required><br>
				<button type='submit' class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Atualizar</button>
			</div>			
		</form>
	</div>
@endsection