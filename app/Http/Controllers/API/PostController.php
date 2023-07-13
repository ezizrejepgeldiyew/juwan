<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::with('relation')->paginate(5);
        return response()->json(compact('data'), 200);
    }

    public function category()
    {
        $postCategoryId = Post::select('category_id')->groupBy('category_id')->get()->pluck('category_id');
        $data = Category::find($postCategoryId);
        return response()->json(compact('data'), 200);
    }
}
