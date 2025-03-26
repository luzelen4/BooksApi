<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    // Obtener todos los libros
    public function index()
    {
        $books = Book::all();
        return response()->json($books, 200);
    }

    // Obtener un libro por ID
    public function show($id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json($book, 200);
        }
        return response()->json(['message' => 'Book not found'], 404);
    }

    // Crear un nuevo libro
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'publication_year' => 'required|integer'

                ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    // Actualizar un libro
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->update($request->all());
        return response()->json($book, 200);
    }

    // Eliminar un libro
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Book not found'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted'], 200);
    }
}





