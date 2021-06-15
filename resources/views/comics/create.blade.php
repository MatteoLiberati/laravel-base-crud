@extends("layouts.main-layout")

@section('content')
    <form class="container" action="{{route('comics.store')}}" method="post">
        @csrf
        @method('POST')
            <div class="my-3">
                <label class="form-label" for="name">comic name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="description">comic description</label>
                <input class="form-control" type="text" name="description" id="description" >
            </div>

            <div class="mb-3">
                <label class="form-label" for="image">comic image</label>
                <input class="form-control" type="text" name="image" id="image" >
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="series">series</label>
                <input class="form-control" type="text" name="series" id="series" >
            </div>
           
            <div class="mb-3">
                <label class="form-label" for="sale_date" placeholder="es. 2020-10-05">sale_date</label>
                <input class="form-control" type="text" name="sale_date" id="sale_date" >
            </div>
    
            <div class="mb-3">
                <label class="form-label" for="price">price</label>
                <input class="form-control" type="text" name="price" id="price" placeholder="es. 12.88" >
            </div>
            
            <div class="mb-3">
                <label class="form-label" for="type">type</label>
                <input class="form-control" type="text" name="type" id="type" >
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
    </form>
@endsection