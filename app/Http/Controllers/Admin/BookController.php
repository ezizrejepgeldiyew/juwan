<?php

namespace App\Http\Controllers\Admin;

use App\Actions\CRUD;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Genre;
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
        CRUD::delete($this->modelName, $id);
        return back()->with('success', 'Maglumat üstünlikli pozuldy');
    }

    public function selectDeleteBooks()
    {
        Book::destroy(request('id'));
        return response()->json("success", 200);
    }
}
