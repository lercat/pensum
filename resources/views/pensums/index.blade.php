@extends('pensums.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 6 CRUD</h2>
                <br />
                <h2>Termes à connaître pour la certif</h2>
            </div>

<div class="col-lg-12 margin-tb">
            <div class="col-md-4">
                <a class="btn btn-success" href="{{ route('pensums.create') }}"> Ajouter un terme & sa définition</a>
            </div>
        
            <form method="GET" action="{{ url('my-search') }}">
			<div class="row">
				<div class="col-md-5">
					<input type="text" name="search" class="form-control" placeholder="Terme Recherché" value="{{ old('search') }}">
				</div>
				<div class="col-md-3">
					<button class="btn btn-success">Clique ici</button>
				</div>
			</div>
		</form>
</div>

            </div>
            
        </div>
    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>

    @endif


    <table class="container2 blue yellow">
        <tr>
            <th>N°</th>
            <th>Titre</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($pensums as $pensum)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pensum->titre }}</td>
            <td>{{ $pensum->detail }}</td>
            <td>
                <form action="{{ route('pensums.destroy',$pensum->id) }}" method="POST">
                    <a class="info" href="{{ route('pensums.show',$pensum->id) }}">Afficher</a>
                    <a class="primary" href="{{ route('pensums.edit',$pensum->id) }}">Modifier</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>

    {!! $pensums->links() !!}

@endsection

