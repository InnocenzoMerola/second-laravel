@extends('templates.base')

@section('title', 'I&M - Homepage')

@section('content')

<h1 class="text-center">Area di creazione</h1>
<div class="row justify-content-center">
  <div class="col-5">
    <form method="POST" action="{{route('books.store')}}">
        @csrf
        <div class="row row-gap-2">
            <div class="col-12">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" name="title" id="title" class="form-control"><br><br>
            </div>

            <div class="col-12">
                <label for="author">Autore:</label>
                <input type="text" name="author" id="author" class="form-control"><br><br>
            </div>
           
            <div class="col-12">
                <label for="category">Categoria</label>
                <input type="text" name="category" id="category" class="form-control"><br><br>
            </div>
            
            <div class="col-12">
                <label for="year">Anno:</label>
                <input type="number" name="year" id="year" class="form-control"><br><br>
            </div>

            <div class="col-12">
                <label for="image">Copertina:</label>
                <input type="text" name="image" id="image" class="form-control"><br><br>
            </div>

            <label for="description" class="form-label mb-0">Trama</label>
            <div class="form-floating">
                <textarea class="form-control pt-2" placeholder="Piccola trama" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>

            <div class="col-12 mt-3">
                <input type="submit" value="Aggiungi Libro" class="btn btn-primary">
            </div>
        </div>

    </form>
  </div>
</div>

@endsection