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



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Name:</strong>

        {{ $annonce->titre }}

    </div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Details:</strong>

        {{ $annonce->description }}

    </div>

</div>

<!-- <div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>Image:</strong>

        <img src="/image/{{ $product->image }}" width="500px">

    </div>

</div> -->
<div class="col-xs-12 col-sm-12 col-md-12">

    <div class="form-group">

        <strong>prix:</strong>

        {{ $annonce->prix }}

    </div>

</div>

</div>
@endsection