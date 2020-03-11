@extends('pensums.layout')

@section('content')

	<div class="container">

		<h1>Alors on en parle ici !!!</h1>

		<div class="pull-left">
                <a class="btn btn-primary" href="{{ route('pensums.index') }}"> Retour</a>
        </div>

		<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Titre</th>
				<th>Détail</th>
			</tr>

			@if($pensums->count())

				@foreach($pensums as $pensum)

				<tr>
					<td>{{ $pensum->id }}</td>
					<td>{{ $pensum->titre }}</td>
					<td>{{ $pensum->detail }}</td>
				</tr>

				@endforeach

			@else

			<tr>
				<td colspan="3">Aucun résultat.</td>
			</tr>

			@endif

		</table>
	</div>
	@endsection