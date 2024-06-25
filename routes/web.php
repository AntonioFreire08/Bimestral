<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cadastro-livros', function () {
    return view('cad-livros');
});
Route::get('/edit-livros', function () {
    return view('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/cad-livros', [BookController::class, 'store']);
    

    Route::get('/tabela', function () {
        $books = Book::where("id_user", auth()->user()->id)->paginate();
        return view('tabela')->with("books", $books);
    });

});

require __DIR__.'/auth.php';
