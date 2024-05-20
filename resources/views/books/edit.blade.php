@extends('templates.base')

@section('title', 'I&M - Modifica')
@section('content')


<h1 class="text-center">Area di modifica</h1>
<div class="row justify-content-center">
    <div class="col-5">
        <form method="post" action="{{ route('books.update', ['id' => $book]) }}">
            @csrf
            @method('PUT')
            <div class="row row-gap-2">
                <div class="col-12">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" name="title" id="title" value="{{$book->title}}" required class="form-control"><br><br>
                </div>

                <div class="col-12">
                    <label for="author">Autore:</label>
                    <input type="text" name="author" id="author" value="{{$book->author}}" required class="form-control"><br><br>
                </div>
               
                <div class="col-12">
                    <label for="category">Categoria</label>
                    <input type="text" name="category" id="category" value="{{$book->category}}" required class="form-control"><br><br>
                </div>
                
                <div class="col-12">
                    <label for="year">Anno:</label> 
                    <input type="number" name="year" id="year"  value="{{$book->year}}" required class="form-control"><br><br>
                </div>

                <div class="col-12">
                    <label for="image">Copertina:</label>
                    <input type="text" name="image" id="image"  value="{{$book->image}}" required class="form-control"><br><br>
                </div>

                <div class="col-12">
                <label for="description" class="form-label mb-0">Trama</label>
                <div class="form-floating">
                    <textarea class="form-control pt-2" placeholder="Piccola trama" required name="description" id="floatingTextarea2" style="height: 100px">{{$book->description}}</textarea>
                </div>
                </div> 

                <div class="col-12 mt-3">
                    <input type="submit" value="Aggiungi Libro" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection