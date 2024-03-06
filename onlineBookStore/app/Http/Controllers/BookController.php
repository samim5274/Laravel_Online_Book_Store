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
        return "Login success";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->name=$request->has('name')?$request->get('name'):'';
        $book->price=$request->has('price')?$request->get('price'):'';
        $book->qty=$request->has('quantity')?$request->get('quantity'):'';
        $book->is_active = 1;

        if($request->has('images'))
        {
            $files = $request->file('images');
            $i=0;
            $ImageLocation = array();

            foreach($files as $file)
            {
                $extention = $file->getClientOriginalExtension();
                $fileName = 'book-' . time() . ++$i . '.' . $extention;
                $location = '/images/uploads/';
                $file->move(public_path() . $location, $fileName);
                $ImageLocation[] = $location . $fileName;
            }

            $book->image=implode(' | ', $ImageLocation);
            $book->save();
            return back()->with('success', 'Book add libery successfully.');
        }
        else
        {
            return back()->with('error', 'Book add libery un-successfully.');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    public function addBooks()
    {
        $books = Book::all();
        $returnBook = array();

        foreach($books as $book)
        {
            $images = explode('|' , $book->image);
            $returnBook[] = [
                'name' => $book->name,
                'price' => $book->price,
                'qty' => $book->qty,
                'image' => $images[0]
            ];
        }

        return view('booklist', compact('returnBook'));
    }
}
