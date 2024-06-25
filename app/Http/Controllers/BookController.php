<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public readonly Book $book;
    public function __construct() {
        $this->book = new Book();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $books = $this->book->all();
        
        return view('dashboard',['books'=>$books]);
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
        $book = new Book;
        $book->id_user = auth()->id();
        $book->nome = $request->Nome;
        $book->volume = $request->Numero;
        $book->gênero = $request->Genero;
        $book->descricao = $request->Desc;
        $book->preco = $request->Preco;

        $book->save();

        return redirect('/tabela');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $books)
    {
        var_dump($books);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $books)
    {
        //
    }
}
