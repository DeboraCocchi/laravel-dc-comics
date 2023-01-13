@extends('layouts.main')

@section('jumbo')
    <section class="jumbo"></section>
@endsection

@section('content')
 <div class="conainer p-5 dc-cont-spec">
    <h1 class="text-primary">Modifica il fumetto {{$comic->title}}</h1>
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Batman Adventures" name="title" value="{{$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{$comic->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Thumb Image</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Insert a valid url" name="thumb" value="{{$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Insert a valid date in format YYYY-MM-DD" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="$ 19.99" name="price" value="{{$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput5" class="form-label">Series</label>
            <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Series" name="series" value="{{$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput6" class="form-label">Type</label>
            <input type="text" class="form-control" id="exampleFormControlInput6" placeholder="Type" name="type" value="{{$comic->type}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea2" class="form-label">Artists</label>
            <textarea class="form-control" id="exampleFormControlTextarea2" rows="2" name="artists">{{$comic->artists}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea3" class="form-label">Writers</label>
            <textarea class="form-control" id="exampleFormControlTextarea3" rows="2" name="writers">{{$comic->writers}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Conferma</button>
    </form>
 </div>


@endsection
