@extends('templates.base')

@section('title', 'I&M - Libreria')
@section('content')

<h1 class="text-ceneter">Libri disponibili</h1>

@if ($books->count())
    <table  class="table table-striped">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Year</th>
            <th scope="col">Image</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_et</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $books as $book )
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td><a href="{{route('books.show', ['id' => $book->id])}}">{{$book->title}}</a></td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category}}</td>
                    <td>{{$book->year}}</td>
                    <td>{{$book->image}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>{{$book->updated_at}}</td>
                </tr>
                <form action="{{route('books.destroy', ['id' => $book])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Elimina</button>
                </form>
            @endforeach
        </tbody>
    </table>
    {{$books->links()}}
@else
    <h2>Nessun Libro disponibile</h2>
@endif

@endsection