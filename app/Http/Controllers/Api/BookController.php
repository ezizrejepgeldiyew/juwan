<?php

namespace App\Http\Controllers\Api;

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
}
