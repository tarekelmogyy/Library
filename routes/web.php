<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Read routes
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/show/{id}',[BookController::class, 'show'])->name('books.show');
//Create routes
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::post('/books',[BookController::class,'store'])->name('books.store');
//update routes
Route::get('/books/edit/{id}',[BookController::class,'edit'])->name('books.edit');
Route::post('/books/update/{id}',[BookController::class,'update'])->name('books.update');
Route::get('/books/delete/{id}',[BookController::class,'delete'])->name('books.delete');

