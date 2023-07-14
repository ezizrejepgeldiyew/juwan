<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Favorit;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data = Post::with('relation')->paginate(5);
        $favorits = Favorit::where('user_id', $user->id)->get();
        foreach ($data as $item) {
            $item['favorit'] = false;
            foreach ($favorits as $favorit) {
                if ($item->relationable_type == $favorit->model_name && $item->relationable_id == $favorit->favorit_id) {
                    $item['favorit'] = true;
                }
            }
        }
        return response()->json(compact('data'), 200);
    }

    public function category()
    {
        $postCategoryId = Post::select('category_id')->groupBy('category_id')->get()->pluck('category_id');
        $data = Category::find($postCategoryId);
        return response()->json(compact('data'), 200);
    }
}
