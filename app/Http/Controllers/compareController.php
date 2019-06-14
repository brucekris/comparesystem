<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class compareController extends Controller
{
    public function index()
    {

    	 $books = Book::all();

        return view('comparing', compact('books'));
    }
}

