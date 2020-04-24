@extends('pensums.layout')

@section('contenu')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Un terme et sa définition en détail.</h2>
            </div>
        </div>
    </div>


    <div class="row gris">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                {{ $pensum->titre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Détails:</strong>
                {{ $pensum->detail }}
            </div>
        </div>
    </div>

    <div>
        <a class="btn btn-primary" href="{{ route('pensums.index') }}"> Retour</a>
    </div>

@endsection
