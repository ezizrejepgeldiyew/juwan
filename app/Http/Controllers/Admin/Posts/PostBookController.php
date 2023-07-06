<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Post;
use App\Models\PostBook;

class PostBookController extends Controller
{
    public $modelName = 'App\Models\PostBook';

    public function index()
    {
        $postBooks = PostBook::get();
        return view('Admin.Posts.books', compact('postBooks'));
    }

    public function destroy($id)
    {
        Post::where('relationable_id', $id)->where('relationable_type', $this->modelName)->delete();
        PostBook::find($id)->delete();
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectBooks()
    {
        $postBookIds = PostBook::pluck('book_id');
        $books = Book::with('category')->whereNotIn('id', $postBookIds)->get();
        return view('Admin.Posts.select-books', compact('books'));
    }

    public function selectStoreBooks()
    {
        foreach (request('id') as $id) {
            $book = Book::find($id);
            $addPostBook = new PostBook;
            $addPostBook->book_id = $id;
            $addPostBook->photo = $book->photo;
            $addPostBook->category_id = $book->category_id;
            $addPostBook->author_id = $book->author_id;
            $addPostBook->name = $book->name;
            $addPostBook->description = $book->description;
            $addPostBook->save();

            $add = new Post();
            $add->relationable_id = $addPostBook->id;
            $add->relationable_type = $this->modelName;
            $add->save();
        }
        return response()->json(request('id'), 200);
    }

    public function selectDelete()
    {
        foreach (request('id') as $id) {
            Post::where('relationable_id', $id)->where('relationable_type', $this->modelName)->delete();
        }
        PostBook::destroy(request('id'));
        return response()->json("success", 200);
    }
}
