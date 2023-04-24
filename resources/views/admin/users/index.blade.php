@extends('layouts.dashboard')

@section('title', 'Users')

@section('content')
    <users-admin :users="{{$users}}"></users-admin>
@endsection