<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        $books = Book::paginate(5);
        return view('books.index', [
            'books' => $books,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $newBook = new Book();
        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->category = $data['category'];
        $newBook->year = $data['year'];
        $newBook->description = $data['description'];
        $newBook->image = $data['image'];
        $newBook->save();

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit',[
            'book' => $book
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {    
        $newBook = new Book();
        $newBook->title = $request->title;
        $newBook->author = $request['author'];
        $newBook->category = $request['category'];
        $newBook->year = $request['year'];
        $newBook->description = $request['description'];
        $newBook->image = $request['image'];
        $newBook->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
