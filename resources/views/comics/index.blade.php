@extends('layouts.main-layout')

@section('content')
    <h1 class="text-center">MY COMICS</h1>
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($db_comics as $comic)
        <div class="card m-5 text-center" style="width: 18rem;">
            <a href="{{route('comics.show', $comic->slug)}}"><img src="{{$comic->image}}" class="card-img-top" alt="{{$comic->name}}"></a>
            <div class="card-body">
                <h5 class="card-title">{{$comic->name}}</h5>
            </div>
            <a href="{{route('comics.show', $comic->slug)}}" class="btn btn-success">Go to details</a>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn mt-1 btn-primary">Edit</a>
            <a href="" class="btn mt-1 btn-danger">Delete</a>
        </div>
        @endforeach
    </div>
@endsection