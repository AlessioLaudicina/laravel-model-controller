@extends('layouts.app')
@section('content')
<h2 class="text-center">My Movies</h2>
<div class="container d-flex flex-wrap">

@foreach($movies as $movie)
<div class="card m-1" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="{{$movie->title }}">
  <div class="card-body">
    <h5 class="card-title">Title: {{$movie->title }}</h5>
    <p class="card-text">Original Title:{{$movie->original_title }}</p>
    <p class="card-text">Nationality: {{$movie->nationality }}</p>
    <p class="card-text">IMdB Vote: {{$movie->vote }}</p>

  </div>
</div>

@endforeach


</div>

@endsection