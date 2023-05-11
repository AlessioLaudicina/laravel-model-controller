@extends('layouts.app')
@section('content')
<h2 class="text-center">My Movies</h2>
<div class="container d-flex wrap">

@foreach($movies as $movie)
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$movie->title }}</h5>
    <p class="card-text">{{$movie->original_title }}</p>
    <p class="card-text">{{$movie->nationality }}</p>
    <p class="card-text">{{$movie->vote }}</p>

  </div>
</div>

@endforeach


</div>

@endsection