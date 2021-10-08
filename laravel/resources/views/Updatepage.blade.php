@extends('layouts.app')

@section('content')
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Show Product</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('show') }}"> Back</a>

    </div>

</div>

</div>
<h1>Update</h1>
    <form method="post" action="/Update" id="form">
    @csrf
    <input type="hidden" name="id" id="id" value="{{ $id }}">
        <label for="titre">titre:</label>
        <input  type="text" name="titre" id="titre" value="{{ $users->titre }}">
        <br><br>
        <label for="description">description:</label>
        <input  type="text" name="description" id="description" value="{{ $users->description }}">
        <br><br>
        <label for="prix">prix:</label>
        <input  type="text" name="prix" id="prix"  value="{{ $users->prix }}">
        <br><br>
        <label for="photographie">photographie:</label>
        <input require type="file" name="photographie" id="photographie" accept="image/png, image/jpeg" value="{{ $users->photographie }}">
        <br><br>
        <div id="submit">
        <input class="annoncedef" type="submit" name="submit" value="valider">
        </div>

</form>
@endsection
