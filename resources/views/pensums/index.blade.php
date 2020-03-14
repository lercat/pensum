@extends('pensums.layout')

@section('content')
<div class="container">

    <h1>Laravel 6 CRUD</h1>
    <h2>Termes à connaître pour la certif</h2>

    <div class="row">
            <div class="col-md-4">
                <a class="btn btn-success" href="{{ route('pensums.create') }}"> Ajouter un terme & sa définition</a>
            </div>
    <div>
        <form method="GET" action="{{ url('my-search') }}">
                <div class="col-md-7" class="form-control">
                    <input type="text" name="search" class="form-control" placeholder="Terme Recherché" value="{{ old('search') }}">
                </div>
                <div class="col-md-1">
                    <button class="btn btn-success">C'est parti</button>
                </div>
        </form>
    </div>
    </div>

</div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success orange">
            <p>{{ $message }}</p>
        </div>

    @endif


    <table class="container2">
        <tr>
            <th class="col-md-1">N°</th>
            <th class="col-md-2">Titre</th>
            <th class="col-md-5">Details</th>
            <th class="col-md-4">Action</th>
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
