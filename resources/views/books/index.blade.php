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
                    <td>
                        <form action="{{route('books.destroy', ['id' => $book])}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-success text-white text-decoration-none" href="{{route('books.edit', ['id'=>$book])}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                              <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$books->links()}}
@else
    <h2>Nessun Libro disponibile</h2>
@endif

@endsection