@extends('templates.base')

@section('title', "$book->title - I&M")

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-5">
<div class="card" style="width: 18rem;">
    <img src=".{{$book->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book->title}}</h5>
      <p class="card-text">{{$book->description}}</p>
      <p class="card-text">{{$book->author}}</p>
      <p class="card-text">{{$book->year}}</p>
      <p class="card-text">{{$book->category}}</p>
    </div>
</div></div>
</div>

@endsection