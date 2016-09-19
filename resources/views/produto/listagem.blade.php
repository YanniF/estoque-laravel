@extends('layout/principal')

@section('conteudo')
	
	<div class="container">
		@if(empty($produtos)) 
			<div class="alert alert-danger">Você não tem nenhum produto cadastrado.</div>

		@else	
			<h1>Listagem de produtos com Laravel</h1>
			<table class="table table-striped">
				<tr>
					<th>Nome</th>
					<th>Valor</th>
					<th>Descrição</th>
					<th>Quantidade</th>				
					<th></th>
					<th></th>
					<th></th>
				</tr>

				@foreach($produtos as $p) <!-- pode fazer um foreach assim ou usando php -->
					<tr {{ $p->quantidade <= 1 ? 'class=danger' : '' }} >
						<td> <?php echo $p->nome ?> </td>
						<td> <?=  $p->valor ?> </td> 
						<td> {{ $p->descricao or 'Nenhuma descrição informada'}} </td><!-- maneira de exibir dados do blade, um valor default -->
						<td> <?= $p->quantidade ?> </td>	
						<td> <a href="produtos/mostra?id=<?= $p->id ?>"><span class="glyphicon glyphicon-search"></span></a></td>	
						<!-- <td> <a href="produtos/mostra/<?= $p->id ?>"><span class="glyphicon glyphicon-search"></span></a></td> -->
						<td> <a href="{{ action('ProdutoController@editar', $p->id) }}"><span class="glyphicon glyphicon-pencil"></span></a></td> <!-- arrumar -->
						<td> <a href="{{ action('ProdutoController@remove', $p->id) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				@endforeach
				
			</table>
		@endif
		
		<h4>
			<span class="label label-danger pull-right">
				Um ou menos itens no estoque.
			</span>
		</h4>
		
		@if(old('nome'))
			<div class="alert alert-success"> <!-- o old pega os dados enviados por redirect -->
				<strong>Sucesso! </strong>O produto '{{ old('nome') }}' foi cadastrado com sucesso!
			</div>
		@endif
	</div>
@endsection