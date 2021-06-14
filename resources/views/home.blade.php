@extends('layouts.main-layout')

@section('content')
    <div class="home h-100 d-flex flex-column justify-content-center align-items-center">
        <h1>Welcome to my Comics site</h1>
        <a href="{{route('comics')}}"><button class="btn btn-primary">Go to comics</button></a>
    </div>
@endsection