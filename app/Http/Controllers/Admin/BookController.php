<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Post;
use App\Models\PostBook;
use Illuminate\Http\Request;


class BookController extends Controller
{
    protected $modelName = 'App\Models\Book';
    protected $photoFolderName = 'books';
    protected $fileFolderName = 'books';

    public function index()
    {
        $categories = Category::get();
        $authors = Author::get();
        $genres = Genre::get();
        $books = Book::with('category', 'author', 'genre')->get();
        return view('Admin.Crud.book', compact('books', 'categories', 'authors', 'genres'));
    }

    public function store(BookRequest $request)
    {
        CRUD::create($this->modelName, $request, $this->photoFolderName, null, null, $this->fileFolderName);
        return back()->with('success', 'Maglumat üstünlikli goşuldy');
    }

    public function update(Request $request, $id)
    {
        CRUD::update($this->modelName, $request, $id, $this->photoFolderName, null, null, $this->fileFolderName);
        return redirect()->route('books.index')->with('success', 'Maglumat üstünlikli üýtgedildi');
    }

    public function destroy($id)
    {
        $postBookId = PostBook::where('book_id', $id)->pluck('id');
        if (count($postBookId) > 0) {
            Post::where('relationable_type', 'App\\Models\\PostBook')->where('relationable_id', $postBookId)->delete();
            PostBook::where('book_id', $id)->delete();
        }
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeleteBooks()
    {
        foreach (request('id') as $key => $id) {
            $postBookId = PostBook::where('book_id', $id)->pluck('id');
            Post::where('relationable_type', 'App\\Models\\PostBook')->where('relationable_id', $postBookId)->delete();
            PostBook::where('book_id', $id)->delete();
        }
        Book::destroy(request('id'));
        return response()->json("success", 200);
    }
}
