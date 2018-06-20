<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Tag;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book_num = Book::where('set',false)->count();
        $tag_num = Tag::where('set',false)->count();
        return view('admin.index',compact('book_num','tag_num'));
    }
}
