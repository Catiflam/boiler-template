@extends('layouts.app')

@section('main-content')
<section class="container mt-5">
  @forelse($movies as $movie)
      <p>
        <strong>Type</strong>: {{ $movie->title }} <br>
        <strong>Rooms</strong>: {{ $movie->nationality }} <br>
        <strong>Bathrooms</strong>: {{ $movie->date }}
      </p>
      <hr>
    @empty
      <h2>Non ci sono risultati</h2>
    @endforelse
</section>

@endsection