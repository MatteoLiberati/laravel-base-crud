@extends("layouts.main-layout")

@section('content')
    <form class="container" action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PATCH')
            <div class="my-3">
                <label class="form-label" for="name">comic name</label>
                <input class="form-control" type="text" name="name" id="name" value="{{$comic->name}}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="description">comic description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{$comic->description}}" >
            </div>

            <div class="mb-3">
                <label class="form-label" for="image">comic image</label>
                <input class="form-control" type="text" name="image" id="image" value="{{$comic->image}}" >
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="series">series</label>
                <input class="form-control" type="text" name="series" id="series" value="{{$comic->series}}" >
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="sale_date" placeholder="es. 2020-10-05">sale_date</label>
                <input class="form-control" type="text" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
            </div>
    
            <div class="mb-3">
                <label class="form-label" for="price">price</label>
                <input class="form-control" type="text" name="price" id="price" placeholder="es. 12.88" value="{{$comic->price}}">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="type">type</label>
                <input class="form-control" type="text" name="type" id="type" value="{{$comic->type}}" >
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">submit changes</button>
            </div>
        </form>
            <div class="d-flex justify-content-center">
                <a href="{{route('comics.index')}}"><button class="btn btn-success my-2">back to details</button></a>
            </div>
@endsection