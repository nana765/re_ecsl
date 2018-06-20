<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Tag;
use Validator;


class BookController extends Controller
{

    public function index(Request $request)
    {
        $books = Book::where('set',false)->paginate(10);
        $keyword = $request->input('keyword');
        if(!empty($keyword)){
            $books = Book::where('name' , 'LIKE', "%$keyword%")->paginate(10);
        }
        return view('book.index',compact('books'));
    }

    public function register()
    {
        $tags = Tag::all();
        return view('book.register',compact('tags'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:128',
            'place' => 'required|max:128',
            'symbol' => 'required|max:128',
            'isbn' =>'required|unique:books,isbn|digits:13',
            'tag1' => 'required|max:5',
            'tag2' => 'required|max:5',
            'tag3' => 'required|max:5',
        ]);

        if ($validator->fails()) {
            return redirect('register/book')
                        ->withErrors($validator)
                        ->withInput();
        }

        $book = new Book();
        $book->name = $request->name;
        $book->place = $request->place; //  配置場所
        $book->symbol = $request->symbol; //  請求記号
        $book->isbn = $request->isbn;
        $book->tag1 = $request->tag1;
        $book->tag2 = $request->tag2;
        $book->tag3 = $request->tag3;
        $book->save();
        return view('register');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function admit(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
