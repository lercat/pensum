<!DOCTYPE html>
<html>

<head>
    <title>Search Example</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<div class="container">

		<h1>Alors on en parle !!!</h1>

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
					<td>{{ $pensum->name }}</td>
					<td>{{ $pensum->email }}</td>
				</tr>

				@endforeach

			@else

			<tr>
				<td colspan="3">Aucun résultat.</td>
			</tr>

			@endif

		</table>
	</div>
</body>
</html>