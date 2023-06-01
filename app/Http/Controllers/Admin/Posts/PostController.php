<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('Admin.Posts.posts', compact('posts'));
    }

    public function selectDeletePosts()
    {
        Post::destroy(request('id'));
        return response()->json("success", 200);
    }
}
