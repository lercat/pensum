
@extends('pensums.layout')

@section('contenu')
<div class="container">

    <h1>Laravel 6 CRUD</h1>
    <h2>Termes à connaître pour la certif</h2>

    <div class="row">
    <div>
        <form method="GET" action="{{ url('my-search') }}">
            <div class="col-md-6" class="form-group">
                <a class="btn btn-success" href="{{ route('pensums.create') }}"> Ajouter un terme & sa définition</a>
            </div>

            <div class="col-md-5" class="form-group">
                <input type="text" id="milieu" name="search" placeholder="Recherché un terme" value="{{ old('search') }}">
            </div>
            
            <div class="col-md-1" class="form-group">
                <button class="btn btn-success">C'est parti</button>
            </div>
        </form>
    </div>
</div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success orange">
            <p>{{ $message }}</p>
        </div>

    @endif


    <table class="container2">
        <tr>
            <th class="col-sm-1 col-md-1">N°</th>
            <th class="col-sm-2 col-md-2">Titre</th>
            <th class="col-sm-5 col-md-5">Details</th>
            <th class="col-sm-4 col-md-4">Actions</th>
        </tr>

        @foreach ($pensums as $pensum)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pensum->titre }}</td>
            <td>{{ $pensum->detail }}
            </td>
            <td>
                <form action="{{ route('pensums.destroy',$pensum->id) }}" method="POST">
                    <a class="info" href="{{ route('pensums.show',$pensum->id) }}">Afficher</a>
                    <a class="info" href="{{ route('pensums.edit',$pensum->id) }}">Modifier</a>

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

@extends('../layouts/app')
