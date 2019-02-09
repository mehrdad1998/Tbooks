<?php

namespace App\Http\Controllers;

use App\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('Index',compact('books'));
    }

    public function show($name)
    {
        $book = Books::where('name','=',$name)->firstOrFail();
        return view('Show',compact('book'));
    }
}
