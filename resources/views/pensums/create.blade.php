@extends('pensums.layout')

  
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter une tâche</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pensums.index') }}"> Retour</a>
        </div>
    </div>
</div>

   

@if ($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il y a un problème !!!<br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

   

<form action="{{ route('pensums.store') }}" method="POST">

    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
                <input type="text" name="titre" class="form-control" placeholder="Titre">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Détail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Détail"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>

</form>

@endsection