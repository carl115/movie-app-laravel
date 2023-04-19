@extends('layouts.app')

@section('content')
    <movie-list :movies="$movies"></movie-list>
@endsection