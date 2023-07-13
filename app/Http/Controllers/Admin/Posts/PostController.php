<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Models\PostBook;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('Admin.Posts.posts', compact('posts'));
    }

    public function selectDeletePosts()
    {
        foreach(request('model_name') as $key => $model_name) {
            if ($model_name == 'App\\Models\\PostBook') {
                PostBook::destroy(request('book_id')[$key]);
            }
        }
        Post::destroy(request('id'));
        return response()->json(request('id'), 200);
    }
}
