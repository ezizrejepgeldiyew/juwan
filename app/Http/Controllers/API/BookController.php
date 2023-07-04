<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data = Book::with('category', 'author')->get();
        return response()->json(compact('data'), 200);
    }

    public function selectBook($id)
    {
        $data = Book::with('category', 'author')->find($id);
        return response()->json(compact('data'), 200);
    }

    public function category()
    {
        $bookCategoryId = Book::select('category_id')->groupBy('category_id')->get()->pluck('category_id');
        $data = Category::find($bookCategoryId);
        return response()->json(compact('data'), 200);
    }

    public function search()
    {
        $search = request('search');
        $books = Book::with('author', 'genre')->where('name', 'like', '%' . $search . '%')
            ->orWhereHas('author', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orWhereHas('genre', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->get();
        return response()->json($books, 200);
    }
}
