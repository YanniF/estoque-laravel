@extends('layout/principal')

@section('conteudo')
	
	<div class="container">
		<h1>Cadastro de Produtos</h1>
		
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="post" action="{{ action('ProdutoController@adiciona') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group">			
				<label for="nome">Nome: </label>
				<input type="text" id="nome" name="nome" class='form-control' value="{{ old('nome') }}" required><br>
				<label for="descricao">Descrição: </label>
				<input type="text" id="descricao" name="descricao" class='form-control' value="{{ old('descricao') }}" required><br>
				<label for="valor">Valor: </label>
				<input type="text" id="valor" name="valor" class='form-control' value="{{ old('valor') }}" required><br>
				<label for="quantidade">Quantidade: </label>
				<input type="number" id="quantidade" name="quantidade" min='0' class='form-control' value="{{ old('quantidade') }}" required><br>
				<button type='submit' class="btn btn-primary btn-block"><span class="glyphicon glyphicon-ok"></span> Cadastrar</button>
			</div>			
		</form>
	</div>		
@endsection