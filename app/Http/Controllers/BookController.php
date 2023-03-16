<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::paginate(3);
        return view('books.index',compact('books'));
       //$books = Book::select('id','desc')->get();
       //$books = Book::where('title','=','book one')->get();
       //$books = Book::select('id','desc')->where('id','<',3)->get();
    }
    public function show($id){
       $book = Book::findOrFail($id);
       return view('books.show',compact('book'));
    }
    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        Book::create([
            'title' =>$request->title,
            'desc'  =>$request->desc
        ]);
        return redirect(route('books.index'));
    }
    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.edit',compact('book'));
     }
     public function update(Request $request , $id){
        Book::findOrFail($id)->update([
            'title' =>$request->title,
            'desc'  =>$request->desc
        ]);
        return redirect(route('books.edit',$id));
     }
     public function delete($id){
        Book::findOrFail($id)->delete();
        return redirect(route('books.index', $id));
     }
}
