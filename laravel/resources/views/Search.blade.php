@extends('layouts.app')

@section('content')
<div class="row">

<div class="col-lg-12 margin-tb">
    <form action="/Search" method="post">
    @csrf
    <input type="search" name="search" id='search'>
    </form>

    <div class="pull-left">

        <h2> Show Product</h2>

    </div>

    <div class="pull-right">

       <a class="btn btn-primary" href="{{ route('show') }}"> Back</a>

    </div>

</div>

</div>


@foreach ($users as $user)
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>

        {{ $user->titre }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Details:</strong>

        {{ $user->description }}



    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Image:</strong>

        <img src="/storage/{{ $user->photographie }}" width="500px">

    </div>

</div>
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>prix:</strong>

        {{ $user->prix }}


    </div>
</div>
<br><br>
@endforeach

</div>
@endsection