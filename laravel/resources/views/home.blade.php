@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <h1>Create your annonce !</h1>
    <form method="post" action="/annonce" id="form">
    <!-- <input name="_token" type="hidden" value="{{csrf_token()}}"/> -->
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
        <input required type="text" name="photographie" id="photographie">
        <br><br>
        <div id="submit">
        <input class="annoncedef" type="submit" name="submit" value="valider">
        </div>
</form>
</div>
@endsection
