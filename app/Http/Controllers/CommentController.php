<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookCreate;

class CommentController extends Controller
{

	public function index()
    {
        $books = Book::all();

     return view('index', compact('books'));
    }


	
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'description' => 'required|max:255',
        ]);
        Book::whereId($id)->update($validatedData);

        return redirect('/books')->with('success', 'Comment added');
    }
}
