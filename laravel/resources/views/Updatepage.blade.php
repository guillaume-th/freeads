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
    <form method="post" action="/update" id="form">
    @csrf
        <label for="titre">titre:</label>
        <input required type="text" name="titre" id="titre" >
        <br><br>
        <label for="description">description:</label>
        <input required type="text" name="description" id="description">
        <br><br>
        <label for="prix">prix:</label>
        <input required type="text" name="prix" id="prix">
        <br><br>
        <label for="photographie">photographie:</label>
        <input required type="file" name="photographie" id="photographie" accept="image/png, image/jpeg">
        <br><br>
        <div id="submit">
        <input class="annoncedef" type="submit" name="submit" value="valider">
        </div>

</form>
@endsection
