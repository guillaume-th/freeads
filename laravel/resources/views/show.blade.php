@extends('layouts.app')

@section('content')
<div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Show Product</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('home') }}"> Back</a>

    </div>

</div>

</div>


@foreach ($annonce as $annonces)
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>

        {{ $annonces['titre']}}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Details:</strong>

        {{ $annonces['description'] }}

    </div>

</div>

<!-- <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Image:</strong>

        <img src="/image/{{ $annonces['photographie'] }}" width="500px">

    </div>

</div> -->
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>prix:</strong>

        {{ $annonces['prix'] }}

    </div>
</div>
<a class= "{{ $annonces['id'] }}" href="{{ route('Updatepage',['id'=>$annonces['id']]) }}"> Update</a>
<a class= "{{ $annonces['id'] }}" href='{{ route('Delete',['id'=>$annonces['id']]) }}'> Delete</a>
<br><br>
@endforeach

</div>
@endsection