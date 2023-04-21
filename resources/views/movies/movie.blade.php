@extends('layouts.app')

@section('content')
    <a href="{{ url('/') }}" class="btn btn-primary ms-5">Back</a>
    <movie :movie="{{ $movie }}"></movie>
@endsection