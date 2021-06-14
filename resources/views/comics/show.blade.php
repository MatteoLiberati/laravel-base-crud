@extends('layouts.main-layout')

@section('content')
    <div class="comic p-2 container d-flex flex-column justify-content-center align-items-center">
        <h1 class="p-2">{{$comic->name}}</h1>
        <img src="{{$comic->image}}" alt="{{$comic->name}}">
        <div>
            <span class="badge bg-secondary">{{$comic->series}}</span>
            <span class="badge bg-secondary">{{$comic->type}}</span>
        </div>
        <div>Sale date : {{$comic->sale_date}} - $ {{$comic->price}}</div>
        <div class="p-2"><strong>Description:</strong></div>
        <div>{{$comic->description}}</div>
        <a href="{{route("comics.index")}}"><button class="btn btn-primary">Torna indietro</button></a>
    </div>
@endsection