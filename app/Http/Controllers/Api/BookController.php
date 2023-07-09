<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateBookRequest;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();

        return BookResource::collection($book);
    }

    public function store(CreateBookRequest $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);

    }

    public function show(string $book)
    {
        $book = Book::findOrFail($book);

        return new BookResource($book);
    }

    public function update(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $book->update($request->all());

        return new BookResource($book);
                
    }

    public function destroy(Request $request, string $id)
    {
        $book = Book::findOrFail($id);

        $book->delete($request->all());

    }

}
