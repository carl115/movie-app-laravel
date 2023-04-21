@extends('layouts.app')

@section('content')
    <div class="movie-list">
        @forelse ($movies as $movie)
            <movie-card :movie="{{ $movie }}"></movie-card>
        @empty
            <h1>No movies</h1>
        @endforelse
    </div>
@endsection