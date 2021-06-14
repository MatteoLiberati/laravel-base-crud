@extends('layouts.main-layout')

@section('content')
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center">
        <h1>ERROR 404</h1>
        <h2>Attenzione: la pagina che hai cercato non esiste o non è disponibile</h2>
        <a href="{{route('home')}}"><button class="btn btn-danger">Torna alla Home</button></a>
    </div>
@endsection