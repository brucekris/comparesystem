<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookCreate;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();

     return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookCreate $request)
    {
        // $request->validate([
            
        // ]);

        $book = new Book;
        $book->phone_name  = $request->phone_name;
        $book->description  = $request->description;
        $book->price  = $request->price;
        $book->display  = $request->display;
        $book->battery  = $request->battery;
        $book->storage  = $request->storage;
        $book->processor  = $request->processor;
        $book->camera  = $request->camera;
        $book->network  = $request->network;
        $book->waterproof  = $request->waterproof;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $book = Book::find($id);

        return view('book.show')
            ->with('book', $book);

        return [
            'Phone name - ', $book->phone_name, '<br>',
            'Description - ', $id, '<br>',
            'Price - ', $id, '<br>',
            'Display - ', $id, '<br>',
            'Battery - ', $id, '<br>',
            'Storage - ', $id, '<br>',
            'Processor - ', $id, '<br>',
            'Camera - ', $id, '<br>',
            'Network - ', $id, '<br>',
            'Waterproof - ', $id, '<br>',

    ];
    }

     public function show1($id)
    {

        $book = Book::find($id);

        return view('book.show1')
            ->with('book', $book);

        return [
            'Phone name - ', $book->phone_name, '<br>',
            'Description - ', $id, '<br>',
            'Price - ', $id, '<br>',
            'Display - ', $id, '<br>',
            'Battery - ', $id, '<br>',
            'Storage - ', $id, '<br>',
            'Processor - ', $id, '<br>',
            'Camera - ', $id, '<br>',
            'Network - ', $id, '<br>',
            'Waterproof - ', $id, '<br>',

    ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $book = Book::findOrFail($id);

    return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'phone_name' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|numeric',
            'display' => 'required|max:255',
            'battery' => 'required|max:255',
            'storage' => 'required|max:255',
            'camera' => 'required|max:255',
            'network' => 'required|max:255',
            'waterproof' => 'required|max:255',
        ]);
        Book::whereId($id)->update($validatedData);

        return redirect('/books')->with('success', 'Book is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book is successfully deleted');
    }
}
