<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function home()
    {
        return response()->view('welcome');    
    }

    public function books()
    {
        $books = Book::paginate(5);

        return response()->view('books', compact('books')); 
    }

    public function addbooks()
    {
        return response()->view('add-books');
    }
  
    public function storebooks(Request $request)
    {
        $book = new Book();
        $book->book_id = Str::random(6);
        $book->name = $request->name;
        $book->save();

        return redirect()->back()->with("success", "book successfully added");
    }

    public function assign()
    {
        $books = Book::whereNull('user_name')->get();

        return response()->view('assign', compact('books'));
    }

    public function assignbooks(Request $request)
    {
        $book = Book::find($request->book_id);
        $book->user_name = $request->user;
        $book->save();

        $log = new Log();
        $log->book_id = $book->book_id;
        $log->book_name = $book->name;
        $log->user_name = $request->user;
        $log->start_date = now();
        $log->save();

        return redirect()->back()->with("success", "book assigned successfully");
    }

    public function viewBook($id)
    {
        $book = Book::find($id);
        return response()->view('view-book', compact('book'));
    }

    public function statusUpdate($id)
    {
        $book = Book::find($id);
        $book->user_name = null;
        $book->save();

        $log = Log::where('book_id', $book->book_id)->first();
        $log->return_date = now();
        $log->save();

        return redirect()->back()->with("success", "book status updated successfully");
    }
}
