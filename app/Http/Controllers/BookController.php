<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Validator;

class BookController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $books = Book::where('set',false)->paginate(15);;
        if(empty($keyword)){
            
        }
        return view('book.index',compact('books'));
    }

    public function register()
    {
        return view('book.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:128',
            'place' => 'required',
            'symbol' => 'required',
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
