@extends('layout.app')

@section('content')
    <h1>{{$customer->firstName}} {{$customer->lastName}} </h1>
    <p>{{$customer->address}}</p>
    <p>{{$customer->city}}, {{$customer->state}} {{$customer->zip}} </p>

@endsection