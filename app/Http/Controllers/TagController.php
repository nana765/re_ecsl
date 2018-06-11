<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Book;
use Validator;

class TagController extends Controller
{

    public function index(Request $request)
    {
        $tags = Tag::all();
        $tag_id = $request->input('tag_id');
        $books = Book::where('set',false)->paginate(15);
        if(!empty($tag_id)){
            $books = Book::where('tag1' , $tag_id)->orWhere('tag2' , $tag_id)->orWhere('tag3' , $tag_id)->paginate(15);
        }
        return view('tag.index',compact('books','tags'));
    }

    public function register()
    {
        return view('tag.register');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag' => 'required|max:128',
        ]);

        if ($validator->fails()) {
            return redirect('register/tag')
                        ->withErrors($validator)
                        ->withInput();
        }

        $tag = new Tag();
        $tag->name = $request->tag;
        $tag->save();
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

    public function destroy($id)
    {
        //
    }

}
