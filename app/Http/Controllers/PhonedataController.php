<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PhonedataController extends Controller
{
    public function index()
    {
        $books = Book::all();

     return view('phonedata', compact('books'));
    }
}
